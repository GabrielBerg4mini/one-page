<?php
function theme_enqueue_styles()
{
    //carregar o estilo
    wp_enqueue_style('main-css', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0', 'all');
    wp_enqueue_style('plugin-css', get_template_directory_uri() . '/assets/css/plugins.css', array(), '1.0', 'all');

    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/theme.js', array('jquery'), '1.0', true);
    wp_enqueue_script('plugin-js', get_template_directory_uri() . '/assets/js/plugins.js', array('jquery'), '1.0' . true);
}

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
