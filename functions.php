<?php

if (!function_exists('espresso_programmer_stylesheet')) :
    /**
     * Enqueue main stylesheet
     */
    function espresso_programmer_stylesheet() {
        wp_enqueue_style( 'espresso-programmer-style', get_stylesheet_uri() );
    }
endif;
add_action( 'wp_enqueue_scripts', 'espresso_programmer_stylesheet' );

?>