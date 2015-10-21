(function($){

	$(window).load(function() { // makes sure the whole site is loaded
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

    var area = $('.section-content');
    $(window).scroll(function(){
       if($(window).scrollTop()<500){
          area.animated(true,true).fadeInUp(1500);
       } 
    });


  // jQuery(document).ready(function() {
  //   jQuery('.section').addClass(".hidden").viewportChecker({
  //       classToAdd: 'visible animated fadeInDown', // Class to add to the elements when they are visible
  //       offset: 100    
  //      });   
  // });            

	// jQuery(document).ready(function() {
 //    jQuery('.section-areas').addClass(".hidden").viewportChecker({
 //      classToAdd: 'visible animated fadeInUp', // Class to add to the elements when they are visible
 //      offset: 100    
 //     }); 
 //  }); 
 //  jQuery(document).ready(function() {
 //    jQuery('.section-welcome').addClass(".hidden").viewportChecker({
 //      classToAdd: 'visible animated fadeInUp', // Class to add to the elements when they are visible
 //      offset: 100    
 //     }); 
 //  }); 
 //  jQuery(document).ready(function() {
 //    jQuery('.section-post').addClass(".hidden").viewportChecker({
 //      classToAdd: 'visible animated fadeInUp', // Class to add to the elements when they are visible
 //      offset: 100    
 //     }); 
 //  }); 
 jQuery(document).ready(function() {
    jQuery('.right-slide').addClass(".hidden").viewportChecker({
      classToAdd: 'visible animated fadeInRight', // Class to add to the elements when they are visible
      offset: 50    
     }); 
    jQuery('.left-slide').addClass(".hidden").viewportChecker({
      classToAdd: 'visible animated fadeInLeft', // Class to add to the elements when they are visible
      offset: 200    
     });
  }); 
})(jQuery);
