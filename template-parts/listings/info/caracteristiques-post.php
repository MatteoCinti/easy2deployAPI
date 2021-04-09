<?php
/**
 * easy2pilot Plugin - Caracteristic Component
 * @package easy2pilot Plugin
 * @version 1.0.0
 */
?>

<?php //Get all variables from arrays present in passed args ?> 
<?php extract($args); ?>


<?php if( function_exists( 'pll_current_language' ) ){ ?> 

  <?php if( pll_current_language('slug') === 'fr' ){ ?>
    <div class="details caracteristiques">
      <div class="section-title"><h3>Caractéristique</h3></div>
      <div class="section-details">

        <!-- Single Appartment Details -->
        <?php // Meubles ?>
        <?php  if( $interieur['meuble'] === true ){ ?>
          <div class="detail">
            <i class="fas fa-couch"></i><h5 class="label checker-label">Meublé</h5>
          </div>
        <?php } ?>

        <!-- Single Appartment Details -->
        <?php // Cave a Vin ?>
        <?php  if( $interieur['cave_a_vin'] === true ){ ?>
          <div class="detail">
            <i class="fas fa-wine-bottle"></i><h5 class="label checker-label">Cave a vin</h5>
          </div>
        <?php } ?>

        <!-- Single Appartment Details -->
        <?php // Animaux Acceptés ?>
        <?php  if( $interieur['animaux_acceptes'] === true ){ ?>
          <div class="detail">
            <i class="fas fa-dog"></i><h5 class="label checker-label">Animaux acceptés</h5>
          </div>
        <?php } ?>

        <!-- Single Appartment Details -->
        <?php // Garage ?>
        <?php  if( $parking['garages'] > 0 || $parking['garages'] != null ){ ?>
          <div class="detail">
            <i class="fas fa-car"></i><h5 class="label checker-label">Garage</h5>
          </div>
        <?php } ?>

        <!-- Single Appartment Details -->
        <?php // Gardien ?>
        <?php  if( $securite['gardien'] === true ){ ?>
          <div class="detail">
            <i class="fas fa-user-shield"></i><h5 class="label checker-label">Gardien</h5>
          </div>
        <?php } ?>

        <!-- Single Appartment Details -->
        <?php // Lift ?>
        <?php  if( $confort['ascenseur'] ){ ?>
          <div class="detail">
            <i class="fas fa-caret-square-left"></i><h5 class="label checker-label">Ascenseur</h5>
          </div>
        <?php } ?>

        <!-- Single Appartment Details -->
        <?php // Installations hadicapes ?>
        <?php  if( $confort['installation_handicapes'] ){ ?>
          <div class="detail">
          <i class="fab fa-accessible-icon"></i><h5 class="label checker-label">Installations handicapé</h5>
          </div>
        <?php } ?>

        <!-- Single Appartment Details -->
        <?php // Exterieur - Terasse ?>
        <?php  if( $exterieur['terrasse'] ){ ?>
          <div class="detail">
            <i class="fas fa-border-none"></i><h5 class="label checker-label">Terrasse</h5>
          </div>
        <?php } ?>

        <!-- Single Appartment Details -->
        <?php // Exterieur - Veranda ?>
        <?php  if( $exterieur['veranda'] != 0 ){ ?>
          <div class="detail">
          <i class="fab fa-pagelines"></i></i><h5 class="label checker-label">Veranda</h5>
          </div>
        <?php } ?>

        <!-- Single Appartment Details -->
        <?php // Exterieur - Balcon ?>
        <?php  if( $exterieur['balcon'] != 0 ){ ?>
          <div class="detail">
            <i class="fas fa-border-all"></i><h5 class="label checker-label">Balcon</h5>
          </div>
        <?php } ?>

        <!-- Single Appartment Details -->
        <?php // Exterieur - Cour ?>
        <?php  if( $exterieur['cour'] != 0 ){ ?>
          <div class="detail">
          <i class="fas fa-border-all"></i><h5 class="label checker-label">Cour</h5>
          </div>
        <?php } ?>

        <!-- Single Appartment Details -->
        <?php // Exterieur - Jardin ?>
        <?php  if( $exterieur['jardin'] != 0 ){ ?>
          <div class="detail">
          <i class="fas fa-tree"></i><h5 class="label checker-label">Jardin</h5>
          </div>
        <?php } ?>

        <!-- Single Appartment Details -->
        <?php // Coproprieté ?>
        <?php  if( $divers['copropriete'] != 0 ){ ?>
          <div class="detail">
            <i class="far fa-handshake"></i><h5 class="label checker-label">Copropriété</h5>
          </div>
        <?php } ?>
        
        
      </div>
    </div>
  <?php } elseif( pll_current_language('slug') === 'en' ){ ?>
    <div class="details caracteristiques">
      <div class="section-title"><h3>Characteristics</h3></div>
      <div class="section-details">

        <!-- Single Appartment Details -->
        <?php // Meubles ?>
        <?php  if( $interieur['meuble'] === true ){ ?>
          <div class="detail">
            <i class="fas fa-couch"></i><h5 class="label checker-label">Furnished</h5>
          </div>
        <?php } ?>

        <!-- Single Appartment Details -->
        <?php // Cave a Vin ?>
        <?php  if( $interieur['cave_a_vin'] === true ){ ?>
          <div class="detail">
            <i class="fas fa-wine-bottle"></i><h5 class="label checker-label">Wine cellar</h5>
          </div>
        <?php } ?>

        <!-- Single Appartment Details -->
        <?php // Animaux Acceptés ?>
        <?php  if( $interieur['animaux_acceptes'] === true ){ ?>
          <div class="detail">
            <i class="fas fa-dog"></i><h5 class="label checker-label">Pets accepted</h5>
          </div>
        <?php } ?>

        <!-- Single Appartment Details -->
        <?php // Garage ?>
        <?php  if( $parking['garages'] > 0 || $parking['garages'] != null ){ ?>
          <div class="detail">
            <i class="fas fa-car"></i><h5 class="label checker-label">Garage</h5>
          </div>
        <?php } ?>

        <!-- Single Appartment Details -->
        <?php // Gardien ?>
        <?php  if( $securite['gardien'] === true ){ ?>
          <div class="detail">
            <i class="fas fa-user-shield"></i><h5 class="label checker-label">Keeper</h5>
          </div>
        <?php } ?>

        <!-- Single Appartment Details -->
        <?php // Lift ?>
        <?php  if( $confort['ascenseur'] ){ ?>
          <div class="detail">
            <i class="fas fa-caret-square-left"></i><h5 class="label checker-label">Lift</h5>
          </div>
        <?php } ?>

        <!-- Single Appartment Details -->
        <?php // Installations hadicapes ?>
        <?php  if( $confort['installation_handicapes'] ){ ?>
          <div class="detail">
          <i class="fab fa-accessible-icon"></i><h5 class="label checker-label">Facilities for disabled</h5>
          </div>
        <?php } ?>

        <!-- Single Appartment Details -->
        <?php // Exterieur - Terasse ?>
        <?php  if( $exterieur['terrasse'] ){ ?>
          <div class="detail">
            <i class="fas fa-border-none"></i><h5 class="label checker-label">Terrace</h5>
          </div>
        <?php } ?>

        <!-- Single Appartment Details -->
        <?php // Exterieur - Veranda ?>
        <?php  if( $exterieur['veranda'] != 0 ){ ?>
          <div class="detail">
          <i class="fab fa-pagelines"></i></i><h5 class="label checker-label">Veranda</h5>
          </div>
        <?php } ?>

        <!-- Single Appartment Details -->
        <?php // Exterieur - Balcon ?>
        <?php  if( $exterieur['balcon'] != 0 ){ ?>
          <div class="detail">
            <i class="fas fa-border-all"></i><h5 class="label checker-label">Balcony</h5>
          </div>
        <?php } ?>

        <!-- Single Appartment Details -->
        <?php // Exterieur - Cour ?>
        <?php  if( $exterieur['cour'] != 0 ){ ?>
          <div class="detail">
          <i class="fas fa-border-all"></i><h5 class="label checker-label">Yard</h5>
          </div>
        <?php } ?>

        <!-- Single Appartment Details -->
        <?php // Exterieur - Jardin ?>
        <?php  if( $exterieur['jardin'] != 0 ){ ?>
          <div class="detail">
          <i class="fas fa-tree"></i><h5 class="label checker-label">Garden</h5>
          </div>
        <?php } ?>

        <!-- Single Appartment Details -->
        <?php // Coproprieté ?>
        <?php  if( $divers['copropriete'] != 0 ){ ?>
          <div class="detail">
            <i class="far fa-handshake"></i><h5 class="label checker-label">Co-ownership</h5>
          </div>
        <?php } ?>
        
        
      </div>
    </div>
  <?php } elseif( pll_current_language('slug') === 'de' ){ ?>
    <div class="details caracteristiques">
      <div class="section-title"><h3>Merkmale</h3></div>
      <div class="section-details">

        <!-- Single Appartment Details -->
        <?php // Meubles ?>
        <?php  if( $interieur['meuble'] === true ){ ?>
          <div class="detail">
            <i class="fas fa-couch"></i><h5 class="label checker-label">Möbliert</h5>
          </div>
        <?php } ?>

        <!-- Single Appartment Details -->
        <?php // Cave a Vin ?>
        <?php  if( $interieur['cave_a_vin'] === true ){ ?>
          <div class="detail">
            <i class="fas fa-wine-bottle"></i><h5 class="label checker-label">Weinkeller</h5>
          </div>
        <?php } ?>

        <!-- Single Appartment Details -->
        <?php // Animaux Acceptés ?>
        <?php  if( $interieur['animaux_acceptes'] === true ){ ?>
          <div class="detail">
            <i class="fas fa-dog"></i><h5 class="label checker-label">Haustiere erlaubt</h5>
          </div>
        <?php } ?>

        <!-- Single Appartment Details -->
        <?php // Garage ?>
        <?php  if( $parking['garages'] > 0 || $parking['garages'] != null ){ ?>
          <div class="detail">
            <i class="fas fa-car"></i><h5 class="label checker-label">Garage</h5>
          </div>
        <?php } ?>

        <!-- Single Appartment Details -->
        <?php // Gardien ?>
        <?php  if( $securite['gardien'] === true ){ ?>
          <div class="detail">
            <i class="fas fa-user-shield"></i><h5 class="label checker-label">Hausmeister</h5>
          </div>
        <?php } ?>

        <!-- Single Appartment Details -->
        <?php // Lift ?>
        <?php  if( $confort['ascenseur'] ){ ?>
          <div class="detail">
            <i class="fas fa-caret-square-left"></i><h5 class="label checker-label">Aufzug</h5>
          </div>
        <?php } ?>

        <!-- Single Appartment Details -->
        <?php // Installations hadicapes ?>
        <?php  if( $confort['installation_handicapes'] ){ ?>
          <div class="detail">
          <i class="fab fa-accessible-icon"></i><h5 class="label checker-label">Behindertengerechte Einrichtungen</h5>
          </div>
        <?php } ?>

        <!-- Single Appartment Details -->
        <?php // Exterieur - Terasse ?>
        <?php  if( $exterieur['terrasse'] ){ ?>
          <div class="detail">
            <i class="fas fa-border-none"></i><h5 class="label checker-label">Terrasse</h5>
          </div>
        <?php } ?>

        <!-- Single Appartment Details -->
        <?php // Exterieur - Veranda ?>
        <?php  if( $exterieur['veranda'] != 0 ){ ?>
          <div class="detail">
          <i class="fab fa-pagelines"></i></i><h5 class="label checker-label">Veranda</h5>
          </div>
        <?php } ?>

        <!-- Single Appartment Details -->
        <?php // Exterieur - Balcon ?>
        <?php  if( $exterieur['balcon'] != 0 ){ ?>
          <div class="detail">
            <i class="fas fa-border-all"></i><h5 class="label checker-label">Balkon</h5>
          </div>
        <?php } ?>

        <!-- Single Appartment Details -->
        <?php // Exterieur - Cour ?>
        <?php  if( $exterieur['cour'] != 0 ){ ?>
          <div class="detail">
          <i class="fas fa-border-all"></i><h5 class="label checker-label">Innenhof</h5>
          </div>
        <?php } ?>

        <!-- Single Appartment Details -->
        <?php // Exterieur - Jardin ?>
        <?php  if( $exterieur['jardin'] != 0 ){ ?>
          <div class="detail">
          <i class="fas fa-tree"></i><h5 class="label checker-label">Garten</h5>
          </div>
        <?php } ?>

        <!-- Single Appartment Details -->
        <?php // Coproprieté ?>
        <?php  if( $divers['copropriete'] != 0 ){ ?>
          <div class="detail">
            <i class="far fa-handshake"></i><h5 class="label checker-label">Wohnungseigentum</h5>
          </div>
        <?php } ?>
        
        
      </div>
    </div>
  <?php } ?> 

<?php } else { ?>
  <div class="details caracteristiques">
    <div class="section-title"><h3>Caractéristiques</h3></div>
    <div class="section-details">

      <!-- Single Appartment Details -->
      <?php // Meubles ?>
      <?php  if( $interieur['meuble'] === true ){ ?>
        <div class="detail">
          <i class="fas fa-couch"></i><h5 class="label checker-label">Meublé</h5>
        </div>
      <?php } ?>

      <!-- Single Appartment Details -->
      <?php // Cave a Vin ?>
      <?php  if( $interieur['cave_a_vin'] === true ){ ?>
        <div class="detail">
          <i class="fas fa-wine-bottle"></i><h5 class="label checker-label">Cave a vin</h5>
        </div>
      <?php } ?>

      <!-- Single Appartment Details -->
      <?php // Animaux Acceptés ?>
      <?php  if( $interieur['animaux_acceptes'] === true ){ ?>
        <div class="detail">
          <i class="fas fa-dog"></i><h5 class="label checker-label">Animaux acceptés</h5>
        </div>
      <?php } ?>

      <!-- Single Appartment Details -->
      <?php // Garage ?>
      <?php  if( $parking['garages'] > 0 || $parking['garages'] != null ){ ?>
        <div class="detail">
          <i class="fas fa-car"></i><h5 class="label checker-label">Garage</h5>
        </div>
      <?php } ?>

      <!-- Single Appartment Details -->
      <?php // Gardien ?>
      <?php  if( $securite['gardien'] === true ){ ?>
        <div class="detail">
          <i class="fas fa-user-shield"></i><h5 class="label checker-label">Gardien</h5>
        </div>
      <?php } ?>

      <!-- Single Appartment Details -->
      <?php // Lift ?>
      <?php  if( $confort['ascenseur'] ){ ?>
        <div class="detail">
          <i class="fas fa-caret-square-left"></i><h5 class="label checker-label">Ascenseur</h5>
        </div>
      <?php } ?>

      <!-- Single Appartment Details -->
      <?php // Installations hadicapes ?>
      <?php  if( $confort['installation_handicapes'] ){ ?>
        <div class="detail">
        <i class="fab fa-accessible-icon"></i><h5 class="label checker-label">Installations handicapé</h5>
        </div>
      <?php } ?>

      <!-- Single Appartment Details -->
      <?php // Exterieur - Terasse ?>
      <?php  if( $exterieur['terrasse'] ){ ?>
        <div class="detail">
          <i class="fas fa-border-none"></i><h5 class="label checker-label">Terrasse</h5>
        </div>
      <?php } ?>

      <!-- Single Appartment Details -->
      <?php // Exterieur - Veranda ?>
      <?php  if( $exterieur['veranda'] != 0 ){ ?>
        <div class="detail">
        <i class="fab fa-pagelines"></i></i><h5 class="label checker-label">Veranda</h5>
        </div>
      <?php } ?>

      <!-- Single Appartment Details -->
      <?php // Exterieur - Balcon ?>
      <?php  if( $exterieur['balcon'] != 0 ){ ?>
        <div class="detail">
          <i class="fas fa-border-all"></i><h5 class="label checker-label">Balcon</h5>
        </div>
      <?php } ?>

      <!-- Single Appartment Details -->
      <?php // Exterieur - Cour ?>
      <?php  if( $exterieur['cour'] != 0 ){ ?>
        <div class="detail">
        <i class="fas fa-border-all"></i><h5 class="label checker-label">Cour</h5>
        </div>
      <?php } ?>

      <!-- Single Appartment Details -->
      <?php // Exterieur - Jardin ?>
      <?php  if( $exterieur['jardin'] != 0 ){ ?>
        <div class="detail">
        <i class="fas fa-tree"></i><h5 class="label checker-label">Jardin</h5>
        </div>
      <?php } ?>

      <!-- Single Appartment Details -->
      <?php // Coproprieté ?>
      <?php  if( $divers['copropriete'] != 0 ){ ?>
        <div class="detail">
          <i class="far fa-handshake"></i><h5 class="label checker-label">Copropriété</h5>
        </div>
      <?php } ?>
      
      
    </div>
  </div>
<?php } ?>



