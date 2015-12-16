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

    HEIGHT SAME
    equalheight = function(container){
        var currentTallest = 0,
            currentRowStart = 0,
            rowDivs = new Array(),
            $el,
            topPosition = 0;
        $(container).each(function() {

            $el = $(this);
            $($el).height('auto')
            topPostion = $el.position().top;

            if (currentRowStart != topPostion) {
                for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
                    rowDivs[currentDiv].height(currentTallest);
                }
                rowDivs.length = 0; // empty the array
                currentRowStart = topPostion;
                currentTallest = $el.height();
                rowDivs.push($el);
            } else {
                rowDivs.push($el);
                currentTallest = (currentTallest < $el.height()) ? ($el.height()) : (currentTallest);
            }
            for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
                rowDivs[currentDiv].height(currentTallest);
            }
        });
    }

    $(window).load(function() {
        equalheight('.section-desc p');
    });

    $(window).resize(function(){
        equalheight('.section-desc p');
    });

 })(jQuery);
