(function($) {
  $(function() {

    $('.faqs').on('click', function(event) {
      event.preventDefault();
      $('.answer').hide(200);
      $(this).children('.answer').toggle();

    });  

  });
})(jQuery); 