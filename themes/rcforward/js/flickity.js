(function($) {
  $(function() {
    const $carousel = $('.main-carousel');
    const $fundCarousel = $(".related-charities");
    $fundCarousel.flickity({
      cellAlign:'center',
      wrapAround: false,
      setGallerySize: false,
      contain: true

    });
    $carousel.flickity({
      cellAlign: 'left',
      wrapAround: true,
      setGallerySize: false,
      contain: true
    });


  }); // End of Doc ready
})(jQuery);
