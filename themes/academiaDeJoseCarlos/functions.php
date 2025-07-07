<?php
// CSS

function mi_tema_enqueue_styles() {
    wp_enqueue_style(
        'estilos-principales',
        get_stylesheet_directory_uri() . '/style.css'
    );
}
add_action('wp_enqueue_scripts', 'mi_tema_enqueue_styles');

// javascript

function mi_tema_scripts() {
    wp_enqueue_script(
        'main-js',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        null,
        true
    );
}
add_action('wp_enqueue_scripts', 'mi_tema_scripts');

// quitar Worpress default nav bar

function my_function_admin_bar(){
    return false;
}
add_filter( 'show_admin_bar' , 'my_function_admin_bar');

function enqueue_font_awesome() {
    wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_font_awesome' );
