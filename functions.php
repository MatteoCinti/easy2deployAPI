<?php

//Encode Divi Parent Styles
//Add personal styles
function my_theme_enqueue_styles() { 
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

    // Enqueue all custom js 
    wp_enqueue_style( 'api-plugin-main-style', get_stylesheet_directory_uri() . '/css/main.css', array(), '1.1.0' );
    wp_enqueue_style( 'api-plugin-listings-style', get_stylesheet_directory_uri() . '/css/listings.css', array(), '1.1.0' );
    wp_enqueue_style( 'api-plugin-texts-style', get_stylesheet_directory_uri() . '/css/text.css', array(), '1.1.0' );
    wp_enqueue_style( 'api-plugin-lightbox-style', get_stylesheet_directory_uri() . '/css/lightbox.css', array(), '1.1.0' );
    wp_enqueue_style( 'api-plugin-forms-style', get_stylesheet_directory_uri() . '/css/forms.css', array(), '1.1.0' );
    
    wp_enqueue_script( 'api-plugin-lightbox-script', get_stylesheet_directory_uri() . '/js/lightbox.js', array(), '1.1.0' );
    wp_enqueue_script( 'api-plugin-listing-script', get_stylesheet_directory_uri() . '/js/listing.js', array(), '1.1.0' );
    wp_enqueue_script( 'api-plugin-forms-script', get_stylesheet_directory_uri() . '/js/forms.js', array(), '1.1.0' );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

// Defer script loading!

function mind_defer_scripts( $tag, $handle, $src ) {
    $defer = array( 
      'api-plugin-lightbox-script',
      'api-plugin-listing-script',
      'api-plugin-forms-script',
    );
    if ( in_array( $handle, $defer ) ) {
        return '<script src="' . $src . '" defer="defer" type="text/javascript"></script>' . "\n";
    }
      return $tag;
  } 
  add_filter( 'script_loader_tag', 'mind_defer_scripts', 10, 3 );

// Include Shortcodes
include_once('api/shortcodes.php');


if ( function_exists( 'pll_register_string' ) ) { 
  pll_register_string( 'maxprice', 'Prix Maximum', 'Polylang');
}