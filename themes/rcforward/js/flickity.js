(function($) {
  $(function() {
    const $carousel = $('.main-carousel');

    $carousel.flickity({
      cellAlign: 'left',
      contain: true,
      wrapAround: true,
      setGallerySize: false
    });
    
  }); // End of Doc ready
})(jQuery);
