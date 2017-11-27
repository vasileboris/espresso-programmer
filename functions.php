<?php

if ( !function_exists( 'espresso_programmer_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Espresso Programmer 1.0
	 */
	function espresso_programmer_setup() {
		add_theme_support( 'title-tag' );

		add_theme_support( 'post-thumbnails' );

		/*
		 * Add custom thumbnail size for use with featured images
		 */
		add_image_size( 'espresso_programmer_post_thumbnail', 700, 700 );

		register_nav_menus(
			array(
				'primary' => __( 'Primary menu', 'espresso-programmer' )
			)
		);

		/*
		 * Enable custom header image
		 */
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
add_action( 'after_setup_theme', 'espresso_programmer_setup' );

if ( !function_exists( 'espresso_programmer_stylesheet' ) ) :
	/**
	 * Enable css stylesheet
	 *
	 * @since Espresso Programmer 1.0
	 */
	function espresso_programmer_stylesheet() {
		wp_enqueue_style( 'espresso-programmer-style',
			get_stylesheet_uri(),
			array( 'normalize', 'open-sans-google-font', 'source-code-pro-google-font' ),
			espresso_programmer_css_version( get_stylesheet_directory() . '/style.css' ) );
		wp_enqueue_style( 'normalize',
			get_stylesheet_directory_uri() . '/normalize.css',
			array(),
			espresso_programmer_css_version( get_stylesheet_directory() . '/normalize.css' ) );
		wp_enqueue_style( 'open-sans-google-font', 'https://fonts.googleapis.com/css?family=Open+Sans' );
		wp_enqueue_style( 'source-code-pro-google-font', 'https://fonts.googleapis.com/css?family=Source+Code+Pro' );
	}
endif;
add_action( 'wp_enqueue_scripts', 'espresso_programmer_stylesheet' );

/**
 * @return Menu item css classes
 *
 * @since Espresso Programmer 1.0
 */
function espresso_programmer_primary_menu_item_classes() {
	return ['menu-item'];
}
add_filter( 'nav_menu_css_class', 'espresso_programmer_primary_menu_item_classes', 10, 0);

/**
 * Register our sidebars and widgetized areas.
 *
 * @since Espresso Programmer 1.0
 */
function espresso_programmer_widgets_init() {

	register_sidebar( array(
		'name'          => 'Main sidebar',
		'id'            => 'espresso_programmer_sidebar_main',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'espresso_programmer_widgets_init' );

/**
 * @return Current theme and WordPress credit links
 *
 * @since Espresso Programmer 1.0
 */
function espresso_programmer_footer_credits() {
	return sprintf( '%1$s empowered by %2$s', espresso_programmer_link(), espresso_programmer_word_press_link());
}

/**
 * @return Current theme credit link
 *
 * @since Espresso Programmer 1.0
 */
function espresso_programmer_link() {
	return sprintf( '<a href="%1$s" rel="author" title="%2$s">%3$s</a>',
		esc_url( 'https://espressoprogrammer.com/espresso-programmer-wp-theme' ),
		'Espresso Programmer: A beautiful WordPress theme, for you.',
		'Espresso Programmer');
}

/**
 * @return WordPress credit link
 *
 * @since Espresso Programmer 1.0
 */
function espresso_programmer_word_press_link() {
	return sprintf('<a href="%1$s" rel="external" title="%2$s">%3$s</a>',
		'http://wordpress.org/',
		'WordPress is open source software you can use to create a beautiful website, blog, or app.',
		'WordPress');
}

/**
 * @param $css Full path to css file
 * @return string Css file version based on wordpress version and last file update time
 *
 * @since Espresso Programmer 1.0
 */
function espresso_programmer_css_version($css) {
	return get_bloginfo( 'version' ) . '-' . filemtime( $css );
}

?>