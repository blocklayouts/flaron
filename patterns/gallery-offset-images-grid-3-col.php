<?php
/**
 * Title: Offset gallery, 3 columns
 * Slug: flaron/gallery-three-columns
 * Keywords: gallery, portfolio, projects
 * Categories: gallery, portfolio
 * Viewport width: 1400
 */

$placeholder_url = esc_url( get_template_directory_uri() . "/patterns/images/placeholder.png");
 
?>


<!-- wp:group {"metadata":{"name":"Projects"},"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull"><!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|small","left":"var:preset|spacing|medium"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"100%","layout":{"type":"constrained","contentSize":"","justifyContent":"left"}} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:100%"><!-- wp:heading {"textAlign":"left","align":"wide","textColor":"main","className":"wp-block-heading"} -->
<h2 class="wp-block-heading alignwide has-text-align-left has-main-color has-text-color"><?php
    echo sprintf(
        /* Translators: My Portfolio Highlights */
        esc_html__( 'My  %1$s Highlights', 'flaron' ),
        '<span class="has-primary-color">Portfolio</span>'
    );
?></h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"100%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:100%"><!-- wp:buttons {"className":"justify-start-on-mobile","layout":{"type":"flex","justifyContent":"right"}} -->
<div class="wp-block-buttons justify-start-on-mobile"><!-- wp:button {"style":{"spacing":{"padding":{"left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" style="padding-right:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><?php esc_html_e( 'View all projects →', 'flaron' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|lg","bottom":"var:preset|spacing|lg"},"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--lg);padding-bottom:var(--wp--preset--spacing--lg)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:cover {"url":"<?php echo $placeholder_url ?>","id":227,"dimRatio":0,"customOverlayColor":"#ccbbb6","isUserOverlayColor":true,"contentPosition":"bottom center","isDark":false,"style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"},"blockGap":"var:preset|spacing|x-small"},"border":{"radius":"12px"}}} -->
<div class="wp-block-cover is-light has-custom-content-position is-position-bottom-center" style="border-radius:12px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#ccbbb6"></span><img class="wp-block-cover__image-background wp-image-227" alt="" src="<?php echo $placeholder_url ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small","padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}},"border":{"radius":"10px"},"color":{"gradient":"linear-gradient(0deg,rgba(0,0,0,0.61) 0%,rgba(66,66,66,0) 100%)"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background" style="border-radius:10px;background:linear-gradient(0deg,rgba(0,0,0,0.61) 0%,rgba(66,66,66,0) 100%);padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--small)"><!-- wp:heading {"textAlign":"left","level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","fontSize":"large"} -->
<h3 class="wp-block-heading has-text-align-left has-base-color has-text-color has-link-color has-large-font-size"><?php esc_html_e( 'Project 1', 'flaron' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-gray"}}},"typography":{"fontSize":"12px"}},"textColor":"light-gray"} -->
<p class="has-light-gray-color has-text-color has-link-color" style="font-size:12px"><?php esc_html_e( 'September 4, 2023', 'flaron' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}}} -->
<div class="wp-block-column"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}}}} -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:cover {"url":"<?php echo $placeholder_url ?>","id":230,"dimRatio":0,"customOverlayColor":"#ccbbb6","isUserOverlayColor":true,"contentPosition":"bottom center","isDark":false,"style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"},"blockGap":"var:preset|spacing|x-small"},"border":{"radius":"12px"}}} -->
<div class="wp-block-cover is-light has-custom-content-position is-position-bottom-center" style="border-radius:12px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#ccbbb6"></span><img class="wp-block-cover__image-background wp-image-230" alt="" src="<?php echo $placeholder_url ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small","padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}},"border":{"radius":"10px"},"color":{"gradient":"linear-gradient(0deg,rgba(0,0,0,0.61) 0%,rgba(66,66,66,0) 100%)"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background" style="border-radius:10px;background:linear-gradient(0deg,rgba(0,0,0,0.61) 0%,rgba(66,66,66,0) 100%);padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--small)"><!-- wp:heading {"textAlign":"left","level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","fontSize":"large"} -->
<h3 class="wp-block-heading has-text-align-left has-base-color has-text-color has-link-color has-large-font-size"><?php esc_html_e( 'Project 2', 'flaron' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-gray"}}},"typography":{"fontSize":"12px"}},"textColor":"light-gray"} -->
<p class="has-light-gray-color has-text-color has-link-color" style="font-size:12px"><?php esc_html_e( 'September 5, 2023', 'flaron' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:cover {"url":"<?php echo $placeholder_url ?>","id":222,"dimRatio":0,"customOverlayColor":"#ccbbb6","isUserOverlayColor":true,"contentPosition":"bottom center","isDark":false,"style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"},"blockGap":"var:preset|spacing|x-small"},"border":{"radius":"12px"}}} -->
<div class="wp-block-cover is-light has-custom-content-position is-position-bottom-center" style="border-radius:12px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#ccbbb6"></span><img class="wp-block-cover__image-background wp-image-222" alt="" src="<?php echo $placeholder_url ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small","padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}},"border":{"radius":"10px"},"color":{"gradient":"linear-gradient(0deg,rgba(0,0,0,0.61) 0%,rgba(66,66,66,0) 100%)"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background" style="border-radius:10px;background:linear-gradient(0deg,rgba(0,0,0,0.61) 0%,rgba(66,66,66,0) 100%);padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--small)"><!-- wp:heading {"textAlign":"left","level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","fontSize":"large"} -->
<h3 class="wp-block-heading has-text-align-left has-base-color has-text-color has-link-color has-large-font-size"><?php esc_html_e( 'Project 3', 'flaron' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-gray"}}},"typography":{"fontSize":"12px"}},"textColor":"light-gray"} -->
<p class="has-light-gray-color has-text-color has-link-color" style="font-size:12px"><?php esc_html_e( 'September 6, 2023', 'flaron' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"style":{"spacing":{"blockGap":"1.6rem"}}} -->
<div class="wp-block-column"><!-- wp:columns {"style":{"spacing":{"padding":{"right":"0","left":"0"},"blockGap":{"top":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}}}} -->
<div class="wp-block-columns" style="padding-right:0;padding-left:0"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:cover {"url":"<?php echo $placeholder_url ?>","id":214,"dimRatio":0,"customOverlayColor":"#daddda","isUserOverlayColor":true,"contentPosition":"bottom center","isDark":false,"style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"},"blockGap":"var:preset|spacing|x-small"},"border":{"radius":"12px"}}} -->
<div class="wp-block-cover is-light has-custom-content-position is-position-bottom-center" style="border-radius:12px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#daddda"></span><img class="wp-block-cover__image-background wp-image-214" alt="" src="<?php echo $placeholder_url ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small","padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}},"border":{"radius":"10px"},"color":{"gradient":"linear-gradient(0deg,rgba(0,0,0,0.61) 0%,rgba(66,66,66,0) 100%)"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background" style="border-radius:10px;background:linear-gradient(0deg,rgba(0,0,0,0.61) 0%,rgba(66,66,66,0) 100%);padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--small)"><!-- wp:heading {"textAlign":"left","level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","fontSize":"large"} -->
<h3 class="wp-block-heading has-text-align-left has-base-color has-text-color has-link-color has-large-font-size"><?php esc_html_e( 'Project 4', 'flaron' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-gray"}}},"typography":{"fontSize":"12px"}},"textColor":"light-gray"} -->
<p class="has-light-gray-color has-text-color has-link-color" style="font-size:12px"><?php esc_html_e( 'September 7, 2023', 'flaron' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:cover {"url":"<?php echo $placeholder_url ?>","id":216,"dimRatio":0,"customOverlayColor":"#ccbbb6","isUserOverlayColor":true,"contentPosition":"bottom center","isDark":false,"style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"},"blockGap":"var:preset|spacing|x-small"},"border":{"radius":"12px"}}} -->
<div class="wp-block-cover is-light has-custom-content-position is-position-bottom-center" style="border-radius:12px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#ccbbb6"></span><img class="wp-block-cover__image-background wp-image-216" alt="" src="<?php echo $placeholder_url ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small","padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}},"border":{"radius":"10px"},"color":{"gradient":"linear-gradient(0deg,rgba(0,0,0,0.61) 0%,rgba(66,66,66,0) 100%)"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background" style="border-radius:10px;background:linear-gradient(0deg,rgba(0,0,0,0.61) 0%,rgba(66,66,66,0) 100%);padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--small)"><!-- wp:heading {"textAlign":"left","level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","fontSize":"large"} -->
<h3 class="wp-block-heading has-text-align-left has-base-color has-text-color has-link-color has-large-font-size"><?php esc_html_e( 'Project 5', 'flaron' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-gray"}}},"typography":{"fontSize":"12px"}},"textColor":"light-gray"} -->
<p class="has-light-gray-color has-text-color has-link-color" style="font-size:12px"><?php esc_html_e( 'September 8, 2023', 'flaron' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"1.6rem"}}} -->
<div class="wp-block-column"><!-- wp:cover {"url":"<?php echo $placeholder_url ?>","id":220,"dimRatio":0,"customOverlayColor":"#ccbbb6","isUserOverlayColor":true,"contentPosition":"bottom center","isDark":false,"style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"},"blockGap":"var:preset|spacing|x-small"},"border":{"radius":"12px"}}} -->
<div class="wp-block-cover is-light has-custom-content-position is-position-bottom-center" style="border-radius:12px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#ccbbb6"></span><img class="wp-block-cover__image-background wp-image-220" alt="" src="<?php echo $placeholder_url ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small","padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}},"border":{"radius":"10px"},"color":{"gradient":"linear-gradient(0deg,rgba(0,0,0,0.61) 0%,rgba(66,66,66,0) 100%)"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background" style="border-radius:10px;background:linear-gradient(0deg,rgba(0,0,0,0.61) 0%,rgba(66,66,66,0) 100%);padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--small)"><!-- wp:heading {"textAlign":"left","level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","fontSize":"large"} -->
<h3 class="wp-block-heading has-text-align-left has-base-color has-text-color has-link-color has-large-font-size"><?php esc_html_e( 'Project 6', 'flaron' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-gray"}}},"typography":{"fontSize":"12px"}},"textColor":"light-gray"} -->
<p class="has-light-gray-color has-text-color has-link-color" style="font-size:12px"><?php esc_html_e( 'September 22, 2023', 'flaron' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->