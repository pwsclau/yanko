(function($){
	$('.img-icon').addClass('animated fadeInDownShort go');
	$('.parent-prod').addClass('animated fadeInUpShort go');


	$('.carousel-title').addClass('animated fadeInLeft go delay-250');
	$('.carousel-caption p').addClass('animated fadeInLeft go delay-500');
	$('.item .btn-view').addClass('animated fadeInLeft go delay-750');
	$('.item .image-holder img').addClass('animated fadeInRight go');
	
	///PRODUCT HOVER
	$(".parent-prod .prod").hover(function() { // Mouse over
	  $(this).siblings().stop().fadeTo(300, 0.6);
	  $(this).parent().siblings().stop().fadeTo(300, 0.2); 
	}, function() { // Mouse out
	  $(this).siblings().stop().fadeTo(300, 1);
	  $(this).parent().siblings().stop().fadeTo(300, 1);
	});
	////////
	
    $(window).load(function(){
      $('#carousel').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        slideshow: false,
        itemWidth: 210,
        itemMargin: 5,
        asNavFor: '#slider'
      });

      $('#slider').flexslider({
        animation: "slide",
        controlNav: false,
        directionNav: false,
        prevText: "prev",
        nextText: "prev",
        animationLoop: false,
        slideshow: false,
        sync: "#carousel",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });

    ///input
    // trim polyfill : https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/Trim
	if (!String.prototype.trim) {
		(function() {
			// Make sure we trim BOM and NBSP
			var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
			String.prototype.trim = function() {
				return this.replace(rtrim, '');
			};
		})();
	}

	[].slice.call( document.querySelectorAll( 'input.input__field' ) ).forEach( function( inputEl ) {
		// in case the input is already filled..
		if( inputEl.value.trim() !== '' ) {
			classie.add( inputEl.parentNode, 'input--filled' );
		}

		// events:
		inputEl.addEventListener( 'focus', onInputFocus );
		inputEl.addEventListener( 'blur', onInputBlur );
	} );

	function onInputFocus( ev ) {
		classie.add( ev.target.parentNode, 'input--filled' );
	}

	function onInputBlur( ev ) {
		if( ev.target.value.trim() === '' ) {
			classie.remove( ev.target.parentNode, 'input--filled' );
		}
	}
})(jQuery);

//////PRODUCT JS
$(document).on('scroll', function(){
	// $('.parent-prod').addClass('animatedParent');
	// $('.prod').eq(0).addClass('animated fadeInLeft delay-500 go');
	// $('.prod').eq(1).addClass('animated fadeInLeft delay-250 go');
	// $('.prod').eq(2).addClass('animated fadeInRight delay-250 go');
	// $('.prod').eq(3).addClass('animated fadeInRight delay-500 go');
});