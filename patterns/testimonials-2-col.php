<?php
/**
 * Title: Testimonials two columns
 * Slug: flaron/testimonials-two-columns
 * Categories: testimonials
 * Viewport width: 1400
 */
?>

<!-- wp:group {"metadata":{"name":"Testimonials"},"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull"><!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"textAlign":"center","align":"wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|large"}}},"textColor":"main","className":"wp-block-heading"} -->
<h2 class="wp-block-heading alignwide has-text-align-center has-main-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--large)"><?php
    echo sprintf(
        /* Translators: Happy Clients, Happy Me*/
        esc_html__( 'Happy %1$s , Happy Me', 'flaron' ),
        '<span class="has-primary-color">Clients</span>'
    );
?></h2>
<!-- /wp:heading -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"style":{"spacing":{"blockGap":"1.1rem"}},"layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"12px","width":"1px"},"spacing":{"blockGap":"var:preset|spacing|small","padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}}},"borderColor":"tertiary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-tertiary-border-color" style="border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:paragraph {"align":"left","style":{"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"600"}},"className":"wp-block-heading"} -->
<p class="has-text-align-left wp-block-heading" style="font-size:18px;font-style:normal;font-weight:600"><?php esc_html_e( '“Working with John was a game-changer”', 'flaron' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"left","style":{"typography":{"fontSize":"16px"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary"} -->
<p class="has-text-align-left has-secondary-color has-text-color has-link-color" style="font-size:16px"><?php esc_html_e( 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aperiam inventore maxime dolores quibusdam sed nihil consequatur eius distinctio tempora.', 'flaron' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"1rem"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"id":2404,"width":"50px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"99px"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . "/patterns/images/avatars/user-6.png") ?>" alt="" class="wp-image-2404" style="border-radius:99px;aspect-ratio:1;object-fit:cover;width:50px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0.2rem"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
<p style="font-style:normal;font-weight:500"><?php esc_html_e( 'Nathan Reed', 'flaron' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"color":{"text":"#9ca3af"},"elements":{"link":{"color":{"text":"#9ca3af"}}},"typography":{"fontSize":"14px"}}} -->
<p class="has-text-color has-link-color" style="color:#9ca3af;font-size:14px"><?php esc_html_e( 'Product Manager', 'flaron' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"1.1rem"}},"layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"12px","width":"1px"},"spacing":{"blockGap":"var:preset|spacing|small","padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}}},"borderColor":"tertiary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-tertiary-border-color" style="border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:paragraph {"align":"left","style":{"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"600"}},"className":"wp-block-heading"} -->
<p class="has-text-align-left wp-block-heading" style="font-size:18px;font-style:normal;font-weight:600"><?php esc_html_e( '“Brought our brand to life”', 'flaron' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"left","style":{"typography":{"fontSize":"16px"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary"} -->
<p class="has-text-align-left has-secondary-color has-text-color has-link-color" style="font-size:16px"><?php esc_html_e( 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aperiam inventore maxime dolores quibusdam sed nihil consequatur eius distinctio tempora.', 'flaron' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"1rem"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"id":2400,"width":"50px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"99px"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . "/patterns/images/avatars/user-1.png") ?>" alt="" class="wp-image-2400" style="border-radius:99px;aspect-ratio:1;object-fit:cover;width:50px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0.2rem"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
<p style="font-style:normal;font-weight:500"><?php esc_html_e( 'Liam Davis', 'flaron' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"color":{"text":"#9ca3af"},"elements":{"link":{"color":{"text":"#9ca3af"}}},"typography":{"fontSize":"14px"}}} -->
<p class="has-text-color has-link-color" style="color:#9ca3af;font-size:14px"><?php esc_html_e( 'Financial Analyst', 'flaron' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->