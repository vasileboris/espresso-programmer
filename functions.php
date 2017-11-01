<?php

function espresso_programmer_stylesheet() {
    wp_enqueue_style( 'espresso-programmer-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'espresso_programmer_stylesheet' );

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
add_action( 'after_setup_theme', 'espresso_programmer_custom_header_setup' );


function espresso_programmer_link() {
    return sprintf( '<a href="%1$s" rel="designer" title="%2$s">%3$s</a>',
        esc_url( 'https://espressoprogrammer.com/espresso-programmer-wp-theme' ),
        'Espresso Programmer: A beautiful WordPress theme, for you.',
        'Espresso Programmer');
}

function word_press_link() {
    return sprintf('<a href="%1$s" rel="generator" title="%2$s">%3$s</a>',
        'http://wordpress.org/',
        'WordPress: A free open-source publishing platform',
        'WordPress');
}

function espresso_programmer_footer_credits() {
    return sprintf( '%1$s empowered by %2$s', espresso_programmer_link(), word_press_link());
}

?>