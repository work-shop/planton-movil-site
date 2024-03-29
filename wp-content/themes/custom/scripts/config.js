'use strict';

var global_config = {
    navHeight: 75,
    mobileNavHeight: 50,
    navPadding: 75,
    transitionDuration: 1000,
    mobileBreakpoint: 768
};

var config = {
    stickyNav: {
        selector: '#nav',
        navHeight: global_config.headerHeight,
        mobileNavHeight: global_config.headerHeight,
        mobileBreakpoint: global_config.mobileBreakpoint,
        activeOnMobile: true
    },
    linksNewTab: {
    },
    jumpLinks: {
        selector: '.jump',
        navHeight: global_config.navHeight,
        mobileNavHeight: global_config.mobileNavHeight,
        jumpPadding: 30,
        mobileJumpPadding: global_config.navPadding,
        mobileBreakpoint: global_config.mobileBreakpoint,
        transitionDuration: global_config.transitionDuration,
        preventUrlChange: false
    },
    loading: {
        loadDelay: 1500,
        loadingClass: 'loading',
        loadedClass: 'loaded',
    },
    modals: {
        modalClass: 'modal',
        modalCloseClass: 'modal-close',
        modalToggleClass: 'modal-toggle',
        modalOnBodyClass: 'modal-on',
        modalOffBodyClass: 'modal-off'
    },
    scrollSpy: {
        firstElementSelector : '.spy-first',
        spyTargetSelector : '.spy-target',
        spyLinkSelector : '.spy-link',
        spyActiveClass : 'spy-active',
        spyOffset : 150
    },
    menuToggle:{
        menuToggleSelector: '.menu-toggle',
        menuSelector: '#mobile-nav',
        blanketSelector: '#menu-blanket',
        bodyOffClass: 'menu-closed',
        bodyOnClass: 'menu-open'
    },
    slickSlideshows: {
        defaultSelector: '.slick-default',
        slidesToShow: 1,
        dots: false,
        arrows: true,
        autoplay: false,
        fade: false,
        autoplaySpeed: 10000,
        speed: 750
    },
    home: {
        background: {
            selector: '#background'
        },
        slides: 4,
        driftDuration: 480000
    },
    imageMask: {
        defaultColor: '#ffffff',
        defaultOpacity: 0.6,
        baseVW: 55

    },
    imageClipPath: {

    },
    pageHeroHeight: {
        padding: 100
    }
};

export { config };
