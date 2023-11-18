<?php

include get_template_directory() . '/inc/functionparts/abc_enqueues.php';

require_once 'AgendamentoManager.php';

//require get_template_directory() . '/inc/adminparts/optionspage.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);
function register_my_menus() {
    register_nav_menus(
        array(
            'header-menu' => __( 'Header Menu' ),
            'extra-menu' => __( 'Extra Menu' )
        )
    );
}
add_action( 'init', 'register_my_menus' );

/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

function agendamento_table() {
    global $wpdb;
    $table = $wpdb->prefix . 'agendamento_consulta';
    $wpdb_collate = $wpdb->collate;

    $sql = "CREATE TABLE {$table} (
        id INT NOT NULL AUTO_INCREMENT,
        nome_completo VARCHAR(200) NULL,
        email VARCHAR(100) NULL,
        horario_consulta DATETIME NULL,
        whatsapp VARCHAR(100) NULL,
        profissional VARCHAR(100) NULL,
        estado VARCHAR(100) NULL,
        PRIMARY KEY  (id)
    ) COLLATE {$wpdb_collate}";

    require_once ABSPATH . 'wp-admin/includes/upgrade.php';
    dbDelta($sql);
}

add_action('init', 'agendamento_table');

function processar_formulario_agendamento() {
    global $wpdb;

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nome_completo = sanitize_text_field($_POST['nome_completo']);
        $email = sanitize_email($_POST['email']);
        $horario_consulta = sanitize_text_field($_POST['horario_consulta']);
        $whatsapp = sanitize_text_field($_POST['whatsapp']);
        $profissional = sanitize_text_field($_POST['profissional']);
        $estado = sanitize_text_field($_POST['estado']);

        $table_name = $wpdb->prefix . 'agendamento_consulta';

        $wpdb->insert(
            $table_name,
            array(
                'nome_completo' => $nome_completo,
                'email' => $email,
                'horario_consulta' => $horario_consulta,
                'whatsapp' => $whatsapp,
                'profissional' => $profissional,
                'estado' => $estado
            )
        );
    }
}

add_action('init', 'processar_formulario_agendamento');

function exibir_tabela_agendamentos() {
    $manager = new AgendamentoManager();
    $agendamentos = $manager->listar_agendamentos();

    if ($agendamentos) {
        echo '<div class="container text-center mt-4">';
        echo '<div class="row align-items-start shadow p-3 rounded">';
        echo '<div class="col">';
        echo '<h4>Todos os pacientes</h4>';
        echo '<table class="table">';
        echo '<thead>';
        echo '<tr>';
        echo '<th scope="col">Nº</th>';
        echo '<th scope="col">Nome</th>';
        echo '<th scope="col">Email</th>';
        echo '<th scope="col">CRP</th>';
        echo '<th scope="col">Especialização</th>';
        echo '<th scope="col">Demanda de preferência</th>';
        echo '<th scope="col">Acompanhamento</th>';
        echo '<th scope="col">Editar</th>';
        echo '<th scope="col">Deletar</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';

        foreach ($agendamentos as $agendamento) {
            echo '<tr>';
            echo '<th scope="row"><span class="bg-primary text-light rounded p-2">' . $agendamento['id'] . '</span></th>';
            echo '<td>' . $agendamento['nome_completo'] . '</td>';
            echo '<td>' . $agendamento['email'] . '</td>';
            echo '<td>' . $agendamento['whatsapp'] . '</td>';
            echo '<td>' . $agendamento['profissional'] . '</td>';
            echo '<td>' . $agendamento['estado'] . '</td>';
            echo '<td><button class="btn btn-primary"><i class="bi bi-eye"></i> Ver resumo</button></td>';
            echo '<td><button class="btn btn-success editar-btn" data-agendamento-id="' . $agendamento['id'] . '"><i class="bi bi-person-dash"></i> Editar</button></td>';
            echo '<td><button class="btn btn-danger"><i class="bi bi-trash"></i> Deletar</button></td>';
            echo '</tr>';
        }

        echo '</tbody>';
        echo '</table>';
        echo '<button class="btn btn-primary">Ver todos os registros</button>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        ?>
        <div class="modal" tabindex="-1" role="dialog" id="editarModal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Editar Agendamento</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" id="modalContent">
                        <!-- O conteúdo do formulário de edição será carregado aqui -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>
        <script>
            jQuery(document).ready(function ($) {
                $('.editar-btn').on('click', function () {
                    var agendamentoId = $(this).data('agendamento-id');
                    $.ajax({
                        url: '<?php echo admin_url('admin-ajax.php'); ?>',
                        type: 'POST',
                        data: {
                            action: 'carregar_formulario_edicao_agendamento',
                            agendamento_id: agendamentoId,
                            nonce: '<?php echo wp_create_nonce('editar_agendamento_nonce'); ?>'
                        },
                        success: function (response) {
                            $('#modalContent').html(response);
                            $('#editarModal').modal('show');
                        }
                    });
                });

                $('.excluir-btn').on('click', function () {
                    var agendamentoId = $(this).data('agendamento-id');
                    if (confirm('Tem certeza de que deseja excluir este agendamento?')) {
                        $.ajax({
                            url: '<?php echo admin_url('admin-ajax.php'); ?>',
                            type: 'POST',
                            data: {
                                action: 'excluir_agendamento',
                                agendamento_id: agendamentoId,
                                nonce: '<?php echo wp_create_nonce('excluir_agendamento_nonce'); ?>'
                            },
                            success: function (response) {
                                if (response.success) {
                                    // Atualizar a tabela ou tomar outras medidas necessárias
                                    alert('Agendamento excluído com sucesso!');
                                } else {
                                    alert('Erro ao excluir agendamento: ' + response.data);
                                }
                            }
                        });
                    }
                });
            });
        </script>

        <?php
    } else {
        echo '<p>Nenhum agendamento encontrado.</p>';
    }
}

