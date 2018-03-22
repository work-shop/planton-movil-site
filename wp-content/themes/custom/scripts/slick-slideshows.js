'use strict';

var slick = require ('slick-carousel');

function slickSlideshows( config ) {
	console.log('slick-slideshows.js loaded');

	$( document ).ready( function() {

        var elem = $('.slick-home');

	    elem.slick({
			slidesToShow: config.slidesToShow,
			dots: config.dots,
            arrows: true,
            prevArrow: false,
			autoplay: false,
			autoplaySpeed: config.autoplaySpeed,
			speed: config.speed,
            infinite: true
		});

	});

}


export { slickSlideshows };
