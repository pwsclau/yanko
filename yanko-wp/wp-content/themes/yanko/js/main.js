(function($){

	$(window).load(function() { // makes sure the whole site is loaded
        $('.cline-12').addClass('is-triggered');
        $('.cline-13').addClass('is-triggered');
        $('.cline-15').addClass('is-triggered');
        $('.cline-50').addClass('is-triggered');
    });
    var divs = $('.heading-46');
    $(window).scroll(function(){
       if($(window).scrollTop()<100){
             divs.stop(true,true).fadeIn(1500);
       } else {
             divs.stop(true,true).fadeOut(1500);
       }
    });
})(jQuery);
