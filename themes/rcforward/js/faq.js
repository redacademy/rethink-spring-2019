(function($) {
  $(function() {

    $('.entry-content').on('click', 'a', function(event) {
      event.preventDefault();
      $('.answer').hide(200);
      $(this).parent().siblings('.answer').toggle();

    });  

  });
})(jQuery); 