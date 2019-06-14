(function($){

    $(function(){
        // hamburger menu
        $('#toggle-nav').on('click', function(){
            $('#primary-menu').slideToggle('is-active');
        });
        // about us dropdown
         $('#menu-item-71').on('click', function() {
           $('.sub-menu').slideToggle('is-active');
         });
    });// end doc ready

})(jQuery);