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

          <?php } ?>
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

          <?php } ?>
        </div>

          <!-- Single Appartment Details -->
          <div class="detail">
          <h5 class="label"> Prix: </h5>
          <?php if( isset( $prix['budget'] ) ){ ?>
            <p> <?php echo $prix['budget']; ?> €</p>
          <?php } ?>
        </div>

          <!-- Single Appartment Details -->
          <div class="detail">
          <h5 class="label"> Chambres: </h5>
          <?php if( isset( $info['nombre_chambres'] ) ){ ?>
            <p> <?php echo $info['nombre_chambres']; ?></p>
          <?php } ?> 
        </div>


          <!-- Single Appartment Details -->
          <div class="detail">
          <h5 class="label"> Salles de bain: </h5>
          <?php if( isset( $pieces['salles_de_bain'] ) ){ ?>
            <p> <?php echo $pieces['salles_de_bain']; ?></p>
          <?php } ?>
        </div>

          <!-- Single Appartment Details -->
          <div class="detail">
          <h5 class="label"> Superficie: </h5>
          <?php if( isset( $info['surface'] ) ){ ?>
            <p> <?php echo $info['surface']; ?> m2</p>
          <?php } ?> 
        </div>

          <!-- Single Appartment Details -->
          <div class="detail">
          <h5 class="label"> Année de construction: </h5>
          <?php if( isset( $info['annee_de_construction'] ) ){ ?>
            <p> <?php echo $info['annee_de_construction']; ?></p>
          <?php } ?>
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
          <?php } ?> 
        </div>

        <!-- Single Appartment Details -->
        <div class="detail">
          <h5 class="label"> Indice energetique: </h5>
          <?php if( isset( $energie['indice_energetique'] ) ){ ?>
            <p> <?php echo $energie['indice_energetique']; ?></p>
          <?php } ?> 
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

          <?php } ?> 
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

          <?php } ?> 
        </div>

          <!-- Single Appartment Details -->
          <div class="detail">
          <h5 class="label"> Price: </h5>
          <?php if( isset( $prix['budget'] ) ){ ?>
            <p> <?php echo $prix['budget']; ?> €</p>
          <?php } ?> 
        </div>

          <!-- Single Appartment Details -->
          <div class="detail">
          <h5 class="label"> Rooms: </h5>
          <?php if( isset( $info['nombre_chambres'] ) ){ ?>
            <p> <?php echo $info['nombre_chambres']; ?></p>
          <?php } ?> 
        </div>


          <!-- Single Appartment Details -->
          <div class="detail">
          <h5 class="label"> Bathrooms: </h5>
          <?php if( isset( $pieces['salles_de_bain'] ) ){ ?>
            <p> <?php echo $pieces['salles_de_bain']; ?></p>
          <?php } ?> 
        </div>

          <!-- Single Appartment Details -->
          <div class="detail">
          <h5 class="label"> Surface: </h5>
          <?php if( isset( $info['surface'] ) ){ ?>
            <p> <?php echo $info['surface']; ?> m2</p>
          <?php } ?> 
        </div>

          <!-- Single Appartment Details -->
          <div class="detail">
          <h5 class="label"> Year of Construction: </h5>
          <?php if( isset( $info['annee_de_construction'] ) ){ ?>
            <p> <?php echo $info['annee_de_construction']; ?></p>
          <?php } ?>
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
          <?php } ?> 
        </div>

        <!-- Single Appartment Details -->
        <div class="detail">
          <h5 class="label"> Energy Index: </h5>
          <?php if( isset( $energie['indice_energetique'] ) ){ ?>
            <p> <?php echo $energie['indice_energetique']; ?></p>
          <?php } ?> 
        </div>

      </div>
    </div>
  <?php } elseif( pll_current_language('slug') === 'de' ){ ?>
    <div class="details">
      <div class="section-title"><h3> Einzelheiten </h3></div>
      <div class="section-details">

        <!-- Single Appartment Details -->
        <div class="detail">
          <h5 class="label"> Art des Vermögens: </h5>
          <?php if( isset( $info['nature'] ) ){ ?>

            <?php if( $info['nature'] === "Appartement" ){ ?>
              <p>Wohnung</p>
            <?php } elseif($info['nature'] === "Maison") { ?>
              <p>Haus</p>
            <?php } elseif($info['nature'] === "Garage") { ?>
              <p>Garage</p>
            <?php } ?>

          <?php } ?> 
        </div>

        <!-- Single Appartment Details -->
        <div class="detail">
          <h5 class="label"> Anzeigenart: </h5>
          <?php if( isset( $info['vente_location'] ) ){ ?>

            <?php if( $info['vente_location'] === "vente" ){ ?>
              <p>Verkauf</p>
            <?php } elseif( $info['vente_location'] === "location" ) { ?>
              <p>Miete</p>
            <?php } ?>

          <?php } ?> 
        </div>

          <!-- Single Appartment Details -->
          <div class="detail">
          <h5 class="label"> Preis: </h5>
          <?php if( isset( $prix['budget'] ) ){ ?>
            <p> <?php echo $prix['budget']; ?> €</p>
          <?php } ?> 
        </div>

          <!-- Single Appartment Details -->
          <div class="detail">
          <h5 class="label"> Schlafräume: </h5>
          <?php if( isset( $info['nombre_chambres'] ) ){ ?>
            <p> <?php echo $info['nombre_chambres']; ?></p>
          <?php } ?> 
        </div>


          <!-- Single Appartment Details -->
          <div class="detail">
          <h5 class="label"> Bäder: </h5>
          <?php if( isset( $pieces['salles_de_bain'] ) ){ ?>
            <p> <?php echo $pieces['salles_de_bain']; ?></p>
          <?php } ?> 
        </div>

          <!-- Single Appartment Details -->
          <div class="detail">
          <h5 class="label"> Bereich: </h5>
          <?php if( isset( $info['surface'] ) ){ ?>
            <p> <?php echo $info['surface']; ?> m2</p>
          <?php } ?> 
        </div>

          <!-- Single Appartment Details -->
          <div class="detail">
          <h5 class="label"> Baujahr: </h5>
          <?php if( isset( $info['annee_de_construction'] ) ){ ?>
            <p> <?php echo $info['annee_de_construction']; ?></p>
          <?php } ?>
        </div>
      
        <!-- Single Appartment Details -->
        <div class="detail">
          <h5 class="label"> Heizung: </h5>
          <?php if( $chauffage['chauffage_gaz'] ){ ?>
            <p>Gas</p>
          <?php } elseif( $chauffage['chauffage_mazout'] ){ ?>
            <p>Öl</p>
          <?php } elseif( $chauffage['chauffage_elect'] ){ ?>
            <p>Elektrisch</p>
          <?php } ?> 
        </div>

        <!-- Single Appartment Details -->
        <div class="detail">
          <h5 class="label"> Energieindex: </h5>
          <?php if( isset( $energie['indice_energetique'] ) ){ ?>
            <p> <?php echo $energie['indice_energetique']; ?></p>
          <?php } ?> 
        </div>

      </div>
    </div>
  <?php }?>

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

        <?php } ?>
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

        <?php } ?>
      </div>

        <!-- Single Appartment Details -->
        <div class="detail">
        <h5 class="label"> Prix: </h5>
        <?php if( isset( $prix['budget'] ) ){ ?>
          <p> <?php echo $prix['budget']; ?> €</p>
        <?php } ?>
      </div>

        <!-- Single Appartment Details -->
        <div class="detail">
        <h5 class="label"> Chambres: </h5>
        <?php if( isset( $info['nombre_chambres'] ) ){ ?>
          <p> <?php echo $info['nombre_chambres']; ?></p>
        <?php } ?> 
      </div>


        <!-- Single Appartment Details -->
        <div class="detail">
        <h5 class="label"> Salles de bain: </h5>
        <?php if( isset( $pieces['salles_de_bain'] ) ){ ?>
          <p> <?php echo $pieces['salles_de_bain']; ?></p>
        <?php } ?>
      </div>

        <!-- Single Appartment Details -->
        <div class="detail">
        <h5 class="label"> Superficie: </h5>
        <?php if( isset( $info['surface'] ) ){ ?>
          <p> <?php echo $info['surface']; ?> m2</p>
        <?php } ?> 
      </div>

        <!-- Single Appartment Details -->
        <div class="detail">
        <h5 class="label"> Année de construction: </h5>
        <?php if( isset( $info['annee_de_construction'] ) ){ ?>
          <p> <?php echo $info['annee_de_construction']; ?></p>
        <?php } ?>
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
        <?php } ?> 
      </div>

      <!-- Single Appartment Details -->
      <div class="detail">
        <h5 class="label"> Indice energetique: </h5>
        <?php if( isset( $energie['indice_energetique'] ) ){ ?>
          <p> <?php echo $energie['indice_energetique']; ?></p>
        <?php } ?> 
      </div>

    </div>
  </div>
<?php } ?>