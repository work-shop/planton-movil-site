'use strict';

var slick = require ('slick-carousel');

function slickSlideshows( config ) {
	console.log('slick-slideshows.js loaded');

	$( document ).ready( function() {

        var elem = $('.slick-home');

	    elem.slick({
			slidesToShow: config.slidesToShow,
			dots: config.dots,
			arroews: config.arrows,
			autoplay: false,
			autoplaySpeed: config.autoplaySpeed,
			speed: config.speed,
            infinite: false
		});

	});

}


export { slickSlideshows };
