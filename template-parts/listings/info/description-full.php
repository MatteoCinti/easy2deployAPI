<?php
/**
 * easy2pilot Plugin - Full Description
 * @package easy2pilot Plugin
 * @version 1.0.0
 */
?>

<?php //Get all variables from arrays present in passed args ?> 
<?php extract($args); ?>

<?php if( function_exists( 'pll_current_language' ) ){ ?> 

  <?php if( pll_current_language('slug') === 'fr' ){ ?>
   
    <?php if( isset( $description['description_fr'] ) ){ ?>
      <div class="description">
        <div class="section-title"><h3> Description </h3></div>
        <?php echo $description['description_fr']; ?>
      </div>
    <?php } ?> 

  <?php } elseif( pll_current_language('slug') === 'en' ){ ?>

    <?php if( isset( $description['description_en'] ) ){ ?>
      <div class="description">
        <div class="section-title"><h3> Description </h3></div>
        <?php echo $description['description_en']; ?>
      </div>
    <?php } ?> 

  <?php }  elseif( pll_current_language('slug') === 'de' ){ ?>

    <?php if( isset( $description['description_en'] ) ){ ?>
      <div class="description">
        <div class="section-title"><h3> Beschreibung </h3></div>
        <?php echo $description['description_en']; ?>
      </div>
     <?php } ?> 

  <?php } ?>

<?php } else { ?>

  <?php if( isset( $description['description_fr'] ) ){ ?>
      <div class="description">
        <div class="section-title"><h3> Description </h3></div>
        <?php echo $description['description_fr']; ?>
      </div>
     <?php } ?> 

<?php } ?>
