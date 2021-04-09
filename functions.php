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
    wp_enqueue_script( 'api-plugin-links-script', get_stylesheet_directory_uri() . '/js/links.js', array('jquery'), '1.1.0' );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

// Defer script loading!

function mind_defer_scripts( $tag, $handle, $src ) {
    $defer = array( 
      'api-plugin-lightbox-script',
      'api-plugin-listing-script',
      'api-plugin-forms-script',
      'api-plugin-links-script'
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

//Adding the Open Graph in the Language Attributes
function add_opengraph_doctype( $output ) {
  return $output . ' xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml"';
}
add_filter('language_attributes', 'add_opengraph_doctype');


//Lets add Open Graph Meta Info

function insert_fb_in_head() {
 
  global $post;
  // Import api data from correspondent file and set variables that will be used and retreived
  include_once "api/api-setup.php";
  include_once "api/shortcodes.php";
  global $listings;
  global $token; 

  if( isset($_GET['annonceId']) ){
    function filter_by_id($listing) { 
      global $annonceId;
      if(isset($_GET['annonceId'])){
        $annonceId = $_GET['annonceId'];
        return $listing['info']['id'] == $annonceId;
      }
      var_dump($_GET['annonceId'] );
    }
  }

  if ( !is_singular()) //if it is not a post or a page
    return; 
  
  if( isset($_GET['annonceId']) ){
    $listing = array_filter($listings, "filter_by_id");
    $listing_key= key($listing);
    $this_listing= $listing[key($listing)];
    extract($this_listing);
  }
  ?>
  <meta property="fb:app_id" content="2518696161771164" />
  <meta property="og:url" content="<?php echo get_permalink().'?annonceId='.urldecode($_GET['annonceId']); ?>" />
  <meta property="og:type" content="article"/>
  <meta property="og:title" content="<?php echo $info['titre']; ?>"/>
  <meta property="og:image" content="<?php echo $photos['1']['url']; ?>" />
  <meta property="og:description" content="Découvrez cette annonce sur notre site!"/>
  <meta property="og:site_name" content="<?php echo get_bloginfo( 'name' ); ?>"/>
 
<?php }
add_action( 'wp_head', 'insert_fb_in_head', 1 );
