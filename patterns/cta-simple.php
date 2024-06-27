<?php
/**
 * Title: CTA Simple
 * Slug: flaron/cta-simple
 * Categories: flaron/cta, flaron/featured
 * Viewport width: 1400
 */
?>

<!-- wp:group {"metadata":{"name":"CTA"},"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull"><!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|small","left":"var:preset|spacing|small"},"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}},"border":{"radius":"12px","width":"1px"}},"borderColor":"tertiary"} -->
<div class="wp-block-columns alignwide has-border-color has-tertiary-border-color" style="border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:column {"width":"66.66%","style":{"spacing":{"blockGap":"var:preset|spacing|small"}}} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php
    echo sprintf(
        /* Translators: Have a Project in Mind? */
        esc_html__( 'Have a %1$s in Mind?', 'flaron' ),
        '<span class="has-primary-color">Project</span>'
    );
?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|medium-gray"}}}},"textColor":"medium-gray"} -->
<p class="has-medium-gray-color has-text-color has-link-color"><?php esc_html_e( 'Have a project in mind or just want to chat? Reach out and let\'s create something amazing!', 'flaron' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%"><!-- wp:buttons {"className":"justify-start-on-mobile","layout":{"type":"flex","justifyContent":"right"}} -->
<div class="wp-block-buttons justify-start-on-mobile"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Get in touch', 'flaron' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->