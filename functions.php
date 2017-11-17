<?php

/**
 * Enable css stylesheet
 */
function espresso_programmer_stylesheet() {
    wp_enqueue_style( 'espresso-programmer-style', get_stylesheet_uri(), array( 'normalize' ) );
    wp_enqueue_style( 'normalize', get_stylesheet_directory_uri() . '/normalize.css' );
}
add_action( 'wp_enqueue_scripts', 'espresso_programmer_stylesheet' );

/**
 * Enable custom header image
 */
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

/**
 * Enable custom primary menu
 */
function espresso_programmer_navigation_setup() {
    register_nav_menus(
        array(
            'primary' => 'Primary menu'
        )
    );

}
add_action( 'after_setup_theme', 'espresso_programmer_navigation_setup' );

/**
 * @return Menu item css classes
 */
function espresso_programmer_primary_menu_item_classes() {
    return ['menu-item'];
}
add_filter( 'nav_menu_css_class', 'espresso_programmer_primary_menu_item_classes', 10, 0);

/**
 * Register our sidebars and widgetized areas.
 *
 */
function espresso_programmer_widgets_init() {

    register_sidebar( array(
        'name'          => 'Right sidebar',
        'id'            => 'espresso_programmer_right',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
    ) );

}
add_action( 'widgets_init', 'espresso_programmer_widgets_init' );

/**
 * @return Current theme and WordPress credit links
 */
function espresso_programmer_footer_credits() {
    return sprintf( '%1$s empowered by %2$s', espresso_programmer_link(), espresso_programmer_word_press_link());
}

/**
 * @return Current theme credit link
 */
function espresso_programmer_link() {
    return sprintf( '<a href="%1$s" rel="designer" title="%2$s">%3$s</a>',
        esc_url( 'https://espressoprogrammer.com/espresso-programmer-wp-theme' ),
        'Espresso Programmer: A beautiful WordPress theme, for you.',
        'Espresso Programmer');
}

/**
 * @return WordPress credit link
 */
function espresso_programmer_word_press_link() {
    return sprintf('<a href="%1$s" rel="generator" title="%2$s">%3$s</a>',
        'http://wordpress.org/',
        'WordPress is open source software you can use to create a beautiful website, blog, or app.',
        'WordPress');
}

?>