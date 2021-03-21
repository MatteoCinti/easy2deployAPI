<?php
/**
 * easy2pilot Plugin - Full Details
 * @package easy2pilot Plugin
 * @version 1.0.0
 */
?>

<?php //Get all variables from arrays present in passed args ?> 
<?php extract($args); ?>


<?php if( function_exists( 'pll_current_language' ) ){ ?> 

  <?php if( pll_current_language('slug') === 'fr' ){ ?>
    <div class="details">
      <div class="section-title"><h3> Détails </h3></div>
      <div class="section-details">

        <!-- Single Appartment Details -->
        <div class="detail">
          <h5 class="label"> Type de propriété: </h5>
          <?php if( isset( $info['nature'] ) ){ ?>

            <?php if( $info['nature'] === "Appartement" ){ ?>
              <p>Appartement</p>
            <?php } elseif($info['nature'] === "Maison") { ?>
              <p>Maison</p>
            <?php } elseif($info['nature'] === "Garage") { ?>
              <p>Garage</p>
            <?php } ?>

          <?php } //else { ?>
            <!-- <p class="meta warning-meta"> "Type de propriété" not set! Please add info. </p> -->
          <?php //} ?>
        </div>

        <!-- Single Appartment Details -->
        <div class="detail">
          <h5 class="label"> Type d'annonce: </h5>
          <?php if( isset( $info['vente_location'] ) ){ ?>

            <?php if( $info['vente_location'] === "vente" ){ ?>
              <p>Vente</p>
            <?php } elseif( $info['vente_location'] === "location" ) { ?>
              <p>Location</p>
            <?php } ?>

          <?php } //else { ?>
            <!-- <p class="meta warning-meta"> "vente_location" not set! Please add info. </p> -->
          <?php //} ?>
        </div>

          <!-- Single Appartment Details -->
          <div class="detail">
          <h5 class="label"> Prix: </h5>
          <?php if( isset( $prix['budget'] ) ){ ?>
            <p> <?php echo $prix['budget']; ?> €</p>
          <?php } //else { ?>
            <!-- <p class="meta warning-meta"> "budget" not set! Please add info. </p> -->
          <?php //} ?>
        </div>

          <!-- Single Appartment Details -->
          <div class="detail">
          <h5 class="label"> Chambres: </h5>
          <?php if( isset( $info['nombre_chambres'] ) ){ ?>
            <p> <?php echo $info['nombre_chambres']; ?></p>
          <?php }// else { ?>
            <!-- <p class="meta warning-meta"> "Nombre de Chambres" not set! Please add info. </p> -->
          <?php //} ?> 
        </div>


          <!-- Single Appartment Details -->
          <div class="detail">
          <h5 class="label"> Salles de bain: </h5>
          <?php if( isset( $pieces['salles_de_bain'] ) ){ ?>
            <p> <?php echo $pieces['salles_de_bain']; ?></p>
          <?php } //else { ?>
            <!-- <p class="meta warning-meta"> "salles_de_bain" not set! Please add info. </p> -->
          <?php //} ?>
        </div>

          <!-- Single Appartment Details -->
          <div class="detail">
          <h5 class="label"> Superficie: </h5>
          <?php if( isset( $info['surface'] ) ){ ?>
            <p> <?php echo $info['surface']; ?> m2</p>
          <?php } //else { ?>
            <!-- <p class="meta warning-meta"> "Surface" not set! Please add info. </p> -->
          <?php //} ?> 
        </div>

          <!-- Single Appartment Details -->
          <div class="detail">
          <h5 class="label"> Année de construction: </h5>
          <?php if( isset( $info['annee_de_construction'] ) ){ ?>
            <p> <?php echo $info['annee_de_construction']; ?></p>
          <?php } //else { ?>
            <!-- <p class="meta warning-meta"> "annee_de_construction" not set! Please add info. </p> -->
          <?php //} ?>
        </div>
      
        <!-- Single Appartment Details -->
        <div class="detail">
          <h5 class="label"> Chauffage: </h5>
          <?php if( $chauffage['chauffage_gaz'] ){ ?>
            <p>Gaz</p>
          <?php } elseif( $chauffage['chauffage_mazout'] ){ ?>
            <p>Mazout</p>
          <?php } elseif( $chauffage['chauffage_elect'] ){ ?>
            <p>Electrique</p>
          <?php } elseif( $chauffage['chauffage_col'] ){ ?>
            <p>Col</p>
          <?php } //else { ?>
            <!-- <p class="meta warning-meta"> "Chauffage" not set! Please add info. </p> -->
          <?php //} ?> 
        </div>

        <!-- Single Appartment Details -->
        <div class="detail">
          <h5 class="label"> Indice energetique: </h5>
          <?php if( isset( $energie['indice_energetique'] ) ){ ?>
            <p> <?php echo $energie['indice_energetique']; ?></p>
          <?php } //else { ?>
            <!-- <p class="meta warning-meta"> "Indice Energetique" not set! Please add info. </p> -->
          <?php //} ?> 
        </div>

      </div>
    </div>

  <?php }elseif( pll_current_language('slug') === 'en' ){ ?>
    <div class="details">
      <div class="section-title"><h3> Details </h3></div>
      <div class="section-details">

        <!-- Single Appartment Details -->
        <div class="detail">
          <h5 class="label"> Type of Property: </h5>
          <?php if( isset( $info['nature'] ) ){ ?>

            <?php if( $info['nature'] === "Appartement" ){ ?>
              <p>Flat</p>
            <?php } elseif($info['nature'] === "Maison") { ?>
              <p>House</p>
            <?php } elseif($info['nature'] === "Garage") { ?>
              <p>Garage</p>
            <?php } ?>

          <?php } //else { ?>
            <!-- <p class="meta warning-meta"> "Type de propriété" not set! Please add info. </p> -->
          <?php //} ?> 
        </div>

        <!-- Single Appartment Details -->
        <div class="detail">
          <h5 class="label"> Type of Listing: </h5>
          <?php if( isset( $info['vente_location'] ) ){ ?>

            <?php if( $info['vente_location'] === "vente" ){ ?>
              <p>Sale</p>
            <?php } elseif( $info['vente_location'] === "location" ) { ?>
              <p>Rent</p>
            <?php } ?>

          <?php } //else { ?>
            <!-- <p class="meta warning-meta"> "vente_location" not set! Please add info. </p> -->
          <?php //} ?> 
        </div>

          <!-- Single Appartment Details -->
          <div class="detail">
          <h5 class="label"> Price: </h5>
          <?php if( isset( $prix['budget'] ) ){ ?>
            <p> <?php echo $prix['budget']; ?> €</p>
          <?php } //else { ?>
            <!-- <p class="meta warning-meta"> "budget" not set! Please add info. </p> -->
          <?php //} ?> 
        </div>

          <!-- Single Appartment Details -->
          <div class="detail">
          <h5 class="label"> Rooms: </h5>
          <?php if( isset( $info['nombre_chambres'] ) ){ ?>
            <p> <?php echo $info['nombre_chambres']; ?></p>
          <?php } //else { ?>
            <!-- <p class="meta warning-meta"> "Nombre de Chambres" not set! Please add info. </p> -->
          <?php //} ?> 
        </div>


          <!-- Single Appartment Details -->
          <div class="detail">
          <h5 class="label"> Bathrooms: </h5>
          <?php if( isset( $pieces['salles_de_bain'] ) ){ ?>
            <p> <?php echo $pieces['salles_de_bain']; ?></p>
          <?php } //else { ?>
            <!-- <p class="meta warning-meta"> "salles_de_bain" not set! Please add info. </p> -->
          <?php //} ?> 
        </div>

          <!-- Single Appartment Details -->
          <div class="detail">
          <h5 class="label"> Surface: </h5>
          <?php if( isset( $info['surface'] ) ){ ?>
            <p> <?php echo $info['surface']; ?> m2</p>
          <?php } //else { ?>
            <!-- <p class="meta warning-meta"> "Surface" not set! Please add info. </p> -->
          <?php //} ?> 
        </div>

          <!-- Single Appartment Details -->
          <div class="detail">
          <h5 class="label"> Year of Construction: </h5>
          <?php if( isset( $info['annee_de_construction'] ) ){ ?>
            <p> <?php echo $info['annee_de_construction']; ?></p>
          <?php } //else { ?>
            <!-- <p class="meta warning-meta"> "annee_de_construction" not set! Please add info. </p> -->
          <?php //} ?>
        </div>
      
        <!-- Single Appartment Details -->
        <div class="detail">
          <h5 class="label"> Heating: </h5>
          <?php if( $chauffage['chauffage_gaz'] ){ ?>
            <p>Gas</p>
          <?php } elseif( $chauffage['chauffage_mazout'] ){ ?>
            <p>Fuel oil</p>
          <?php } elseif( $chauffage['chauffage_elect'] ){ ?>
            <p>Electric</p>
          <?php } elseif( $chauffage['chauffage_col'] ){ ?>
            <p>Col</p>
          <?php } //else { ?>
            <!-- <p class="meta warning-meta"> "Chauffage" not set! Please add info. </p> -->
          <?php //} ?> 
        </div>

        <!-- Single Appartment Details -->
        <div class="detail">
          <h5 class="label"> Energy Index: </h5>
          <?php if( isset( $energie['indice_energetique'] ) ){ ?>
            <p> <?php echo $energie['indice_energetique']; ?></p>
          <?php } //else { ?>
            <!-- <p class="meta warning-meta"> "Indice Energetique" not set! Please add info. </p> -->
          <?php //} ?> 
        </div>

      </div>
    </div>
  <?php } ?>

<?php } else { ?>
  <div class="details">
    <div class="section-title"><h3> Détails </h3></div>
    <div class="section-details">

      <!-- Single Appartment Details -->
      <div class="detail">
        <h5 class="label"> Type de propriété: </h5>
        <?php if( isset( $info['nature'] ) ){ ?>

          <?php if( $info['nature'] === "Appartement" ){ ?>
            <p>Appartement</p>
          <?php } elseif($info['nature'] === "Maison") { ?>
            <p>Maison</p>
          <?php } elseif($info['nature'] === "Garage") { ?>
            <p>Garage</p>
          <?php } ?>

        <?php } //else { ?>
          <!-- <p class="meta warning-meta"> "Type de propriété" not set! Please add info. </p> -->
        <?php //} ?>
      </div>

      <!-- Single Appartment Details -->
      <div class="detail">
        <h5 class="label"> Type d'annonce: </h5>
        <?php if( isset( $info['vente_location'] ) ){ ?>

          <?php if( $info['vente_location'] === "vente" ){ ?>
            <p>Vente</p>
          <?php } elseif( $info['vente_location'] === "location" ) { ?>
            <p>Location</p>
          <?php } ?>

        <?php } //else { ?>
          <!-- <p class="meta warning-meta"> "vente_location" not set! Please add info. </p> -->
        <?php //} ?>
      </div>

        <!-- Single Appartment Details -->
        <div class="detail">
        <h5 class="label"> Prix: </h5>
        <?php if( isset( $prix['budget'] ) ){ ?>
          <p> <?php echo $prix['budget']; ?> €</p>
        <?php } //else { ?>
          <!-- <p class="meta warning-meta"> "budget" not set! Please add info. </p> -->
        <?php //} ?>
      </div>

        <!-- Single Appartment Details -->
        <div class="detail">
        <h5 class="label"> Chambres: </h5>
        <?php if( isset( $info['nombre_chambres'] ) ){ ?>
          <p> <?php echo $info['nombre_chambres']; ?></p>
        <?php }// else { ?>
          <!-- <p class="meta warning-meta"> "Nombre de Chambres" not set! Please add info. </p> -->
        <?php //} ?> 
      </div>


        <!-- Single Appartment Details -->
        <div class="detail">
        <h5 class="label"> Salles de bain: </h5>
        <?php if( isset( $pieces['salles_de_bain'] ) ){ ?>
          <p> <?php echo $pieces['salles_de_bain']; ?></p>
        <?php } //else { ?>
          <!-- <p class="meta warning-meta"> "salles_de_bain" not set! Please add info. </p> -->
        <?php //} ?>
      </div>

        <!-- Single Appartment Details -->
        <div class="detail">
        <h5 class="label"> Superficie: </h5>
        <?php if( isset( $info['surface'] ) ){ ?>
          <p> <?php echo $info['surface']; ?> m2</p>
        <?php } //else { ?>
          <!-- <p class="meta warning-meta"> "Surface" not set! Please add info. </p> -->
        <?php //} ?> 
      </div>

        <!-- Single Appartment Details -->
        <div class="detail">
        <h5 class="label"> Année de construction: </h5>
        <?php if( isset( $info['annee_de_construction'] ) ){ ?>
          <p> <?php echo $info['annee_de_construction']; ?></p>
        <?php } //else { ?>
          <!-- <p class="meta warning-meta"> "annee_de_construction" not set! Please add info. </p> -->
        <?php //} ?>
      </div>
    
      <!-- Single Appartment Details -->
      <div class="detail">
        <h5 class="label"> Chauffage: </h5>
        <?php if( $chauffage['chauffage_gaz'] ){ ?>
          <p>Gaz</p>
        <?php } elseif( $chauffage['chauffage_mazout'] ){ ?>
          <p>Mazout</p>
        <?php } elseif( $chauffage['chauffage_elect'] ){ ?>
          <p>Electrique</p>
        <?php } elseif( $chauffage['chauffage_col'] ){ ?>
          <p>Col</p>
        <?php } //else { ?>
          <!-- <p class="meta warning-meta"> "Chauffage" not set! Please add info. </p> -->
        <?php //} ?> 
      </div>

      <!-- Single Appartment Details -->
      <div class="detail">
        <h5 class="label"> Indice energetique: </h5>
        <?php if( isset( $energie['indice_energetique'] ) ){ ?>
          <p> <?php echo $energie['indice_energetique']; ?></p>
        <?php } //else { ?>
          <!-- <p class="meta warning-meta"> "Indice Energetique" not set! Please add info. </p> -->
        <?php //} ?> 
      </div>

    </div>
  </div>
<?php } ?>