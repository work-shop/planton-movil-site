'use strict';

var seedrandom = require('seedrandom');

function imageClipPath( config ) {
    $( document ).ready( function() {

        $('.clipped-image').each( function() {

            let elem = $( this );
            const rng = seedrandom( elem.parents('.walk-card').data('id') );

            const xt = get_bounded_random_value( rng, 35, 50 );
            const yt = get_bounded_random_value( rng, 15, 20 );

            const xb = get_bounded_random_value( rng, 50, 65 );
            const yb = get_bounded_random_value( rng, 70, 75 );

            const clipPath = build_clip_path( xt, yt, xb, yb )

            elem.css({
                clipPath: clipPath,
                '-webkit-clip-path': clipPath
             });

        });

    });
}

function get_bounded_random_value( ng, hi, lo ) { return Math.floor( lo + ng() * (hi - lo) ); }

function percentage_pair( x, y  ){ return x + '% ' + y + '%'; }

function build_clip_path( xt, yt, xb, yb ) {
    return 'polygon(' + [
        percentage_pair( 0,0 ),
        percentage_pair( xt,0 ),
        //percentage_pair( xt, yt ),
        percentage_pair( 100, yt ),
        percentage_pair( 100, 100 ),
        percentage_pair( xb, 100),
        //percentage_pair( xb, yb ),
        percentage_pair( 0, yb )
    ].join(', ') + ')';
}


export { imageClipPath };
