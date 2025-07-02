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



function enqueue_frontpage_carousel_script() {
    if (is_front_page()) {
        // Registrar y encolar el script personalizado
        wp_enqueue_script(
            'carousel-script',                        // handle único
            get_template_directory_uri() . '/assets/js/scripts-front.js',  // ruta a tu script
            array(),                                 // dependencias (agrega 'jquery' si usas jQuery)
            '1.0',
            true                                    // cargar en footer
        );
    }
}
add_action('wp_enqueue_scripts', 'enqueue_frontpage_carousel_script');