add_shortcode('exibir_agendamentos', 'exibir_tabela_agendamentos');

function carregar_formulario_edicao_agendamento() {
    check_ajax_referer('editar_agendamento_nonce', 'nonce');
    $agendamento_id = $_POST['agendamento_id'];
    exibir_formulario_alteracao_agendamento($agendamento_id);
    wp_die();
}

add_action('wp_ajax_carregar_formulario_edicao_agendamento', 'carregar_formulario_edicao_agendamento');



function exibir_formulario_insercao_agendamento() {
    ?>
    <form method="post">
        <label for="nome_completo">Nome Completo:</label>
        <input type="text" name="nome_completo" required>

        <label for="email">Email:</label>
        <input type="email" name="email" required>

        <label for="horario_consulta">Horário da Consulta:</label>
        <input type="text" name="horario_consulta" required>

        <label for="whatsapp">WhatsApp:</label>
        <input type="text" name="whatsapp" required>

        <label for="profissional">Profissional:</label>
        <input type="text" name="profissional" required>

        <label for="estado">Estado:</label>
        <input type="text" name="estado" required>

        <input type="submit" name="inserir_agendamento" value="Inserir">
    </form>
    <?php
}

function processar_insercao_agendamento() {
    if (isset($_POST['inserir_agendamento'])) {
        $dados = array(
            'nome_completo' => sanitize_text_field($_POST['nome_completo']),
            'email' => sanitize_email($_POST['email']),
            'horario_consulta' => sanitize_text_field($_POST['horario_consulta']),
            'whatsapp' => sanitize_text_field($_POST['whatsapp']),
            'profissional' => sanitize_text_field($_POST['profissional']),
            'estado' => sanitize_text_field($_POST['estado']),
        );

        $manager = new AgendamentoManager();
        $result = $manager->inserir_agendamento($dados);

        if ($result === false) {
            error_log("Erro ao inserir no banco de dados: " . $manager->get_last_error());
        } else {
            wp_redirect(get_permalink());
            exit;
        }
    }
}

add_shortcode('exibir_formulario_insercao', 'exibir_formulario_insercao_agendamento');
add_action('init', 'processar_insercao_agendamento');

