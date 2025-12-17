<?php
/**
 * Theme Functions
 */

function ieee_esprit_scripts() {
    // Enqueue the main stylesheet
    wp_enqueue_style( 'ieee-esprit-style', get_stylesheet_uri() );
    
    // You could also enqueue Google Fonts here
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;800&display=swap', array(), null );
}
add_action( 'wp_enqueue_scripts', 'ieee_esprit_scripts' );

function ieee_esprit_setup() {
    // Register navigation menus
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'ieee-esprit' ),
    ) );

    // Add theme support for document title tag
    add_theme_support( 'title-tag' );
    
    // Add support for custom logo
    add_theme_support( 'custom-logo' );
}
add_action( 'after_setup_theme', 'ieee_esprit_setup' );
