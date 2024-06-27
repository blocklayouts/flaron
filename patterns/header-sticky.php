<?php
/**
 * Title: Header Sticky
 * Slug: flaron/header-sticky
 * Categories: header
 * Keywords: header, nav, links
 * Viewport width: 1400
 */
?>

<!-- wp:group {"tagName":"header","metadata":{"name":"Header Sticky"},"align":"full","style":{"position":{"type":"sticky","top":"0px"},"spacing":{"margin":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small"},"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small"}}},"layout":{"type":"constrained"}} -->
<header class="wp-block-group alignfull" style="margin-top:var(--wp--preset--spacing--small);margin-bottom:var(--wp--preset--spacing--small);padding-top:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small)"><!-- wp:columns {"verticalAlignment":"center","isStackedOnMobile":false,"metadata":{"name":"Header"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}},"border":{"radius":"99px"},"shadow":"var:preset|shadow|md"},"backgroundColor":"base"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center is-not-stacked-on-mobile has-base-background-color has-background" style="border-radius:99px;padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small);box-shadow:var(--wp--preset--shadow--md)"><!-- wp:column {"verticalAlignment":"center","width":"25%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:25%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:site-logo {"width":30,"shouldSyncIcon":true} /-->

<!-- wp:site-title {"level":0,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"2x-large"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"50%","className":"flex-basis-auto-on-mobile"} -->
<div class="wp-block-column is-vertically-aligned-center flex-basis-auto-on-mobile" style="flex-basis:50%">
    <!-- wp:navigation {"textColor":"secondary","className":"justify-end-on-mobile","layout":{"type":"flex","justifyContent":"center","flexWrap":"nowrap"},"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}}} -->
        <!-- wp:navigation-link {"label":"<?php esc_html_e( 'Home', 'flaron' ); ?>","url":"#"} /-->
        <!-- wp:navigation-link {"label":"<?php esc_html_e( 'About', 'flaron' ); ?>","url":"#"} /-->
        <!-- wp:navigation-link {"label":"<?php esc_html_e( 'Services', 'flaron' ); ?>","url":"#"} /-->
        <!-- wp:navigation-link {"label":"<?php esc_html_e( 'cantact', 'flaron' ); ?>","url":"#"} /-->
    <!-- /wp:navigation -->

</div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"25%","className":"hide-on-mobile"} -->
<div class="wp-block-column is-vertically-aligned-center hide-on-mobile" style="flex-basis:25%"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"spacing":{"padding":{"left":"var:preset|spacing|large","right":"var:preset|spacing|large"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" style="padding-right:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">Let's Talk →</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></header>
<!-- /wp:group -->
