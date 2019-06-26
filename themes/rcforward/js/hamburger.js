(function($) {
  $(function() {

    if(window.innerWidth < 800){
      console.log('is mobile');

      // check if the toggle nav is visible e.g. mobile only
      if ($('.hamburger').css('display') !== 'none') {
        // hamburger menu
        $('#toggle-nav').on('click', function() {
          $('#site-navigation').slideToggle();
        });
        // about us dropdown
        $('.menu-item-has-children').on('click', function() {
          $(this).find('.sub-menu').slideToggle();
          $(this).toggleClass('menu-active');
        });
        $('.sub-menu li').on('click',function(){
          $('#site-navigation').slideToggle();
        })

        // $('#toggle-nav').click();

      } // end if

     
    }
    else {
      console.log('not mobile');
    }
    
  }); // end doc ready
})(jQuery);
