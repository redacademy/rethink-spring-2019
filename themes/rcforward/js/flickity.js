(function($) {
  $(function() {
const $carousel = $('.main-carousel');
    if($carousel.hasClass("related-charities")){
      $carousel.flickity({
        contain: true,
        wrapAround: true,
        setGallerySize:false,
      });
    }else{
    $carousel.flickity({

      cellAlign: 'left',
      contain: true,
      wrapAround: true,
      setGallerySize:false,
    });
  }


  }); // End of Doc ready
})(jQuery);

