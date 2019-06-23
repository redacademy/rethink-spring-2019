(function($) {
  $(function() {

    $('.entry-content').on('click', 'a', function() {
      $('.answer').hide(200);
      $(this).parent().siblings('.answer').toggle();

    });  

  });
})(jQuery); 