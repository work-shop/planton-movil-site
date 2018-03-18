"use strict";

function menuToggle( config ) {
	console.log('menu-toggle.js loaded');

    function resizeTrigger() {
        $('.' + config.bodyOnClass + ' #content, .'  + config.bodyOnClass + ' footer').css({ transform: 'translateY(' + $('menu').height() + 'px)' });
    }


	$(document).ready( function() {
		$(config.menuToggleSelector).click(function(e) {
			e.preventDefault();
			menuToggle();
		});

	});

    $(window).on('resize', resizeTrigger);

	//open and close the menu
	function menuToggle(){

		if($('body').hasClass(config.bodyOffClass)){
			$(config.menuToggleSelector).removeClass('closed').addClass('open');
			$(config.blanketSelector).removeClass('off').addClass('on');
			$('body').removeClass(config.bodyOffClass).addClass(config.bodyOnClass);
            $('#content, footer').css({ transform: 'translateY(' + $('menu').outerHeight() + 'px)' },  250);
            $('#nav').css({ transform: 'translateY(' + $('menu').outerHeight() + 'px)' }, 250);
		}
		else if($('body').hasClass(config.bodyOnClass)){
			$(config.menuToggleSelector).removeClass('open').addClass('closed');
			$(config.blanketSelector).removeClass('on').addClass('off');
			$('body').removeClass(config.bodyOnClass).addClass(config.bodyOffClass);
            $('#content, footer').css({ transform: 'translateY(0px)' }, 250);
            $('#nav').css({ transform: 'translateY(0px)' }, 250);
		}

	}

}



export { menuToggle };
