<?php
/**
 * Title: Header Default
 * Slug: flaron/header-default
 * Categories: header
 * Keywords: header, nav, links
 * Viewport width: 1400
 */
?>

<!-- wp:group {"tagName":"header","metadata":{"name":"header default"},"align":"full","style":{"color":{"background":"#ffffff"}},"layout":{"type":"constrained"}} -->
<header class="wp-block-group alignfull has-background" style="background-color:#ffffff"><!-- wp:columns {"verticalAlignment":"center","isStackedOnMobile":false,"metadata":{"name":"Header"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center is-not-stacked-on-mobile" style="padding-top:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small)"><!-- wp:column {"verticalAlignment":"center","width":"25%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:25%">
    
    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
    <div class="wp-block-group">
        <!-- wp:site-logo {"width":30,"shouldSyncIcon":true} /-->
        <!-- wp:site-title {"level":0,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"2x-large"} /-->
    </div>
    <!-- /wp:group -->

</div>
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
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" style="padding-right:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)"><?php esc_html_e( 'Let\'s Talk →', 'flaron' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></header>
<!-- /wp:group -->

