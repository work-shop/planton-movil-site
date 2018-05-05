'use strict';

import { config } from './config.js';
import { loading } from './loading.js';
import { linksNewtab } from './links-newtab.js';
import { jumpLinks } from './jump-links.js';
import { modals } from './modals.js';
import { menuToggle } from './menu-toggle.js';
import { slickSlideshows } from './slick-slideshows.js';
import { homeBackground } from './home-background.js';
import { imageMask } from './image-mask.js';
import { imageClipPath } from './image-clip-path.js';
import { markupColor } from './markup-color.js';
import { pageHeroHeight } from './page-hero-height.js';
import { accordian } from './accordian.js';

loading(config.loading);
linksNewtab(config.linksNewtab);
jumpLinks(config.jumpLinks);
modals(config.modals);
menuToggle(config.menuToggle);
homeBackground( config.home );
slickSlideshows(config.slickSlideshows);
imageClipPath( config.imageClipPath );
markupColor( config.markupColor );
pageHeroHeight( config.pageHeroHeight );
imageMask( config.imageMask );
accordian();

console.log('main.js loaded');
