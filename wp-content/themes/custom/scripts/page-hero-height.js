'use strict';

function pageHeroHeight( config ) {
    $( document ).ready( setPageHeroHeight );
    $(window).on('resize', setPageHeroHeight );
}

function setPageHeroHeight( ) {
    $('.page-hero').css({
        minHeight: ($('.page-hero-content').height() + 100) + 'px'
    });
}

export { pageHeroHeight };
