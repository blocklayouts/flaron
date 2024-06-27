<?php
/**
 * Title: Header Minimal
 * Slug: flaron/header-minimal
 * Categories: header
 * Keywords: header, nav, links
 * Viewport width: 1400
 */
?>

<!-- wp:group {"tagName":"header","metadata":{"name":"header"},"align":"full","style":{"color":{"background":"#ffffff"},"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small"}}},"layout":{"type":"constrained"}} -->
<header class="wp-block-group alignfull has-background" style="background-color:#ffffff;padding-top:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small)"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide">
    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
    <div class="wp-block-group">
        <!-- wp:site-logo {"width":30,"shouldSyncIcon":true} /-->
        <!-- wp:site-title {"level":0,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"2x-large"} /-->
    </div>
    <!-- /wp:group -->

<!-- wp:navigation {"textColor":"secondary","layout":{"type":"flex","justifyContent":"center","flexWrap":"nowrap"},"style":{"spacing":{"blockGap":"var:preset|spacing|small"}}} -->

    <!-- wp:navigation-link {"label":"<?php esc_html_e( 'Home', 'flaron' ); ?>","url":"#"} /-->
    <!-- wp:navigation-link {"label":"<?php esc_html_e( 'About', 'flaron' ); ?>","url":"#"} /-->
    <!-- wp:navigation-link {"label":"<?php esc_html_e( 'Services', 'flaron' ); ?>","url":"#"} /-->
    <!-- wp:navigation-link {"label":"<?php esc_html_e( 'cantact', 'flaron' ); ?>","url":"#"} /-->

<!-- /wp:navigation -->

</div>
<!-- /wp:group --></header>
<!-- /wp:group -->