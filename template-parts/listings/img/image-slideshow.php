<?php
/**
 * easy2pilot Plugin - Images Slideshow
 * @package easy2pilot Plugin
 * @version 1.0.0
 */
?>

<div class="ss-container ">

  <?php //Get all variables from arrays present in passed args ?> 
  <?php extract($args); ?>

 

  <!-- Displayed Thumbnails -->
    <div class="images-container">
      <?php $counter = 0; ?>
      <?php //Loop through all the images and display them. ?>
      <?php  foreach($photos as $photo){ ?>
        <?php $counter++; ?>
        <div class="mySlides fade">
          <?php echo '<img class="pics" src="' . $photo['url'] . '" onclick="openModal();currentSlide('.$counter.')" >'; ?>
        </div>
      <?php } ?>

    </div>
    
    <div class="dot-container">
      <?php foreach($photos as $photo){ ?>
      <?php 

        $counter++; 
      ?>
        <?php echo '<span class="dot" onclick="currentSlide('.$counter.')"></span>' ?>
      <?php } ?>
    </div>

    <!-- Lightbox Modal -->
    <div id="lightbox" class="modal">
      <span class="close cursor" onclick="closeModal()">&times;</span>

      <div class="modal-content">     
        <?php
        //Loop through all the images and display them.
        foreach($photos as $photo){ ?>
          <div class="slide">
            <?php echo '<img src="' . $photo['url'] . '" class="image-slide">'; ?>
          </div>
        <?php } ?> 
      </div>

      <a class="left" onclick="lightboxPlusSlides(-1)">&#10094;</a>
      <a class="right" onclick="lightboxPlusSlides(1)">&#10095;</a>
    </div>

</div>

