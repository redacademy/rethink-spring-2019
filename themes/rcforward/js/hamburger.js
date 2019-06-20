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
      $('.menu-item-has-children').on('click', function() {
        $(this).find('.sub-menu').slideToggle();
        $(this).toggleClass('menu-active');
      });
  

    } // end if
  }); // end doc ready
})(jQuery);
