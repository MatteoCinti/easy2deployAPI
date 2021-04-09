<?php
/**
 * easy2pilot Plugin - Electromenagers
 * @package easy2pilot Plugin
 * @version 1.0.0
 */
?>

<?php //Get all variables from arrays present in passed args ?> 
<?php extract($args); ?>

<?php if( function_exists( 'pll_current_language' ) ){ ?> 

  <?php if( pll_current_language('slug') === 'fr' ){ ?>

    <div class="details electromenagers">
      <div class="section-title"><h3> Électroménager </h3></div>
      <div class="section-details">
        <!-- Single Appartment Details -->
        <?php // Lave Linge ?>
        <?php  if( $equipements['lave_linge'] === true ){ ?>
          <div class="detail">
            <i class="fas fa-soap"></i><h5 class="label checker-label">Lave-linge</h5>
          </div>
        <?php } ?>

        <!-- Single Appartment Details -->
        <?php // Seche Linge ?>
        <?php  if( $equipements['seche_linge'] === true ){ ?>
          <div class="detail">
            <i class="fas fa-wind"></i><h5 class="label checker-label">Sèche-linge</h5>
          </div>
        <?php } ?>

        <!-- Single Appartment Details -->
        <?php // Lave vaisselle ?>
        <?php  if( $equipements['lave_vaisselle'] === true ){ ?>
          <div class="detail">
            <i class="fas fa-utensils"></i><h5 class="label checker-label">Lave-vaisselle</h5>
          </div>
        <?php } ?>

        <!-- Single Appartment Details -->
        <?php // Four ?>
        <?php  if( $equipements['four'] === true ){ ?>
          <div class="detail">
            <i class="fas fa-fan"></i><h5 class="label checker-label">Four</h5>
          </div>
        <?php } ?>

        <!-- Single Appartment Details -->
        <?php // Microonde ?>
        <?php  if( $equipements['micro_ondes'] === true ){ ?>
          <div class="detail">
            <i class="fas fa-water"></i><h5 class="label checker-label">Micro-ondes</h5>
          </div>
        <?php } ?>

        <!-- Single Appartment Details -->
        <?php // Refrigerateur ?>
        <?php  if( $equipements['refrigerateur'] === true ){ ?>
          <div class="detail">
            <i class="fas fa-thermometer-empty"></i><h5 class="label checker-label">Réfrigérateur</h5>
          </div>
        <?php } ?>

        <!-- Single Appartment Details -->
        <?php // Congelateur ?>
        <?php  if( $equipements['congelateur'] === true ){ ?>
          <div class="detail">
            <i class="fas fa-ice-cream"></i><h5 class="label checker-label">Congélateur</h5>
          </div>
        <?php } ?>

        <!-- Single Appartment Details -->
        <?php // Lit ?>
        <?php  if( $equipements['lit_simple'] === true || $equipements['lit_double'] === true ){ ?>
          <div class="detail">
          <i class="fas fa-bed"></i></i><h5 class="label checker-label">Lit</h5>
          </div>
        <?php } ?>

        <!-- Single Appartment Details -->
        <?php // Television ?>
        <?php  if( $equipements['television'] === true ){ ?>
          <div class="detail">
          <i class="fas fa-tv"></i><h5 class="label checker-label">Télévision</h5>
          </div>
        <?php } ?>

        <!-- Single Appartment Details -->
        <?php // Wifi ?>
        <?php  if( $equipements['wifi'] === true ){ ?>
          <div class="detail">
            <i class="fas fa-wifi"></i><h5 class="label checker-label">Wi-fi</h5>
          </div>
        <?php } ?>

      </div>
    </div>

  <?php } elseif( pll_current_language('slug') === 'en' ){ ?>

    
    <div class="details electromenagers">
      <div class="section-title"><h3> Appliances </h3></div>
      <div class="section-details">
        <!-- Single Appartment Details -->
        <?php // Lave Linge ?>
        <?php  if( $equipements['lave_linge'] === true ){ ?>
          <div class="detail">
            <i class="fas fa-soap"></i><h5 class="label checker-label">Washing machine</h5>
          </div>
        <?php } ?>

        <!-- Single Appartment Details -->
        <?php // Seche Linge ?>
        <?php  if( $equipements['seche_linge'] === true ){ ?>
          <div class="detail">
            <i class="fas fa-wind"></i><h5 class="label checker-label">Clothes dryer</h5>
          </div>
        <?php } ?>

        <!-- Single Appartment Details -->
        <?php // Lave vaisselle ?>
        <?php  if( $equipements['lave_vaisselle'] === true ){ ?>
          <div class="detail">
            <i class="fas fa-utensils"></i><h5 class="label checker-label">Dishwasher</h5>
          </div>
        <?php } ?>

        <!-- Single Appartment Details -->
        <?php // Four ?>
        <?php  if( $equipements['four'] === true ){ ?>
          <div class="detail">
            <i class="fas fa-fan"></i><h5 class="label checker-label">Hoven</h5>
          </div>
        <?php } ?>

        <!-- Single Appartment Details -->
        <?php // Microonde ?>
        <?php  if( $equipements['micro_ondes'] === true ){ ?>
          <div class="detail">
            <i class="fas fa-water"></i><h5 class="label checker-label">Microwave</h5>
          </div>
        <?php } ?>

        <!-- Single Appartment Details -->
        <?php // Refrigerateur ?>
        <?php  if( $equipements['refrigerateur'] === true ){ ?>
          <div class="detail">
            <i class="fas fa-thermometer-empty"></i><h5 class="label checker-label">Fridge</h5>
          </div>
        <?php } ?>

        <!-- Single Appartment Details -->
        <?php // Congelateur ?>
        <?php  if( $equipements['congelateur'] === true ){ ?>
          <div class="detail">
            <i class="fas fa-ice-cream"></i><h5 class="label checker-label">Freezer</h5>
          </div>
        <?php } ?>

        <!-- Single Appartment Details -->
        <?php // Lit ?>
        <?php  if( $equipements['lit_simple'] === true || $equipements['lit_double'] === true ){ ?>
          <div class="detail">
          <i class="fas fa-bed"></i></i><h5 class="label checker-label">Bed</h5>
          </div>
        <?php } ?>

        <!-- Single Appartment Details -->
        <?php // Television ?>
        <?php  if( $equipements['television'] === true ){ ?>
          <div class="detail">
          <i class="fas fa-tv"></i><h5 class="label checker-label">Television</h5>
          </div>
        <?php } ?>

        <!-- Single Appartment Details -->
        <?php // Wifi ?>
        <?php  if( $equipements['wifi'] === true ){ ?>
          <div class="detail">
            <i class="fas fa-wifi"></i><h5 class="label checker-label">Wi-fi</h5>
          </div>
        <?php } ?>

      </div>
    </div>
  <?php } elseif( pll_current_language('slug') === 'de' ){ ?>
        
    <div class="details electromenagers">
      <div class="section-title"><h3> Geräte </h3></div>
      <div class="section-details">
        <!-- Single Appartment Details -->
        <?php // Lave Linge ?>
        <?php  if( $equipements['lave_linge'] === true ){ ?>
          <div class="detail">
            <i class="fas fa-soap"></i><h5 class="label checker-label">Waschmaschine</h5>
          </div>
        <?php } ?>

        <!-- Single Appartment Details -->
        <?php // Seche Linge ?>
        <?php  if( $equipements['seche_linge'] === true ){ ?>
          <div class="detail">
            <i class="fas fa-wind"></i><h5 class="label checker-label">Wäschetrockner</h5>
          </div>
        <?php } ?>

        <!-- Single Appartment Details -->
        <?php // Lave vaisselle ?>
        <?php  if( $equipements['lave_vaisselle'] === true ){ ?>
          <div class="detail">
            <i class="fas fa-utensils"></i><h5 class="label checker-label">Geschirrspüler</h5>
          </div>
        <?php } ?>

        <!-- Single Appartment Details -->
        <?php // Four ?>
        <?php  if( $equipements['four'] === true ){ ?>
          <div class="detail">
            <i class="fas fa-fan"></i><h5 class="label checker-label">Backofen</h5>
          </div>
        <?php } ?>

        <!-- Single Appartment Details -->
        <?php // Microonde ?>
        <?php  if( $equipements['micro_ondes'] === true ){ ?>
          <div class="detail">
            <i class="fas fa-water"></i><h5 class="label checker-label">Mikrowelle</h5>
          </div>
        <?php } ?>

        <!-- Single Appartment Details -->
        <?php // Refrigerateur ?>
        <?php  if( $equipements['refrigerateur'] === true ){ ?>
          <div class="detail">
            <i class="fas fa-thermometer-empty"></i><h5 class="label checker-label">Kühlschrank</h5>
          </div>
        <?php } ?>

        <!-- Single Appartment Details -->
        <?php // Congelateur ?>
        <?php  if( $equipements['congelateur'] === true ){ ?>
          <div class="detail">
            <i class="fas fa-ice-cream"></i><h5 class="label checker-label">Gefrierschrank</h5>
          </div>
        <?php } ?>

        <!-- Single Appartment Details -->
        <?php // Lit ?>
        <?php  if( $equipements['lit_simple'] === true || $equipements['lit_double'] === true ){ ?>
          <div class="detail">
          <i class="fas fa-bed"></i></i><h5 class="label checker-label">Bett</h5>
          </div>
        <?php } ?>

        <!-- Single Appartment Details -->
        <?php // Television ?>
        <?php  if( $equipements['television'] === true ){ ?>
          <div class="detail">
          <i class="fas fa-tv"></i><h5 class="label checker-label">Fernsehen</h5>
          </div>
        <?php } ?>

        <!-- Single Appartment Details -->
        <?php // Wifi ?>
        <?php  if( $equipements['wifi'] === true ){ ?>
          <div class="detail">
            <i class="fas fa-wifi"></i><h5 class="label checker-label">Wi-fi</h5>
          </div>
        <?php } ?>

      </div>
    </div>
    <?php } ?> 
    
<?php } else { ?>

  <div class="details electromenagers">
      <div class="section-title"><h3> Électroménager </h3></div>
      <div class="section-details">
        <!-- Single Appartment Details -->
        <?php // Lave Linge ?>
        <?php  if( $equipements['lave_linge'] === true ){ ?>
          <div class="detail">
            <i class="fas fa-soap"></i><h5 class="label checker-label">Lave-linge</h5>
          </div>
        <?php } ?>

        <!-- Single Appartment Details -->
        <?php // Seche Linge ?>
        <?php  if( $equipements['seche_linge'] === true ){ ?>
          <div class="detail">
            <i class="fas fa-wind"></i><h5 class="label checker-label">Sèche-linge</h5>
          </div>
        <?php } ?>

        <!-- Single Appartment Details -->
        <?php // Lave vaisselle ?>
        <?php  if( $equipements['lave_vaisselle'] === true ){ ?>
          <div class="detail">
            <i class="fas fa-utensils"></i><h5 class="label checker-label">Lave-vaisselle</h5>
          </div>
        <?php } ?>

        <!-- Single Appartment Details -->
        <?php // Four ?>
        <?php  if( $equipements['four'] === true ){ ?>
          <div class="detail">
            <i class="fas fa-fan"></i><h5 class="label checker-label">Four</h5>
          </div>
        <?php } ?>

        <!-- Single Appartment Details -->
        <?php // Microonde ?>
        <?php  if( $equipements['micro_ondes'] === true ){ ?>
          <div class="detail">
            <i class="fas fa-water"></i><h5 class="label checker-label">Micro-ondes</h5>
          </div>
        <?php } ?>

        <!-- Single Appartment Details -->
        <?php // Refrigerateur ?>
        <?php  if( $equipements['refrigerateur'] === true ){ ?>
          <div class="detail">
            <i class="fas fa-thermometer-empty"></i><h5 class="label checker-label">Réfrigérateur</h5>
          </div>
        <?php } ?>

        <!-- Single Appartment Details -->
        <?php // Congelateur ?>
        <?php  if( $equipements['congelateur'] === true ){ ?>
          <div class="detail">
            <i class="fas fa-ice-cream"></i><h5 class="label checker-label">Congélateur</h5>
          </div>
        <?php } ?>

        <!-- Single Appartment Details -->
        <?php // Lit ?>
        <?php  if( $equipements['lit_simple'] === true || $equipements['lit_double'] === true ){ ?>
          <div class="detail">
          <i class="fas fa-bed"></i></i><h5 class="label checker-label">Lit</h5>
          </div>
        <?php } ?>

        <!-- Single Appartment Details -->
        <?php // Television ?>
        <?php  if( $equipements['television'] === true ){ ?>
          <div class="detail">
          <i class="fas fa-tv"></i><h5 class="label checker-label">Télévision</h5>
          </div>
        <?php } ?>

        <!-- Single Appartment Details -->
        <?php // Wifi ?>
        <?php  if( $equipements['wifi'] === true ){ ?>
          <div class="detail">
            <i class="fas fa-wifi"></i><h5 class="label checker-label">Wi-fi</h5>
          </div>
        <?php } ?>

      </div>
    </div>
  
<?php } ?>