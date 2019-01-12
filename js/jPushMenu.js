/*!
 * jPushMenu.js
 * 1.1.1
 * @author: takien
 * http://takien.com
 * Original version (pure JS) is created by Mary Lou http://tympanus.net/
 */

(function($) {
		
	$.fn.jPushMenu = function(customOptions) {
		var o = $.extend({}, $.fn.jPushMenu.defaultOptions, customOptions);
		
		/* add class to the body.*/
		
		$('body').addClass(o.bodyClass);
		$(this).addClass('jPushMenuBtn');
		$(this).click(function() {
			var target         = '',
			push_direction     = '';
			
		
			if($(this).is('.'+o.showLeftClass)) {
				target         = '.jiffy-spmenu-left';
				push_direction = 'toright';
			}
			else if($(this).is('.'+o.showRightClass)) {
				target         = '.jiffy-spmenu-right';
				push_direction = 'toleft';
			}
			else if($(this).is('.'+o.showTopClass)) {
				target         = '.jiffy-spmenu-top';
			}
			else if($(this).is('.'+o.showBottomClass)) {
				target         = '.jiffy-spmenu-bottom';
			}
			

			$(this).toggleClass(o.activeClass);
			$(target).toggleClass(o.menuOpenClass);
			
			if($(this).is('.'+o.pushBodyClass)) {
				$('body').toggleClass( 'jiffy-spmenu-push-'+push_direction );
			}
			
			/* disable all other button*/
			$('.jPushMenuBtn').not($(this)).toggleClass('disabled');
			
			return false;
		});
		var jPushMenu = {
			close: function (o) {
				$('.jPushMenuBtn,body,.jiffy-spmenu').removeClass('disabled active jiffy-spmenu-open jiffy-spmenu-push-toleft jiffy-spmenu-push-toright');
			}
		}

    if(o.closeOnClickInside) {
       $(document).click(function() {
          jPushMenu.close();
        });

       $('.jiffy-spmenu,.toggle-menu').click(function(e){
         e.stopPropagation();
       });
    }
		
		if(o.closeOnClickOutside) {
			 $(document).click(function() { 
				jPushMenu.close();
			 }); 

			 $('.jiffy-spmenu,.toggle-menu').click(function(e){ 
				 e.stopPropagation(); 
			 });
		 }

        // On Click Link
        if(o.closeOnClickLink) {
            $('.jiffy-spmenu a').on('click',function(){
                jPushMenu.close();
            });
        }
	};
 
   /* in case you want to customize class name,
   *  do not directly edit here, use function parameter when call jPushMenu.
   */
	$.fn.jPushMenu.defaultOptions = {
		bodyClass       : 'jiffy-spmenu-push',
		activeClass     : 'menu-active',
		showLeftClass   : 'menu-left',
		showRightClass  : 'menu-right',
		showTopClass    : 'menu-top',
		showBottomClass : 'menu-bottom',
		menuOpenClass   : 'jiffy-spmenu-open',
		pushBodyClass   : 'push-body',
		closeOnClickOutside: true,
		closeOnClickInside: true,
		closeOnClickLink: true
	};
})(jQuery);
