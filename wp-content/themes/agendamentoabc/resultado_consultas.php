<?php

/*
Template Name: Resultado Consultas
*/


// Inclua o cabeçalho do WordPress
get_header();

global $wpdb;
$table_name = $wpdb->prefix . 'agendamento_consulta';

$registros = $wpdb->get_results("SELECT * FROM $table_name");
var_dump($wpdb);
if ($registros) {
    echo '<h1>Lista de Agendamentos de Consulta</h1>';
    echo '<table>';
    echo '<tr>';
    echo '<th>ID</th>';
    echo '<th>Nome Completo</th>';
    echo '<th>Email</th>';
    echo '<th>Horário da Consulta</th>';
    echo '<th>WhatsApp</th>';
    echo '<th>Profissional</th>';
    echo '<th>Estado</th>';
    echo '</tr>';

    foreach ($registros as $registro) {
        echo '<tr>';
        echo '<td>' . $registro->id . '</td>';
        echo '<td>' . $registro->nome_completo . '</td>';
        echo '<td>' . $registro->email . '</td>';
        echo '<td>' . $registro->horario_consulta . '</td>';
        echo '<td>' . $registro->whatsapp . '</td>';
        echo '<td>' . $registro->profissional . '</td>';
        echo '<td>' . $registro->estado . '</td>';
        echo '</tr>';
    }

    echo '</table>';
} else {
    echo '<p>Nenhum registro encontrado.</p>';
}

get_footer();
