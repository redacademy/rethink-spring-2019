(function($) {
  $(function() {
    // check if the toggle nav is visible e.g. mobile only
    if ($('.hamburger').css('display') !== 'none') {
        console.log('is mobile');
      // hamburger menu
      $('#toggle-nav').on('click', function() {
        $('#primary-menu').slideToggle('is-active');
      });
      // about us dropdown
      $('#menu-item-71').on('click', function() {
        $('.sub-menu').slideToggle('is-active');
      });
    } // end if
    else {
        console.log('not mobile');
    }
  }); // end doc ready
})(jQuery);
