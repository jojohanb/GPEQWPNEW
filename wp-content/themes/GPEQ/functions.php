<?php

//Carregando scripts e css's
function load_scripts() {
    wp_enqueue_style('template', get_template_directory_uri() . '/css/template.css', array(), time(), 'all');

    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js', array(), '5.3.3', true );
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css', array(), '5.3.3', 'all');
    wp_enqueue_style('template', get_template_directory_uri() . '/css/template.css', array(), null, 'all');
}

add_action('wp_enqueue_scripts', 'load_scripts');

// Registrando meus menus

function wpestagio_config(){
    register_nav_menus(
         array(
                'my_main_menu' => 'Main menu'
                // 'footer_menu'=> 'Footer menu'
        )
    );

    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 100,
        'flex-height' => true,
        'flex-width'  => true,
    ));    

    // $args = array(
    //     'height' =>225,
    //     'width'  =>1920
    // );
    // add_theme_support( 'custom-header', $args);
}

add_action('after_setup_theme', 'wpestagio_config', 0);





