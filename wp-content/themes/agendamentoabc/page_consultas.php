<?php
/*
Template Name: Consultas
*/


get_header();

 require(get_template_directory(). '/nav-menu.php');
 require(get_template_directory(). '/include_parts/query_parts.php');

echo do_shortcode('[exibir_formulario_insercao]');
echo do_shortcode('[exibir_agendamentos]');


get_footer();