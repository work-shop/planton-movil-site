'use strict';

function accordian() {

    $(document).ready( function( ){

        $('.accordian-toggle').find('.accordian-state').addClass('closed');
        $('.accordian-target').slideUp();

        $('.accordian-toggle').on( 'click', function() {
            $( this ).find('.accordian-state').toggleClass('closed').toggleClass('open');
            $( this ).nextAll('.accordian-target').slideToggle();
        });
    });

}

export { accordian };
