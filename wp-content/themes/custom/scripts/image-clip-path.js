'use strict';

var seedrandom = require('seedrandom');

function imageClipPath( config ) {
    $( document ).ready( function() {

        $('.clipped-image').each( function() {

            let elem = $( this );
            const rng = seedrandom( elem.parents('.walk-card').data('id') );

            const xt = get_bounded_random_value( rng, 45, 55 );
            const yt = get_bounded_random_value( rng, 15, 25 );

            const xb = get_bounded_random_value( rng, 40, 50 );
            const yb = get_bounded_random_value( rng, 65, 80 );

            console.log( xt, yt );
            console.log( xb, yb );

            elem.css({ clipPath: build_clip_path( xt, yt, xb, yb ) });

        });

    });
}

function get_bounded_random_value( ng, hi, lo ) { return Math.floor( lo + ng() * (hi - lo) ); }

function percentage_pair( x, y  ){ return x + '% ' + y + '%'; }

function build_clip_path( xt, yt, xb, yb ) {
    return 'polygon(' + [
        percentage_pair( 0,0 ),
        percentage_pair( xt,0 ),
        percentage_pair( xt, yt ),
        percentage_pair( 100, yt ),
        percentage_pair( 100, 100 ),
        percentage_pair( xb, 100),
        percentage_pair( xb, yb ),
        percentage_pair( 0, yb )
    ].join(', ') + ')';
}


export { imageClipPath };
