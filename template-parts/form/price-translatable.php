<?php
/**
 * easy2pilot Plugin - Price Form Copmonent
 * @package easy2pilot Plugin
 * @version 1.0.0
 */
?>

<?php if( function_exists( 'pll_current_language' ) ){ ?> 

  <?php if( pll_current_language('slug') === 'fr' ){ ?>
    <div class="box">
        <select name="price">
          <option value="10000000000" name="price" class="default-value">( Prix Maximum )</option>
          <option value="10000000000" name="price" class="default-value"> -- Location -- </option>
          <option value="100" name="price">100 €</option>
          <option value="200" name="price">200 €</option>
          <option value="400" name="price">400 €</option>
          <option value="600" name="price">600 €</option>
          <option value="800" name="price">800 €</option>
          <option value="1000" name="price">1000 €</option>
          <option value="1200" name="price">1200 €</option>
          <option value="1400" name="price">1400 €</option>
          <option value="1800" name="price">1800 €</option>
          <option value="2000" name="price">2000 €</option>
          <option value="3000" name="price">3000 €</option>
          <option value="5000" name="price">5000 €</option>

          <option value="10000000000" name="price" class="default-value"> -- Vente -- </option>
          <option value="75000" name="price">75 000 €</option>
          <option value="100000" name="price">100 000 €</option>
          <option value="150000" name="price">150 000 €</option>
          <option value="200000" name="price">200 000 €</option>
          <option value="300000" name="price">300 000 €</option>
          <option value="500000" name="price">500 000 €</option>
          <option value="700000" name="price">700 000 €</option>
          <option value="1000000" name="price">1 000 000 €</option>
          <option value="2000000" name="price">2 000 000 €</option>
        </select>
    </div>
  <?php } elseif( pll_current_language('slug') === 'en' ){ ?>
    <div class="box">
        <select name="price">
          <option value="10000000000" name="price" class="default-value">( Max Price )</option>
          <option value="10000000000" name="price" class="default-value"> -- Rent -- </option>
          <option value="100" name="price">100 €</option>
          <option value="200" name="price">200 €</option>
          <option value="400" name="price">400 €</option>
          <option value="600" name="price">600 €</option>
          <option value="800" name="price">800 €</option>
          <option value="1000" name="price">1000 €</option>
          <option value="1200" name="price">1200 €</option>
          <option value="1400" name="price">1400 €</option>
          <option value="1800" name="price">1800 €</option>
          <option value="2000" name="price">2000 €</option>
          <option value="3000" name="price">3000 €</option>
          <option value="5000" name="price">5000 €</option>

          <option value="10000000000" name="price" class="default-value"> -- Sale -- </option>
          <option value="75000" name="price">75 000 €</option>
          <option value="100000" name="price">100 000 €</option>
          <option value="150000" name="price">150 000 €</option>
          <option value="200000" name="price">200 000 €</option>
          <option value="300000" name="price">300 000 €</option>
          <option value="500000" name="price">500 000 €</option>
          <option value="700000" name="price">700 000 €</option>
          <option value="1000000" name="price">1 000 000 €</option>
          <option value="2000000" name="price">2 000 000 €</option>
        </select>
    </div>
  <?php } elseif( pll_current_language('slug') === 'de' ){ ?>
    <div class="box">
        <select name="price">
          <option value="10000000000" name="price" class="default-value">( Maximaler Preis )</option>
          <option value="10000000000" name="price" class="default-value"> -- Standort -- </option>
          <option value="100" name="price">100 €</option>
          <option value="200" name="price">200 €</option>
          <option value="400" name="price">400 €</option>
          <option value="600" name="price">600 €</option>
          <option value="800" name="price">800 €</option>
          <option value="1000" name="price">1000 €</option>
          <option value="1200" name="price">1200 €</option>
          <option value="1400" name="price">1400 €</option>
          <option value="1800" name="price">1800 €</option>
          <option value="2000" name="price">2000 €</option>
          <option value="3000" name="price">3000 €</option>
          <option value="5000" name="price">5000 €</option>

          <option value="10000000000" name="price" class="default-value"> -- Verkauf -- </option>
          <option value="75000" name="price">75 000 €</option>
          <option value="100000" name="price">100 000 €</option>
          <option value="150000" name="price">150 000 €</option>
          <option value="200000" name="price">200 000 €</option>
          <option value="300000" name="price">300 000 €</option>
          <option value="500000" name="price">500 000 €</option>
          <option value="700000" name="price">700 000 €</option>
          <option value="1000000" name="price">1 000 000 €</option>
          <option value="2000000" name="price">2 000 000 €</option>
        </select>
    </div>
  <?php } ?> 

<?php } else { ?>
  <div class="box">
        <select name="price">
          <option value="10000000000" name="price" class="default-value">( Prix Maximum )</option>
          <option value="10000000000" name="price" class="default-value"> -- Location -- </option>
          <option value="100" name="price">100 €</option>
          <option value="200" name="price">200 €</option>
          <option value="400" name="price">400 €</option>
          <option value="600" name="price">600 €</option>
          <option value="800" name="price">800 €</option>
          <option value="1000" name="price">1000 €</option>
          <option value="1200" name="price">1200 €</option>
          <option value="1400" name="price">1400 €</option>
          <option value="1800" name="price">1800 €</option>
          <option value="2000" name="price">2000 €</option>
          <option value="3000" name="price">3000 €</option>
          <option value="5000" name="price">5000 €</option>

          <option value="10000000000" name="price" class="default-value"> -- Vente -- </option>
          <option value="75000" name="price">75 000 €</option>
          <option value="100000" name="price">100 000 €</option>
          <option value="150000" name="price">150 000 €</option>
          <option value="200000" name="price">200 000 €</option>
          <option value="300000" name="price">300 000 €</option>
          <option value="500000" name="price">500 000 €</option>
          <option value="700000" name="price">700 000 €</option>
          <option value="1000000" name="price">1 000 000 €</option>
          <option value="2000000" name="price">2 000 000 €</option>
        </select>
    </div>
<?php } ?>
