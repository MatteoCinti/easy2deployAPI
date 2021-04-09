<?php
/**
 * easy2pilot Plugin - Category Form Component
 * @package easy2pilot Plugin
 * @version 1.0.0
 */
?>


<?php if( function_exists( 'pll_current_language' ) ){ ?> 

  <?php if( pll_current_language('slug') === 'fr' ){ ?>
    <div class="box">
      <select name='category'>
        <option value='all' name="category" class='default-value'>( Vente & Location )</option>
        <option value='vente' name="category">Vente</option>
        <option value='location' name="category">Location</option>
      </select>
    </div>
  <?php } elseif( pll_current_language('slug') === 'en' ){ ?>
    <div class="box">
      <select name='category'>
        <option value='all' name="category" class='default-value'>( Sale & Rent )</option>
        <option value='vente' name="category">Sale</option>
        <option value='location' name="category">Rent</option>
      </select>
    </div>
  <?php } elseif( pll_current_language('slug') === 'de' ){ ?>
    <div class="box">
      <select name='category'>
        <option value='all' name="category" class='default-value'>( Verkauf und Vermietung )</option>
        <option value='vente' name="category">Verkauf</option>
        <option value='location' name="category">Miete</option>
      </select>
    </div>
  <?php } ?>

<?php } else { ?>

  <div class="box">
    <select name='category'>
      <option value='all' name="category" class='default-value'>( Vente & Location )</option>
      <option value='vente' name="category">Vente</option>
      <option value='location' name="category">Location</option>
    </select>
  </div>
  
<?php } ?>