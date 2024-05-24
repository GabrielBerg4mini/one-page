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

//adiciona suporte para menus
function theme_setup()
{
    register_nav_menus(
        array(
            'menu-header' => __('Menu Header'),
            'menu-footer' => __('Menu Footer'),
        )
    );

    //Adiciona suporte para classes no itens do menu
    add_filter('nav_menu_css_class', 'add_menu_item_classes', 10, 4);
    function add_menu_item_classes($classes, $item, $args, $depth)
    {
        //verifica se o item do menu está na página home
        if (is_front_page() && $item->title == 'Home') {
            //adiciona a classe 'acative'
            $classes[] = 'active';
        }
        return $classes;
    }

    add_filter('nav_menu_link_attributes', 'add_menu_link_classes', 10, 3);
    function add_menu_link_classes($atts, $item, $args)
    {
        //verifica se o item do menu está na página home
        if (is_front_page() && $item->title == 'Home') {
            //adiciona a classe 'active' ao link do item do menu 'home' na home
            $atts['class'] = 'nav-link scroll active';
        } else {
            $atts['class'] = 'nav-link scroll';
        }
        return $atts;
    }
}
add_action('after_setup_theme', 'theme_setup');
