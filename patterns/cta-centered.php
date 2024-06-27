<?php
/**
 * Title: CTA Centered
 * Slug: flaron/cta-centered
 * Categories: flaron/cta, flaron/featured
 * Viewport width: 1400
 */
?>

<!-- wp:group {"metadata":{"name":"CTA"},"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|medium"},"border":{"radius":"12px"}},"backgroundColor":"light-gray","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-light-gray-background-color has-background" style="border-radius:12px"><!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"textAlign":"center","fontFamily":"bricolage"} -->
<h2 class="wp-block-heading has-text-align-center has-bricolage-font-family"><?php
    echo sprintf(
        /* Translators: Unlock Your Growth Potential Start Your Free Trial Today.*/
        esc_html__( 'Unlock Your %1$s Start Your Free Trial Today.', 'flaron' ),
        '<span class="has-primary-color">Growth Potential</span>'
    );
?></h2>
<!-- /wp:heading -->

<!-- wp:buttons {"className":"justify-start-on-mobile","layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons justify-start-on-mobile"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Start Your Free Trial', 'flaron' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->