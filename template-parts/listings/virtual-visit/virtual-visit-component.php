<?php
/**
 * easy2pilot Plugin - Embedded Virtual Visit
 * 
 * @package easy2pilot Plugin
 * @version 1.0.0
 */

?>

<!-- Call all arguments of present listing -->
<?php extract($args); ?>


<?php if($info['visite_virtuelle']) { ?>
   <iframe width="1600" height="800" <?php echo 'src="'.$info["visite_virtuelle"].'"' ?> mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>
<?php } ?>
