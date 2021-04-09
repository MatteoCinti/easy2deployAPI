<?php
/**
 * easy2pilot Plugin - Location Form Component
 * @package easy2pilot Plugin
 * @version 1.0.0
 */
?>

<?php if( function_exists( 'pll_current_language' ) ){ ?> 

   <?php if( pll_current_language('slug') === 'fr' ){ ?>
      <div class="multi-select-container box">
         <div id="multiselect-display">
            <button class="clear">Effacer</button>
         </div>
         <div id="select-dropdown" class="select-dropdown show-menu-arrow"> 
            <p> -- Localisation -- </p>
            <select id="select-location"
                     class="selectpicker show-menu-arrow" 
                     name="location[]"
                     multiple="true" >
               <option name="location">Weiswampach</option>
               <option name="location">Troisvierges</option>
               <option name="location">Niedercorn</option>
               <option name="location">Beaufort</option>
               <option name="location">Rollingen</option>
               <option name="location">Capellen</option>
               <option name="location">Wincrange</option>
               <option name="location">Sanem</option>
               <option name="location">Clerveaux</option>
               <option name="location">Parc Hosingen</option>
               <option name="location">Wiltz</option>
               <option name="location">Vianden</option>
               <option name="location">Esch-sur-Sûre</option>
               <option name="location">Boulaide</option>
               <option name="location">Diekirch</option>
               <option name="location">Ettelbruck</option>
               <option name="location">Rambrouch</option>
               <option name="location">Colmar-Berg</option>
               <option name="location">Bissen</option>
               <option name="location">Larochette</option>
               <option name="location">Waldbilling</option>
               <option name="location">Consdorf</option>
               <option name="location">Echternach</option>
               <option name="location">Redange</option>
               <option name="location">Beckerich</option>
               <option name="location">Mersch</option>
               <option name="location">Junglinster</option>
               <option name="location">Steinfort</option>
               <option name="location">Betzdorf</option>
               <option name="location">Mertert</option>
               <option name="location">Grevenmacher</option>
               <option name="location">Niederanven</option>
               <option name="location">Luxembourg</option>
               <option name="location">Pétange</option>
               <option name="location">Mondercange</option>
               <option name="location">Bettenbourg</option>
               <option name="location">Differdange</option>
               <option name="location">Dudelange</option>
               <option name="location">Mondorf-les-Bains</option>
               <option name="location">Remich</option>
               <option name="location">Schengen</option>
            </select>
         </div>

      </div><!--.multi-select-container box-->
   <?php } elseif( pll_current_language('slug') === 'en' ){ ?>
      <div class="multi-select-container box">
         <div id="multiselect-display">
            <button class="clear">Delete</button>
         </div>
         <div id="select-dropdown" class="select-dropdown show-menu-arrow"> 
            <p> -- Location -- </p>
            <select id="select-location"
                     class="selectpicker show-menu-arrow" 
                     name="location[]"
                     multiple="true" >
               <option name="location">Weiswampach</option>
               <option name="location">Troisvierges</option>
               <option name="location">Niedercorn</option>
               <option name="location">Beaufort</option>
               <option name="location">Rollingen</option>
               <option name="location">Capellen</option>
               <option name="location">Wincrange</option>
               <option name="location">Sanem</option>
               <option name="location">Clerveaux</option>
               <option name="location">Parc Hosingen</option>
               <option name="location">Wiltz</option>
               <option name="location">Vianden</option>
               <option name="location">Esch-sur-Sûre</option>
               <option name="location">Boulaide</option>
               <option name="location">Diekirch</option>
               <option name="location">Ettelbruck</option>
               <option name="location">Rambrouch</option>
               <option name="location">Colmar-Berg</option>
               <option name="location">Bissen</option>
               <option name="location">Larochette</option>
               <option name="location">Waldbilling</option>
               <option name="location">Consdorf</option>
               <option name="location">Echternach</option>
               <option name="location">Redange</option>
               <option name="location">Beckerich</option>
               <option name="location">Mersch</option>
               <option name="location">Junglinster</option>
               <option name="location">Steinfort</option>
               <option name="location">Betzdorf</option>
               <option name="location">Mertert</option>
               <option name="location">Grevenmacher</option>
               <option name="location">Niederanven</option>
               <option name="location">Luxembourg</option>
               <option name="location">Pétange</option>
               <option name="location">Mondercange</option>
               <option name="location">Bettenbourg</option>
               <option name="location">Differdange</option>
               <option name="location">Dudelange</option>
               <option name="location">Mondorf-les-Bains</option>
               <option name="location">Remich</option>
               <option name="location">Schengen</option>
            </select>
         </div>

      </div><!--.multi-select-container box-->
   <?php } elseif( pll_current_language('slug') === 'de' ){ ?>
      <div class="multi-select-container box">
         <div id="multiselect-display">
            <button class="clear">Löschen</button>
         </div>
         <div id="select-dropdown" class="select-dropdown show-menu-arrow"> 
            <p> -- Standort -- </p>
            <select id="select-location"
                     class="selectpicker show-menu-arrow" 
                     name="location[]"
                     multiple="true" >
               <option name="location">Weiswampach</option>
               <option name="location">Troisvierges</option>
               <option name="location">Niedercorn</option>
               <option name="location">Beaufort</option>
               <option name="location">Rollingen</option>
               <option name="location">Capellen</option>
               <option name="location">Wincrange</option>
               <option name="location">Sanem</option>
               <option name="location">Clerveaux</option>
               <option name="location">Parc Hosingen</option>
               <option name="location">Wiltz</option>
               <option name="location">Vianden</option>
               <option name="location">Esch-sur-Sûre</option>
               <option name="location">Boulaide</option>
               <option name="location">Diekirch</option>
               <option name="location">Ettelbruck</option>
               <option name="location">Rambrouch</option>
               <option name="location">Colmar-Berg</option>
               <option name="location">Bissen</option>
               <option name="location">Larochette</option>
               <option name="location">Waldbilling</option>
               <option name="location">Consdorf</option>
               <option name="location">Echternach</option>
               <option name="location">Redange</option>
               <option name="location">Beckerich</option>
               <option name="location">Mersch</option>
               <option name="location">Junglinster</option>
               <option name="location">Steinfort</option>
               <option name="location">Betzdorf</option>
               <option name="location">Mertert</option>
               <option name="location">Grevenmacher</option>
               <option name="location">Niederanven</option>
               <option name="location">Luxembourg</option>
               <option name="location">Pétange</option>
               <option name="location">Mondercange</option>
               <option name="location">Bettenbourg</option>
               <option name="location">Differdange</option>
               <option name="location">Dudelange</option>
               <option name="location">Mondorf-les-Bains</option>
               <option name="location">Remich</option>
               <option name="location">Schengen</option>
            </select>
         </div>

      </div><!--.multi-select-container box-->
   <?php } ?>

<?php } else { ?>
   <div class="multi-select-container box">
      <div id="multiselect-display">
         <button class="clear">Effacer</button>
      </div>
      <div id="select-dropdown" class="select-dropdown show-menu-arrow"> 
         <p> -- Localisation -- </p>
         <select id="select-location"
                  class="selectpicker show-menu-arrow" 
                  name="location[]"
                  multiple="true" >
            <option name="location">Weiswampach</option>
            <option name="location">Troisvierges</option>
            <option name="location">Niedercorn</option>
            <option name="location">Beaufort</option>
            <option name="location">Rollingen</option>
            <option name="location">Capellen</option>
            <option name="location">Wincrange</option>
            <option name="location">Sanem</option>
            <option name="location">Clerveaux</option>
            <option name="location">Parc Hosingen</option>
            <option name="location">Wiltz</option>
            <option name="location">Vianden</option>
            <option name="location">Esch-sur-Sûre</option>
            <option name="location">Boulaide</option>
            <option name="location">Diekirch</option>
            <option name="location">Ettelbruck</option>
            <option name="location">Rambrouch</option>
            <option name="location">Colmar-Berg</option>
            <option name="location">Bissen</option>
            <option name="location">Larochette</option>
            <option name="location">Waldbilling</option>
            <option name="location">Consdorf</option>
            <option name="location">Echternach</option>
            <option name="location">Redange</option>
            <option name="location">Beckerich</option>
            <option name="location">Mersch</option>
            <option name="location">Junglinster</option>
            <option name="location">Steinfort</option>
            <option name="location">Betzdorf</option>
            <option name="location">Mertert</option>
            <option name="location">Grevenmacher</option>
            <option name="location">Niederanven</option>
            <option name="location">Luxembourg</option>
            <option name="location">Pétange</option>
            <option name="location">Mondercange</option>
            <option name="location">Bettenbourg</option>
            <option name="location">Differdange</option>
            <option name="location">Dudelange</option>
            <option name="location">Mondorf-les-Bains</option>
            <option name="location">Remich</option>
            <option name="location">Schengen</option>
         </select>
      </div>

   </div><!--.multi-select-container box-->
<?php } ?>