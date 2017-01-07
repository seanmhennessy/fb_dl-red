(function ($, root, undefined) {
  
  $(function () {
    
    'use strict';

    /// classes to use when you want to hide elements after a particular action occurs
    // var isReady;
    // isReady = $('.ready-to-say');

    $(document).on('gform_confirmation_loaded', function(e, form_id){
      if(form_id == 1) {
        dataLayer.push ({'event': 'formSuccess', 'gravID': '1', 'subType': 'lead', 'formLabel': 'ADDLABEL' });
        //$(isReady).addClass('goodbye');
        //$(isReady).removeClass('ready-to-say');
      }
      if(form_id == 2) {
        dataLayer.push ({'event': 'formSuccess', 'gravID': '2', 'subType': 'lead', 'formLabel': 'ADDLABEL'});
        //$(isReady).addClass('goodbye');
        //$(isReady).removeClass('ready-to-say');
      }
    });

    $(document).ready(function(){
    	var scrollTop = 0;
    	$(window).scroll(function(){
    		scrollTop = $(window).scrollTop();
    		$('.counter').html(scrollTop);
    		if (scrollTop >= 600) {
    			$('.fluid-header').addClass('headingdown');
    			} else if (scrollTop < 600) {
    			$('.fluid-header').removeClass('headingdown');
    			}    
    	});   
    });

   // Menu Toggle and Body Lock
    $('#fluid-menu-toggle').click(function() {
      $('body').toggleClass('js-no-scroll');
      if ($('.fluid-page-container').hasClass('is--active')) {
        $('.fluid-page-container').removeClass('is--active').addClass('isnt--active');
        setTimeout(function() {
            $('.fluid-page-container').removeClass('isnt--active');
        }, 500);
      } else {
        $('.fluid-page-container').removeClass('isnt--active').addClass('is--active');
      }
      return false;
    });    
  });
})(jQuery, this);
