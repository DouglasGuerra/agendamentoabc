<?php

class AgendamentoManager {
    private $table_name;

    public function __construct() {
        global $wpdb;
        $this->table_name = $wpdb->prefix . 'agendamento_consulta';
    }

    private function start_transaction() {
        global $wpdb;
        $wpdb->query('START TRANSACTION');
    }

    private function commit_transaction() {
        global $wpdb;
        $wpdb->query('COMMIT');
    }

    private function rollback_transaction() {
        global $wpdb;
        $wpdb->query('ROLLBACK');
    }

    private function redirect($url = '') {
        if (empty($url)) {
            $url = get_permalink();
        }

        wp_redirect($url);
        exit;
    }

    public function listar_agendamentos() {
        global $wpdb;
        return $wpdb->get_results("SELECT * FROM $this->table_name", ARRAY_A);
    }

    public function obter_agendamento_por_id($agendamento_id) {
        global $wpdb;
        return $wpdb->get_row(
            $wpdb->prepare("SELECT * FROM $this->table_name WHERE id = %d", $agendamento_id),
            ARRAY_A
        );
    }

    public function inserir_agendamento($dados, $redirect_url = '/consulta') {
        global $wpdb;

        try {
            $this->start_transaction();

            $result = $wpdb->insert($this->table_name, $dados);

            if ($result === false) {
                throw new Exception($wpdb->last_error);
            }

            $this->commit_transaction();
        } catch (Exception $e) {
            $this->rollback_transaction();
            error_log("Erro ao inserir agendamento: " . $e->getMessage());
            return;
        }

        //$this->redirect($redirect_url);
    }

    public function atualizar_agendamento($agendamento_id, $novos_dados, $redirect_url = '/consulta') {
        global $wpdb;

        try {
            $this->start_transaction();

            $result = $wpdb->update($this->table_name, $novos_dados, array('id' => $agendamento_id));

            if ($result === false) {
                throw new Exception($wpdb->last_error);
            }

            $this->commit_transaction();
        } catch (Exception $e) {
            $this->rollback_transaction();
            error_log("Erro ao atualizar agendamento: " . $e->getMessage());
            return;
        }

       // $this->redirect($redirect_url);
    }

    public function excluir_agendamento($agendamento_id, $redirect_url = '/consulta') {
        global $wpdb;

        try {
            $this->start_transaction();

            $result = $wpdb->delete($this->table_name, array('id' => $agendamento_id));

            if ($result === false) {
                throw new Exception($wpdb->last_error);
            }

            $this->commit_transaction();
        } catch (Exception $e) {
            $this->rollback_transaction();
            error_log("Erro ao excluir agendamento: " . $e->getMessage());
            return;
        }

        $this->redirect($redirect_url);
    }

    public function get_last_error() {
        global $wpdb;
        return $wpdb->last_error;
    }
}
