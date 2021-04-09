<?php

function sale_listings( $atts = array() ){
  extract(shortcode_atts(array(
    'classnames' => 'mosaic',
    'category' => 'all',
    'price' => '10000000000',
    'location' => ''
   ), $atts));
   
  ob_start(); ?> 
    <?php
    //Global Variables
    global $price_display;

    // Get From Form
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (isset($_POST["category"])){
        $category = $_POST["category"];
      }
      if (isset($_POST["price"])){
        $price = $_POST["price"];
      }
      if (isset($_POST["location"])){
        $location = $_POST["location"];
      }
    }
  ?>

  <?php
    // Import api data from correspondent file and set variables that will be used and retreived
    include_once "api-setup.php";
    global $listings;
    global $token;

    // Set api token (lasts 30 min)
    get_api_token();
    // Retreive all listings in $listings var
    get_all_listings($token);
  ?>
    
    <?php
  // Filter $listings through $category ( "" => all , 'vente', 'location)
    
    $filtered_listings = array_filter($listings, function ($listing) use ($category, $price, $location){
      if($category === 'all'  ){
        if($location){
          foreach($location as $place){
            if($place === $listing['localisation']['ville']){
              return $listing && $listing['prix']['budget'] <= $price && $place === $listing['localisation']['ville'];
            } 
          }
        } else {
          return $listing && $listing['prix']['budget'] <= $price;
        }
      } elseif( $category !== '' || $category !== 'all' ){
        if($location){
          foreach($location as $place){
            if($place === $listing['localisation']['ville']){
              return $listing && $listing['prix']['budget'] <= $price && $place === $listing['localisation']['ville'];
            } 
          }
        } else {
          return $listing['info']['vente_location'] === $category && $listing['prix']['budget'] <= $price;
        }    
      }
    });

  ?>



  <!-- Filtering Form -->
  <form method="POST" class="properties-filter" action="" name="propertiesFilter">  
    <div class="container">
      <?php get_template_part( 'template-parts/form/category','translatable'); ?>
      <?php get_template_part( 'template-parts/form/price','translatable'); ?>
      <?php get_template_part( 'template-parts/form/location','translatable'); ?>
    </div><!--.container-->


  <div class="filtered-values">
    <?php if( function_exists( 'pll_current_language' ) ){ ?> 

      <?php if( pll_current_language('slug') === 'fr' ){ ?>

        <button type="submit">Filtrer les annonces</button>
      
        <p class="selected-option-header"> <?php  echo count($filtered_listings) . ' ' ?> 
          annonces trouvés 
          <?php if(!empty($location)||$price !== '10000000000'||$category !== 'all'){ ?>
            <?php echo 'suivant les filtres: '; ?>
          <?php } ?>
        </p>

      <?php } elseif( pll_current_language('slug') === 'en' ){ ?>

        <button type="submit">Filter Listings</button>
      
        <p class="selected-option-header"> <?php  echo count($filtered_listings) . ' ' ?> 
          Found listings
          <?php if(!empty($location)||$price !== '10000000000'||$category !== 'all'){ ?>
            <?php echo 'with the filters: '; ?>
          <?php } ?>
        </p>

      <?php } elseif( pll_current_language('slug') === 'de' ){ ?>

        <button type="submit">Filterhauslisten</button>
      
        <p class="selected-option-header"> <?php  echo count($filtered_listings) . ' ' ?> 
          angebote gefunden
          <?php if(!empty($location)||$price !== '10000000000'||$category !== 'all'){ ?>
            <?php echo 'mit den Filtern: '; ?>
          <?php } ?>
        </p>

      <?php } ?>

    <?php } else { ?>

      <button type="submit">Filtrer les annonces</button>
      
      <p class="selected-option-header"> <?php  echo count($filtered_listings) . ' ' ?> 
        annonces trouvés 
        <?php if(!empty($location)||$price !== '10000000000'||$category !== 'all'){ ?>
          <?php echo 'suivant les filtres: '; ?>
        <?php } ?>
      </p>


    <?php } ?>

    <p>
      <?php 
        if($category !== 'all'){
          echo '<span class="selected-option cat">'.$category.'</span>';  
          echo '<span> - </span>';
        }
      ?>
      <?php if($location){ ?>
        <span class="selected-location">
          <?php foreach ($location as $selectedOption)
                echo '<span class="selected-option loc">'.$selectedOption.'</span>';  ?>
        </span>
      <?php } ?>

      <?php 
        if( $price !== '10000000000'){
          echo '<span> - </span>';
          echo '<span class="selected-option price">'.$price.' €</span>';
        } ?>
    </p>

  </div>

  </form>  



  
  <?php echo '<div class="images-container listings-images-container '.$classnames.'">' ?>

   <?php  foreach($filtered_listings as $listing){
     get_template_part( 'template-parts/listings/img/image','cover', $listing); 
   } ?>

  </div>

  <?php return ob_get_clean(); ?>  

<?php }

add_shortcode('sale_listings_shortcode', 'sale_listings'); 


function single_listing( $atts = array() ){
  // set up default parameters
  ob_start(); 
  //API CALLS
  include_once "api-setup.php";
  include_once __DIR__ . '/../functions.php';
  // include_once "...\Divi\epanel\custom_functions.php";
  global $listings;
  global $token;
  global $annonceId;
  get_api_token();
  get_all_listings($token);
  ?>

<?php 
  // //Filter single listing by Id and assign it to variable $listing
  // function filter_by_id($listing) { 
  //   global $annonceId;
  //   $annonceId = $_GET['annonceId'];
  //   return $listing['info']['id'] == $annonceId;
  // }

  // filter_by_id is Declared in Functions.php
  $listing = array_filter($listings, "filter_by_id");
  $listing_key= key($listing);
  $this_listing= $listing[key($listing)];
?>



<div class="info-container">
  
  <!-- //Call Picture gallery -->
  <?php get_template_part( 'template-parts/listings/img/image','slideshow', $listing[key($listing)]); ?>
  
  <div class="page-title">
    <?php // Article  Title ?>
    <?php if( isset( $this_listing['info']['titre'] ) ){ ?>
      <h3 class="title article-title"><?php echo $this_listing['info']['titre']; ?></h3>
    <?php } ?>
  </div>


  <?php
    //Call Details
    get_template_part( 'template-parts/listings/info/summary','post', $listing[key($listing)]);
  ?>

  <div class="info">
    <?php
      //Call Details
      get_template_part( 'template-parts/listings/info/details','full', $listing[key($listing)]); 
  
      //Call Caracteristique
      get_template_part( 'template-parts/listings/info/caracteristiques','post', $listing[key($listing)]); 

      //Call Electromenagers
      get_template_part( 'template-parts/listings/info/electromenagers','post', $listing[key($listing)]); 
    ?>
  </div>



  <?php
  //Call Info
  get_template_part( 'template-parts/listings/info/description','full', $listing[key($listing)]); 

 
  ?>

<?php
  
  // $src = 'https://www.google.com/maps/embed/v1/place?key='.$google_api_key.'&q=business%20horizons%20luxembourg';
?>

<!-- Call Virtual Visit -->
<?php  get_template_part( 'template-parts/listings/virtual-visit/virtual-visit','component', $listing[key($listing)]); ?>

<!-- Call Map -->
<?php  get_template_part( 'template-parts/listings/map/map','component', $listing[key($listing)]); ?>


</div>
<?php return ob_get_clean(); 

}

add_shortcode('single_listing_shortcode', 'single_listing'); 

