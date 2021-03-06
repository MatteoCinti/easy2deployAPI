<?php
/**
 * easy2pilot Plugin - Image Meta
 * @package easy2pilot Plugin
 * @version 1.0.0
 */
?>

<?php //Get all variables from arrays present in passed args ?> 
<?php extract($args); ?>
  
<!-- Article Meta -->
<div class="meta-container img-meta">

  <!-- Number of rooms -->
  <?php if( isset( $info['nombre_chambres'] ) ){ ?>
    <p class="meta">
      <i class="fas fa-bed"></i>
      <?php echo $info['nombre_chambres']; ?> 
    </p>
  <?php } ?>


  <!-- Number of Bathrooms -->
  <?php if(isset( $pieces['salles_de_bain']) || $pieces['salle_de_douche'] ){ ?>
    <p class="meta">
      <i class="fas fa-shower"></i>
      <?php 
        $bathroom_total = $pieces['salles_de_bain'] + $pieces['salle_de_douche'];
        echo $bathroom_total; 
      ?> 
    </p>
  <?php } ?> 


   <!-- Total M2 -->
   <?php if(isset( $info['surface_totale'] )){ ?>
    <p class="meta">
      <i class="fas fa-border-all"></i>
      <?php echo $info['surface_totale'];?> 
      m2
    </p>
  <?php } ?>  

  
  <!-- Price -->
  <?php if(isset( $prix['budget'] )){ ?>
    <p class="meta">
      <?php echo $prix['budget']; ?> 
      €
    </p>
  <?php } ?>  

</div>

