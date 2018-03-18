'use strict';

import { config } from './config.js';
import { loading } from './loading.js';
import { linksNewtab } from './links-newtab.js';
import { stickyNav } from './sticky-nav.js';
import { jumpLinks } from './jump-links.js';
import { modals } from './modals.js';
import { menuToggle } from './menu-toggle.js';
import { slickSlideshows } from './slick-slideshows.js';
import { homeBackground } from './home-background.js';
import { imageMask } from './image-mask.js';
import { imageClipPath } from './image-clip-path.js';
import { markupColor } from './markup-color.js';

loading(config.loading);
linksNewtab(config.linksNewtab);
stickyNav(config.stickyNav);
jumpLinks(config.jumpLinks);
modals(config.modals);
// scrollSpy(config.scrollSpy);
menuToggle(config.menuToggle);
homeBackground( config.home );
slickSlideshows(config.slickSlideshows);
imageClipPath( config.imageClipPath );
markupColor( config.markupColor );


imageMask( config.imageMask );

console.log('main.js loaded');
