<?php
/**
 * easy2pilot Plugin - Summary Component
 * @package easy2pilot Plugin
 * @version 1.0.0
 */
?>

<?php //Get all variables from arrays present in passed args ?> 
<?php extract($args); ?>


<div class="summary-container">
  <div class="absolute-container">
    <div class="summary">
      <?php 
        // Dinamically generate text sell or rent
        global $display_vente_location;
        function vente_location($info){
          global $display_vente_location;
          if( $info['vente_location'] === 'vente' ){
            return $display_vente_location = 'vendre';
          } elseif( $info['vente_location'] === 'location' ){
            return $display_vente_location =  'louer';
          } 
        }
        vente_location($info);
      ?>

      <?php if( function_exists( 'pll_current_language' ) ){ ?> 

        <?php if( pll_current_language('slug') === 'fr' ){ ?>

          <h3 class='summary-title title'>
            <?php if( $info['nature'] === "Appartement" ){ ?>
              Appartement
            <?php } elseif($info['nature'] === "Maison") { ?>
              Maison
            <?php } elseif($info['nature'] === "Garage") { ?>
              Garage
            <?php } ?>

            <?php echo 'à'; ?>  

            <?php if( $info['vente_location'] === "vente" ){ ?>
              <p>vendre
            <?php } elseif( $info['vente_location'] === "location" ) { ?>
              <p>louer
            <?php } ?>
          </h3>

        <?php } elseif( pll_current_language('slug') === 'en' ){ ?>

          <h3 class='summary-title title'>
            <?php if( $info['nature'] === "Appartement" ){ ?>
              Flat
            <?php } elseif($info['nature'] === "Maison") { ?>
              House
            <?php } elseif($info['nature'] === "Garage") { ?>
              Garage
            <?php } ?>

            <?php echo 'for'; ?>  

            <?php if( $info['vente_location'] === "vente" ){ ?>
              sale
            <?php } elseif( $info['vente_location'] === "location" ) { ?>
              rent
            <?php } ?>          
          </h3>

        <?php } elseif( pll_current_language('slug') === 'de' ){ ?>

          <h3 class='summary-title title'>
            <?php if( $info['nature'] === "Appartement" ){ ?>
              Wohnung
            <?php } elseif($info['nature'] === "Maison") { ?>
              Haus
            <?php } elseif($info['nature'] === "Garage") { ?>
              Garage
            <?php } ?>

            <?php echo 'zu'; ?>  

            <?php if( $info['vente_location'] === "vente" ){ ?>
              verkaufen
            <?php } elseif( $info['vente_location'] === "location" ) { ?>
              vermieten
            <?php } ?>          
          </h3>

        <?php } ?>

      <?php } else { ?>

        <h3 class='summary-title title'>
          <?php if( $info['nature'] === "Appartement" ){ ?>
            Appartement
          <?php } elseif($info['nature'] === "Maison") { ?>
            Maison</p>
          <?php } elseif($info['nature'] === "Garage") { ?>
            Garage</p>
          <?php } ?>

          <?php echo 'à'; ?>  

          <?php if( $info['vente_location'] === "vente" ){ ?>
            vendre</p>
          <?php } elseif( $info['vente_location'] === "location" ) { ?>
            louer</p>
          <?php } ?>
        </h3>

      <?php } ?>

      <h3 class='summary-price price'>
        <?php if( isset( $localisation['pays']) ){ 
          echo $prix['budget'].' €'; 
        } else {
          echo 'Prix à consulter';
        }?>
      </h3>

      <p class='adress'>

        <?php if( $localisation['adresse'] !== "" ){ 
          echo$localisation['adresse']; 
        }?>

        <?php if( $localisation['adresse_bis'] !== "" ){
          echo$localisation['adresse_bis']; 
        }?>
    
        <?php if($localisation['adresse_num'] !== "" ){
          echo $localisation['adresse_num'].', <br>';    }?>

        <?php if( isset($localisation['code_postal'] ) ){
          echo $localisation['code_postal']; 
        }?>

        <?php if( isset( $localisation['ville'] ) ){
          echo $localisation['ville'].', <br>'; 
        }?>
        <?php if( isset( $localisation['pays'] ) ){
          echo $localisation['pays']; 
        }?>
      </p>  

      <div class="summary-meta">

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

      </div>
    </div>      
  </div>
</div>
