const summary = document.querySelector('.summary');

// Make Summary "box" element stick to the right
if( summary ){
  document.addEventListener('scroll', (e) => {
    var position = window.pageYOffset;
    if( position > 633){
      summary.classList.add('summary-fixed')
    } else if ( position < 633 && summary.classList.contains('summary-fixed') ){
      summary.classList.remove('summary-fixed')
    }
  });
}