<?php

include get_template_directory() . '/inc/functionparts/abc_enqueues.php';


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


// Função para lidar com o envio do formulário e inserção de dados no banco de dados
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
