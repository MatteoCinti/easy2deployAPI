<?php
/**
 * Business Horizon - Image Title
 * (all images of single listing)
 * @package Business Horizon
 * @subpackage easy2pilot Plugin
 * @version 1.0.0
 */

?>

<?php //Get all variables from arrays present in passed args ?> 
<?php extract($args); ?>

<div class="article-title title">
  
  <?php // Article  Title ?>
    <?php if( isset( $info['titre'] ) ){ ?>
        <h3><?php echo $info['titre']; ?></h3>
    <?php } ?>

  <?php // Article  Adress ?>
    <?php if( isset( $localisation['ville'] ) || isset( $localisation['pays'] ) ){ ?>

        <p class="localisation">
          <?php echo $localisation['ville'] . ', '
          .$localisation['pays']; 
          ?>
        </p>

    <?php } ?>

</div>
