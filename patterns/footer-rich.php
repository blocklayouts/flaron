<?php
/**
 * Title: Footer Rich
 * Slug: flaron/footer-rich
 * Categories: footer
 * Keywords: footer, nav, links
 * Viewport width: 1400
 */
?>

<!-- wp:group {"tagName":"footer","metadata":{"name":"Footer"},"backgroundColor":"light-gray","layout":{"type":"constrained"}} -->
<footer class="wp-block-group has-light-gray-background-color has-background"><!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"40%","style":{"spacing":{"blockGap":"var:preset|spacing|small"}}} -->
<div class="wp-block-column" style="flex-basis:40%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:site-logo {"width":30,"shouldSyncIcon":true} /-->

<!-- wp:site-title {"level":0,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"2x-large"} /--></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|main"}}}},"textColor":"main"} -->
<p class="has-main-color has-text-color has-link-color"><?php esc_html_e( 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore atque quia eaque architecto quaerat nobis, amet sint nemo ea cumque labore maiores dolorum facere.', 'flaron' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconColor":"secondary","iconColorValue":"#6b7280","size":"has-small-icon-size","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|x-small","left":"var:preset|spacing|x-small"}}},"className":"is-style-logos-only"} -->
<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"github"} /-->

<!-- wp:social-link {"url":"#","service":"linkedin"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"60%"} -->
<div class="wp-block-column" style="flex-basis:60%"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|small","left":"var:preset|spacing|small"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}}} -->
<div class="wp-block-column"><!-- wp:heading {"textAlign":"left","level":5} -->
<h5 class="wp-block-heading has-text-align-left"><?php esc_html_e( 'Pages', 'flaron' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:navigation {"textColor":"secondary","overlayMenu":"never","layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"},"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}}} -->

    <!-- wp:navigation-link {"label":"<?php esc_html_e( 'Home', 'flaron' ); ?>","url":"#"} /-->
    <!-- wp:navigation-link {"label":"<?php esc_html_e( 'About', 'flaron' ); ?>","url":"#"} /-->
    <!-- wp:navigation-link {"label":"<?php esc_html_e( 'Services', 'flaron' ); ?>","url":"#"} /-->
    <!-- wp:navigation-link {"label":"<?php esc_html_e( 'Contact', 'flaron' ); ?>","url":"#"} /-->

<!-- /wp:navigation -->

</div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}}} -->
<div class="wp-block-column"><!-- wp:heading {"textAlign":"left","level":5} -->
<h5 class="wp-block-heading has-text-align-left"><?php esc_html_e( 'Company', 'flaron' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:navigation {"textColor":"secondary","overlayMenu":"never","layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"},"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}}} -->

    <!-- wp:navigation-link {"label":"<?php esc_html_e( 'Careers', 'flaron' ); ?>","url":"#"} /-->
    <!-- wp:navigation-link {"label":"<?php esc_html_e( 'Brand', 'flaron' ); ?>","url":"#"} /-->
    <!-- wp:navigation-link {"label":"<?php esc_html_e( 'Charges', 'flaron' ); ?>","url":"#"} /-->
    <!-- wp:navigation-link {"label":"<?php esc_html_e( 'FAQ', 'flaron' ); ?>","url":"#"} /-->

<!-- /wp:navigation -->

</div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}}} -->
<div class="wp-block-column"><!-- wp:heading {"textAlign":"left","level":5} -->
<h5 class="wp-block-heading has-text-align-left"><?php esc_html_e( 'Community', 'flaron' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:navigation {"textColor":"secondary","overlayMenu":"never","layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"},"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}}}  -->

    <!-- wp:navigation-link {"label":"<?php esc_html_e( 'Community', 'flaron' ); ?>","url":"#"} /-->
    <!-- wp:navigation-link {"label":"<?php esc_html_e( 'Meetups', 'flaron' ); ?>","url":"#"} /-->
    <!-- wp:navigation-link {"label":"<?php esc_html_e( 'Site Awards', 'flaron' ); ?>","url":"#"} /-->

<!-- /wp:navigation --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium","padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small"},"margin":{"top":"var:preset|spacing|small"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--small);padding-top:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small)"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|main"}}}},"textColor":"secondary"} -->
<p class="has-secondary-color has-text-color has-link-color"><?php
    echo sprintf(
        /* Translators: © 2021-2024 Flaron™. All Rights Reserved. */
        esc_html__( '© 2021-2024 %1$s. All Rights Reserved.', 'flaron' ),
        '<a href="#">Flaron™</a>'
    );
?></p>
<!-- /wp:paragraph -->

<!-- wp:navigation {"ref":197,"textColor":"secondary","overlayMenu":"never","layout":{"type":"flex","flexWrap":"wrap"},"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}}} /--></div>
<!-- /wp:group --></footer>
<!-- /wp:group -->