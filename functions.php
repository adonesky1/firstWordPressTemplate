<?php 

function startwordpress_scripts() {
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.6' );
    wp_enqueue_style('blog', get_template_directory_uri() . '/css/blog.css');
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '3.3.6', true);
}

add_action('wp_enqueue_scripts', 'startwordpress_scripts');

function startwordpress_google_fonts(){
    wp_register_style('OpenSans', 'http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800');
    wp_enqueue_style('OpenSans');

}

add_action('wp_print_styles', 'startwordpress_google_fonts');


add_theme_support('title-tag');

function custom_settings_add_menu(){
    add_menu_page('Custom Settings', 'Custom Settings', 'manage_options', 'custom-settings', 'custom_settings_page', null, 99);
}
add_action('admin_menu', 'custom_settings_add_menu');

?>