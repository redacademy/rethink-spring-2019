$(function() {
  $(document).ready(function() {

    $('.faqs').on('click', '#plus-symbol', function() {
        const answer = $('.answer');
      answer.hide(200);
      $(this).parent().siblings(answer).toggle();
      console.log(answer);

    });  

  });
}); 