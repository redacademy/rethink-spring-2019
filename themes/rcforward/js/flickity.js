(function($) {
  $(function() {

    console.log(
      'carousel'
    );
    
    $('.main-carousel').flickity({
      cellAlign: 'left',
      contain: true,
      
    });

  }); // End of Doc ready
})(jQuery);

