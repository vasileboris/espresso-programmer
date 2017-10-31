<?php

if ( !function_exists('espresso_programmer_stylesheet' ) ) :
    function espresso_programmer_stylesheet() {
        wp_enqueue_style( 'espresso-programmer-style', get_stylesheet_uri() );
    }
endif;
add_action( 'wp_enqueue_scripts', 'espresso_programmer_stylesheet' );

if ( !function_exists('espresso_programmer_custom_header_setup' ) ) :
    function espresso_programmer_custom_header_setup() {
        $defaults = array(
            'default-image'          => '',
            'width'                  => 100,
            'height'                 => 100,
            'flex-width'             => true,
            'flex-height'            => true,
            'uploads'                => true,
            'random-default'         => false,
            'header-text'            => false,
            'default-text-color'     => '',
            'wp-head-callback'       => '',
            'admin-head-callback'    => '',
            'admin-preview-callback' => '',
        );
        add_theme_support( 'custom-header', $defaults );

    }
endif;
add_action( 'after_setup_theme', 'espresso_programmer_custom_header_setup' );

?>