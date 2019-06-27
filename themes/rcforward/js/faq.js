(function($) {
  $(function() {
    $('.faqs').on('click', function(event) {
      if (window.innerWidth <= 1000) {
        event.preventDefault();
        $('.answer').hide(200);
        $(this)
          .children('.answer')
          .toggle();
      }
    });
  });
})(jQuery);
