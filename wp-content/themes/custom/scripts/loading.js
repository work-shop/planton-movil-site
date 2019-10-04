'use strict';


function loading( config ){

	console.log('loading.js loaded');

	$( document ).ready( function() {
        $( '.' + config.loadingClass ).addClass( config.loadedClass );
	});

}


export { loading };
