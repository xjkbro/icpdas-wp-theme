<?php
function icpdas_register_styles()
{
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style("icpdas-main-style", get_template_directory_uri() . "/style.css", array(), "1.0", "all");
    wp_enqueue_style("icpdas-bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css", array(), "1.0", "all");
    // wp_enqueue_style("icpdas-main-style", get_template_directory_uri() . "/style.css", array(), "1.0", "all");
}

add_action("wp_enqueue_scripts", "icpdas_register_styles");
