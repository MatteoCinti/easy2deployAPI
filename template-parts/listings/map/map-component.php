<?php
/**
 * easy2pilot Plugin - Embedded Map
 * 
 * @package easy2pilot Plugin
 * @version 1.0.0
 */

?>

<?php 
  $google_api_option = get_option('et_google_api_settings');
  $google_api_key = isset( $google_api_option['api_key'] ) ? $google_api_option['api_key'] : '';
  $src = 'https://www.google.com/maps/embed/v1/place?key='.$google_api_key.'&q=business%20horizons%20luxembourg'; 
?>

<!-- Call all arguments of present listing -->
<?php extract($args); ?>


<?php if( $localisation['adresse'] !== ""){ 
          $adresse = $localisation['adresse']; 
        }?>
        <?php if($localisation['adresse_num'] !== ""){
          $adresse_num=$localisation['adresse_num'];   
        }?>
        <?php if( $localisation['code_postal'] !== "" ){
          $code_postal = $localisation['code_postal']; 
        }?>
        <?php if( $localisation['ville'] !== "" ){
          $ville = $localisation['ville']; 
        }?>
        <?php if( $localisation['pays'] !== "" ){
          $pays = $localisation['pays']; 
        }?>


<?php 
  $src = 'https://www.google.com/maps/embed/v1/place?key='.$google_api_key.'&q='.
  ( (isset($adresse))? str_replace(' ','%20',$adresse).'%20' : "" ).
  ( (isset($adresse_num))? $adresse_num.'%20' : "" ).
  ( (isset($code_postal))? $code_postal.'%20' : "" ).
  ( (isset($ville))? $ville.'%20' : "" ).
  ( (isset($pays))? $pays.'%20' : "" );
?>


<div style="grid-column:1;">
  <iframe width="600" height="450" style="border:0" loading="lazy" allowfullscreen src=<?php echo $src; ?> ></iframe>
</div> 