function exibir_formulario_alteracao_agendamento($agendamento_id) {
    $manager = new AgendamentoManager();
    $agendamento = $manager->obter_agendamento_por_id($agendamento_id);

    // Verifica se $agendamento é um array antes de tentar acessar suas chaves
    if (is_array($agendamento) && count($agendamento) > 0) {
        $nome_completo = isset($agendamento['nome_completo']) ? esc_attr($agendamento['nome_completo']) : '';
        $email = isset($agendamento['email']) ? esc_attr($agendamento['email']) : '';
        $horario_consulta = isset($agendamento['horario_consulta']) ? esc_attr($agendamento['horario_consulta']) : '';
        $whatsapp = isset($agendamento['whatsapp']) ? esc_attr($agendamento['whatsapp']) : '';
        $profissional = isset($agendamento['profissional']) ? esc_attr($agendamento['profissional']) : '';
        $estado = isset($agendamento['estado']) ? esc_attr($agendamento['estado']) : '';
        ?>
        <form method="post">
            <label for="nome_completo">Nome . Completo:</label>
            <input type="text" name="nome_completo" value="<?php echo $nome_completo; ?>" required>

            <label for="email">Email:</label>
            <input type="email" name="email" value="<?php echo $email; ?>" required>

            <label for="horario_consulta">Horário da Consulta:</label>
            <input type="text" name="horario_consulta" value="<?php echo $horario_consulta; ?>" required>

            <label for="whatsapp">WhatsApp:</label>
            <input type="text" name="whatsapp" value="<?php echo $whatsapp; ?>" required>

            <label for="profissional">Profissional:</label>
            <input type="text" name="profissional" value="<?php echo $profissional; ?>" required>

            <label for="estado">Estado:</label>
            <input type="text" name="estado" value="<?php echo $estado; ?>" required>

            <input type="submit" name="atualizar_agendamento" value="Atualizar">
        </form>
        <?php
    } else {
        echo '<p>Agendamento não encontrado.</p>';
    }
}

add_shortcode('exibir_formulario_alteracao', 'exibir_formulario_alteracao_agendamento');

function processar_atualizacao_agendamento() {
    if (isset($_POST['atualizar_agendamento']) && isset($_GET['id'])) {
        $agendamento_id = sanitize_text_field($_GET['id']);
        $novos_dados = array(
            'nome_completo' => sanitize_text_field($_POST['nome_completo']),
            'email' => sanitize_email($_POST['email']),
            'horario_consulta' => sanitize_text_field($_POST['horario_consulta']),
            'whatsapp' => sanitize_text_field($_POST['whatsapp']),
            'profissional' => sanitize_text_field($_POST['profissional']),
            'estado' => sanitize_text_field($_POST['estado']),
        );

        $manager = new AgendamentoManager();
        $manager->atualizar_agendamento($agendamento_id, $novos_dados);

        wp_redirect(get_permalink());
        exit;
    } else {
        // Adicione uma lógica de tratamento de erro aqui, se necessário
        // Por exemplo, redirecionar para uma página de erro ou exibir uma mensagem
    }
}


add_action('init', 'processar_atualizacao_agendamento');

function exibir_formulario_edicao_agendamento() {
    if (isset($_GET['id'])) {
        $agendamento_id = sanitize_text_field($_GET['id']);
        exibir_formulario_alteracao_agendamento($agendamento_id);
    } else {
        echo '<p>ID do agendamento não fornecido.</p>';
    }
}

add_shortcode('exibir_formulario_edicao', 'exibir_formulario_edicao_agendamento');

function processar_exclusao_agendamento() {
    if (isset($_GET['action']) && $_GET['action'] === 'excluir' && isset($_GET['id'])) {
        $agendamento_id = sanitize_text_field($_GET['id']);
        $manager = new AgendamentoManager();
        $manager->excluir_agendamento($agendamento_id);

        wp_redirect(get_permalink());
        exit;
    }
}

add_action('init', 'processar_exclusao_agendamento');

