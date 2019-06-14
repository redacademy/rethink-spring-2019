(function($){

    $(function(){
        // hamburger menu
        $('#toggle-nav').on('click', function(){
            $('#primary-menu').toggle('is-active');
        });
        // about us dropdown
         $('#menu-item-71').on('click', function() {
           $('.sub-menu').toggle('is-active');
         });
    });// end doc ready

})(jQuery);