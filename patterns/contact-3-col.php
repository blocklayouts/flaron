<?php
/**
 * Title: Contact 3 columns
 * Slug: flaron/contact-3-col
 * Categories: flaron/featured
 * Keywords: contact, about
 * Viewport width: 1400
 */
?>

<!-- wp:group {"metadata":{"name":"Contact"},"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull"><!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|large"}}},"textColor":"main","className":"wp-block-heading","fontFamily":"bricolage"} -->
<h2 class="wp-block-heading has-text-align-center has-main-color has-text-color has-bricolage-font-family" style="margin-bottom:var(--wp--preset--spacing--large)"><?php
        echo sprintf(
            /* Translators: Need help? Get in Touch With us Today! */
            esc_html__( 'Need help? %1$s With us Today!', 'flaron' ),
            '<span class="has-primary-color">Get in Touch</span>'
        );
    ?></h2>
<!-- /wp:heading -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained","contentSize":"400px","justifyContent":"center"}} -->
<div class="wp-block-column"><!-- wp:image {"id":512,"width":"60px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() . "/patterns/images/icons/mail.png") ?>" alt="" class="wp-image-512" style="aspect-ratio:1;object-fit:cover;width:60px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":3,"textColor":"heading","className":"wp-block-heading","fontSize":"large"} -->
<h3 class="wp-block-heading has-text-align-center has-heading-color has-text-color has-large-font-size"><?php esc_html_e( 'Email address', 'flaron' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"16px"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary"} -->
<p class="has-text-align-center has-secondary-color has-text-color has-link-color" style="font-size:16px"><?php esc_html_e( 'info@company.com', 'flaron' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained","contentSize":"400px","justifyContent":"center"}} -->
<div class="wp-block-column"><!-- wp:image {"id":513,"width":"60px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() . "/patterns/images/icons/phone.png") ?>" alt="" class="wp-image-513" style="aspect-ratio:1;object-fit:cover;width:60px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":3,"textColor":"heading","className":"wp-block-heading","fontSize":"large"} -->
<h3 class="wp-block-heading has-text-align-center has-heading-color has-text-color has-large-font-size"><?php esc_html_e( 'Phone number', 'flaron' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#6b7280"},"typography":{"fontSize":"16px"}}} -->
<p class="has-text-align-center has-text-color" style="color:#6b7280;font-size:16px"><?php esc_html_e( '(222) 123-4567T', 'flaron' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained","contentSize":"400px","justifyContent":"center"}} -->
<div class="wp-block-column"><!-- wp:image {"id":514,"width":"60px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() . "/patterns/images/icons/location.png") ?>" alt="" class="wp-image-514" style="aspect-ratio:1;object-fit:cover;width:60px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":3,"textColor":"heading","className":"wp-block-heading","fontSize":"large"} -->
<h3 class="wp-block-heading has-text-align-center has-heading-color has-text-color has-large-font-size"><?php esc_html_e( 'Address', 'flaron' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#6b7280"},"typography":{"fontSize":"16px"}}} -->
<p class="has-text-align-center has-text-color" style="color:#6b7280;font-size:16px"><?php esc_html_e( '123 Main Street, Anytown, CA 12345', 'flaron' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->