<?php
add_action('wp_enqueue_scripts', 'pulse_styles');
add_action('wp_enqueue_scripts', 'pulse_scripts');

function pulse_styles() {
    wp_enqueue_style(
        'style-pulse', 
        get_stylesheet_uri() 
    );
};

function pulse_scripts() {
    
    wp_enqueue_script(
        'pulse-scripts', 
        get_template_directory_uri() . '/assets/js/script.js', 
        array(), 
        null, 
        true 
    );
    wp_enqueue_script(
        'pulse-scripts', 
        get_template_directory_uri() . '/assets/js/jquery.maskedinput.min.js', 
        array(), 
        null, 
        true 
    );
    wp_enqueue_script(
        'pulse-scripts', 
        get_template_directory_uri() . '/assets/js/jquery.validate.min.js', 
        array(), 
        null, 
        true 
    );
    wp_enqueue_script(
        'pulse-scripts', 
        get_template_directory_uri() . '/assets/js/slick.min.js', 
        array(), 
        null, 
        true 
    );
    wp_enqueue_script(
        'pulse-scripts', 
        get_template_directory_uri() . '/assets/js/wow.min.js', 
        array(), 
        null, 
        true 
    );
};

add_theme_support( 'custom-logo' )
;


?>