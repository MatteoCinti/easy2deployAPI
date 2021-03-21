<?php
/**
 * easy2pilot Plugin - Image Cover Component
 * @package easy2pilot Plugin
 * @version 1.0.0
 */
?>

<?php //Get all variables from arrays present in passed args ?> 
<?php extract($args); ?>


<?php $home_url = get_home_url() ?>

<?php if( function_exists( 'pll_current_language' ) ){ ?> 

  <?php if( pll_current_language('slug') === 'fr' ){ ?>

    <div class="container img-container">
      <?php echo '<a class="img-frame listings-img-frame" href="'.$home_url.'/annonce?annonceId='.$info['id'].'">'; ?>
        <!-- Image and the small banner -->
          <?php echo '<img src="'.$photos['1']['url'].'" alt="" class="thumbnail-image">' ?>
          <?php // Image Meta ?>
          <?php get_template_part( 'template-parts/listings/img/image','meta', $args);  ?>

      <?php echo '</a>' ?>

      <?php // Image Title ?>
      <?php get_template_part( 'template-parts/listings/img/image','title', $args);  ?>

    </div>

  <?php } elseif( pll_current_language('slug') === 'en' ){ ?>

    <div class="container img-container">
      <?php echo '<a class="img-frame listings-img-frame" href="'.$home_url.'/listing?annonceId='.$info['id'].'">'; ?>
        <!-- Image and the small banner -->
          <?php echo '<img src="'.$photos['1']['url'].'" alt="" class="thumbnail-image">' ?>
          <?php // Image Meta ?>
          <?php get_template_part( 'template-parts/listings/img/image','meta', $args);  ?>

      <?php echo '</a>' ?>

      <?php // Image Title ?>
      <?php get_template_part( 'template-parts/listings/img/image','title', $args);  ?>

    </div>

  <?php } ?>

<?php } else { ?>

  <div class="container img-container">
      <?php echo '<a class="img-frame listings-img-frame" href="'.$home_url.'/annonce?annonceId='.$info['id'].'">'; ?>
        <!-- Image and the small banner -->
          <?php echo '<img src="'.$photos['1']['url'].'" alt="" class="thumbnail-image">' ?>
          <?php // Image Meta ?>
          <?php get_template_part( 'template-parts/listings/img/image','meta', $args);  ?>

      <?php echo '</a>' ?>

      <?php // Image Title ?>
      <?php get_template_part( 'template-parts/listings/img/image','title', $args);  ?>

    </div>

  <?php } ?>

