'use strict';

function imageMask( config ) {

    function computePageHeroImageSize( i, e ) {
        var elem = $(e);

        const width = parseInt( elem.data('image-width') );
        const height = parseInt( elem.data('image-height') );



        if ( width > height ) {

            let ratio = height / width;
            let vw = (config.baseVW / 100) * window.innerWidth;
            let vh = ratio * vw;

            elem.css({
                width: vw + 'px',
                height: vh + 'px'
            });


        } else if ( width === height ) {

            let vw = (config.baseVW / 100) * window.innerWidth;

            elem.css({
                width: vw + 'px',
                height: vw + 'px'
            });

        } else {

            console.log( width, height );

            let ratio = width / height;
            let vh = (config.baseVW / 100) * window.innerHeight;
            let vw = ratio * vh;

            elem.css({
                width: vw + 'px',
                height: vh + 'px'
            });

        }

    }

    $( document ).ready( function() {

        $('[data-tint-color]').each( function() {
            var elem = $( this );

            const color = elem.data('tint-color');
            const opacity = elem.data('opacity');

            elem.css({
                backgroundColor: color || config.defaultColor,
                opacity: opacity || config.defaultOpacity
            });

        });

        $('.masked-image').each( computePageHeroImageSize );

    });

    $(window).on('resize', function(  ) {
        $('.masked-image').each( computePageHeroImageSize );
    });

}



export { imageMask };
