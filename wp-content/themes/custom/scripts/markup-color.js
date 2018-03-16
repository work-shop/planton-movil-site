'use strict';

function markupColor( config ) {
    $( document ).ready( function() {
        $('[data-color]').each( function() {
            const elem = $( this );

            elem.css({ backgroundColor: elem.data('color') });

        });
    });
}

export { markupColor };
