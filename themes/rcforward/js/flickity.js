(function($) {
  $(function() {

    console.log(
      'carousel'
    );

    $('.main-carousel').flickity({
      // options
      cellAlign: 'left',
      contain: true,
      wrapAround: true
    });
    
  }); // End of Doc ready
})(jQuery);

