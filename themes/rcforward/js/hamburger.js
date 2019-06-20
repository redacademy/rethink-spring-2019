(function($) {
  $(function() {
    // check if the toggle nav is visible e.g. mobile only
    if ($('.hamburger').css('display') !== 'none') {
      // hamburger menu
      $('#toggle-nav').on('click', function() {
        $()
        $('#site-navigation').slideToggle();
      });
      // about us dropdown
      $('#menu-item-71').on('click', function() {
        $('.sub-menu').slideToggle();
        $('.menu-item-has-children::after').toggleClass();
      });
  

    } // end if
  }); // end doc ready
})(jQuery);
