'use strict';


function homeBackground( config ) {
    console.log( 'home-background.js loaded' );

    $( document ).ready( function( ) {

        var container = $( config.background.selector );
        var images = container.children('.home-image-block');

        container.data('current-slide', 0);

        setupHomeBackground( container, images, config );

        $(window).on('resize', function() { setupHomeBackground( container, images, config ); });

        $('.slick-home').on('beforeChange', function( e, slick, currentSlide, nextSlide ) {

            container.data('current-slide', nextSlide);
            container.animate({ left: -nextSlide * window.innerWidth }, 700);

        });

    });

}


function setupHomeBackground( container, images, config ) {

    var total_width = determineTotalWidth( config.slides );
    var position = container.data('current-slide');

    console.log( position );

    container.width( total_width );
    container.css({ left: -parseInt(position) * window.innerWidth, top: 0});

    images.each( function( i ) {

        var image = $(this);

        image.css({
            left: determineImageHorizontalPosition( image, i, total_width, config.slides ),
            top: determineImageVerticalPosition( image, image.data('vertical-position') )
        });

    });

}

function determineTotalWidth( slides ) { return window.innerWidth * slides; }

function determineImageHorizontalPosition( image, i, width, images ) {
    return ((width / images) * i) - (image.width() / 2);
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
