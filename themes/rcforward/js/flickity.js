(function($) {
  $(function() {
    const $carousel = $('.main-carousel');
    const $fundCarousel = $(".related-charities");
    $carousel.flickity({
      cellAlign: 'left',
      contain: true,
      wrapAround: true,
      setGallerySize: false
    });
    $fundCarousel.flickity({
      cellAlign:'left',
    });

  }); // End of Doc ready
})(jQuery);
