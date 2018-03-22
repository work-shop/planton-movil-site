'use strict';


function homeBackground( config ) {
    console.log( 'home-background.js loaded' );

    $( document ).ready( function( ) {

        var container = $( config.background.selector );
        var images = container.children('.home-image-block');

        container.data('current-slide', 0);

        setupHomeBackground( container, images, config );

        $(window).on('resize', function() { setupHomeBackground( container, images, config ); });

        homeBackgroundDrift( container, config );

    });

}


function homeBackgroundDrift( container, config ) {

    container.css({
        transform: 'translateX(75%)',
        transition: 'transform linear ' + config.driftDuration + 'ms'
    });

}


function setupHomeBackground( container, images, config ) {

    var total_width = determineTotalWidth( config.slides );
    var position = container.data('current-slide');

    container.width( total_width );
    container.css({ left: (-total_width) + window.innerWidth, top: 0});

    images.each( function( i ) {

        var image = $(this);

        image.css({
            left: determineImageHorizontalPosition( image, i, total_width, config.slides ),
            top: determineImageVerticalPosition( image, image.data('vertical-position') )
        });

    });

}

function determineTotalWidth( slides ) {
    if ( window.innerWidth >= 1000 ) {
        return window.innerWidth * slides;
    } else {
        return window.innerWidth * 2 * slides;
    }
}

function determineImageHorizontalPosition( image, i, width, images ) {
    if ( window.innerWidth >= 1000 ) {
        return ((width / images) * i) - (image.width() / 2);
    } else {
        return ((width / images) * i);
    }
}

function determineImageVerticalPosition( image, position ) {
    switch ( position ) {
        case 'bottom':
            return window.innerHeight / 2;

        case 'middle':
            return (window.innerHeight - image.height()) / 2;

        case 'top':
            return (window.innerHeight / 2) - image.height();

        default:
            return 0;
    }
}

export { homeBackground };
