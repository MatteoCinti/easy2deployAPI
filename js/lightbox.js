//*** LISTINGS
// Scroll through arrows
 if(document.querySelector('.listings-images-container')) {

  const imagesContainer = document.querySelector('.listings-images-container');
  const imageContainer = document.querySelector('.img-container');
  const horizontalImagesContainer = imagesContainer.classList.contains('single-line');

  if( horizontalImagesContainer ){

    var containerWidth = imageContainer.offsetWidth;

    // Functions To Scroll Forwards or Backwards
    const moveForward = ( o ) => {
      imagesContainer.scrollLeft += containerWidth;
    }

    const moveBackward = ( o ) => {
      imagesContainer.scrollLeft -= containerWidth;
    }


    if(!document.querySelector('.left')){
      // Create an anchor Element if it does not exist
      var next = document.createElement('a');
      var previous = document.createElement('a');

      // Add the on click function -> Right
      next.onclick = function(){
        return moveForward();
      };
      next.classList.add('right');
      //Add the arrow
      next.innerHTML = "&#10095;";

      // Add the on click function -> Left
      previous.onclick = function(){
        moveBackward();
      }
      previous.classList.add('left');
      //Add the arrow
      previous.innerHTML = "&#10094;";

      // Append those elements to the code
      imagesContainer.append(next);
      imagesContainer.append(previous);
    }
    
  }
}

if(document.getElementsByClassName("mySlides")){


  var slideIndex = 0;
  showSlides();
  //add the global timer variable
  var slides,dots,timer;

  function showSlides() {
      var i;
      slides = document.getElementsByClassName("mySlides");
      dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
      }
      slideIndex++;
      if (slideIndex> slides.length) {slideIndex = 1}    
      for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";  
      dots[slideIndex-1].className += " active";
      //put the timeout in the timer variable
      timer = setTimeout(showSlides, 4000); // Change image every 8 seconds
  }

  function plusSlides(position) {
      //clear/stop the timer
      clearTimeout(timer);
      slideIndex +=position;
      if (slideIndex> slides.length) {slideIndex = 1}
      else if(slideIndex<1){slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
      }
      for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";  
      dots[slideIndex-1].className += " active";
      //create a new timer
      timer = setTimeout(showSlides, 4000);
  }

  function currentSlide(index) {
      //clear/stop the timer
      clearTimeout(timer);
      if (index> slides.length) {index = 1}
      else if(index<1){index = slides.length}
      //set the slideIndex with the index of the function
      slideIndex = index;
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
      }
      for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[index-1].style.display = "block";  
      dots[index-1].className += " active";
      //create a new timer
      timer = setTimeout(showSlides, 4000);
  }
}

  //LIGHTBOX CODE
  // appending Lightbox on top of structure to prevent problems with z-index
  const body = document.querySelector('body');
  body.append(document.getElementById("lightbox"));

  // Prepending a white box to hide fixed menu on the right
  window.addEventListener('load', function() {
    const footer = document.querySelector('footer');
    var whiteRubber = document.createElement("div");
    whiteRubber.classList.add("white-rubber");
    console.log(whiteRubber)
    footer.prepend(whiteRubber)
  })
    
  // Open the Modal
  function openModal() {
    document.getElementById("lightbox").style.display = "flex";
  }

  // Close the Modal
  function closeModal() {
    document.getElementById("lightbox").style.display = "none";
  }

  var slideIndex = 1;
  lightboxSlides(slideIndex);

  // Next/previous controls
  function lightboxPlusSlides(n) {
    lightboxSlides(slideIndex += n);
  }

  // Thumbnail image controls
  function currentSlide(n) {
    lightboxSlides(slideIndex = n);
  }

  function lightboxSlides(n) {
    var i;
    var slides = document.getElementsByClassName("slide");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    slides[slideIndex-1].style.display = "flex";
  }