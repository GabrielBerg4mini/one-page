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

//tipo de post costumizado

function create_post_type()
{
    register_post_type(
        'acme_services',
        array(
            'labels' => array(
                'name' => __('Services'),
                'singular_name' => __('Services'),
                'add_new' => __('Add New Service'),
                'add_new_item' => __('Add New Service'),
                'edit_item' => __('Edit Service'),
                'new_item' => __('New Service'),
                'view_item' => __('View Service'),
                'view_items' => __('View Services'),
                'search_items' => __('Search Services'),
                'not_found' => __('No services found'),
                'not_found_in_trash' => __('No services found in Trash'),
                'all_items' => __('All Services'),
                'archives' => __('Service Archives'),
                'attributes' => __('Service Attributes'),
                'insert_into_item' => __('Insert into service'),
                'uploaded_to_this_item' => __('Uploaded to this service'),
            ),
            'public' => true,
            'has_archive' => true,
            'description' => 'Post para Services',
            'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
            'taxonomies' => array('category', 'post_tag'),
            'menu_icon' => 'dashicons-hammer',
        )
    );

    register_post_type(
        'acme_process',
        array(
            'labels' => array(
                'name' => __('Process'),
                'singular_name' => __('Process'),
                'add_new' => __('Add New Process'),
                'add_new_item' => __('Add New Process'),
                'edit_item' => __('Edit Process'),
                'new_item' => __('New Process'),
                'view_item' => __('View Process'),
                'view_items' => __('View Process'),
                'search_items' => __('Search Process'),
                'not_found' => __('No process found'),
                'not_found_in_trash' => __('No process found in Trash'),
                'all_items' => __('All Process'),
                'archives' => __('Process Archives'),
                'attributes' => __('Process Attributes'),
                'insert_into_item' => __('Insert into process'),
                'uploaded_to_this_item' => __('Uploaded to this process'),
            ),
            'public' => true,
            'has_archive' => true,
            'description' => 'Post para Process',
            'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
            'taxonomies' => array('category', 'post_tag'),
            'menu_icon' => 'dashicons-schedule',
        )
    );
}
add_theme_support('post-thumbnails', array('acme_services'));
add_action('init', 'create_post_type');
