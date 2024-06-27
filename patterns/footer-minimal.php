<?php
/**
 * Title: Footer Minimal
 * Slug: flaron/footer-minimal
 * Categories: footer
 * Keywords: footer, nav, links
 * Viewport width: 1400
 */
?>

<!-- wp:group {"tagName":"footer","metadata":{"name":"Footer"},"layout":{"type":"constrained"}} -->
<footer class="wp-block-group"><!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|main"}}}},"textColor":"secondary"} -->
<p class="has-secondary-color has-text-color has-link-color"><?php
    echo sprintf(
        /* Translators: © 2021-2024 Flaron™. All Rights Reserved. */
        esc_html__( '© 2021-2024 %1$s. All Rights Reserved.', 'flaron' ),
        '<a href="#">Flaron™</a>'
    );
?></p>
<!-- /wp:paragraph -->

<!-- wp:navigation {"textColor":"secondary","overlayMenu":"never","layout":{"type":"flex","flexWrap":"wrap"},"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}}} -->

    <!-- wp:navigation-link {"label":"<?php esc_html_e( 'Privacy Policy', 'flaron' ); ?>","url":"#"} /-->
    <!-- wp:navigation-link {"label":"<?php esc_html_e( 'Terms & Conditions', 'flaron' ); ?>","url":"#"} /-->

<!-- /wp:navigation -->

</div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></footer>
<!-- /wp:group -->