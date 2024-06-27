<?php
/**
 * Title: Services grid 3 columns
 * Slug: flaron/services-grid-3-col
 * Categories: text, flaron/featured
 * Viewport width: 1400
 */
?>


<!-- wp:group {"metadata":{"name":"Services"},"align":"full","style":{"color":{"background":"#f1f5f9"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background" style="background-color:#f1f5f9"><!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|large"}}},"textColor":"main","className":"wp-block-heading","fontFamily":"bricolage"} -->
<h2 class="wp-block-heading has-text-align-center has-main-color has-text-color has-bricolage-font-family" style="margin-bottom:var(--wp--preset--spacing--large)"><?php
    echo sprintf(
        /* Translators: From SEO to Social Media, We Grow Businesses of All Sizes */
        esc_html__( 'From SEO to Social Media, We %1$s of All Sizes', 'flaron' ),
        '<span class="has-primary-color">Grow Businesses</span>'
    );
?></h2>
<!-- /wp:heading -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}},"border":{"radius":"12px"}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-background-color has-background" style="border-radius:12px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"id":341,"width":"50px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() . "/patterns/images/icons/chart-data.png") ?>" alt="" class="wp-image-341" style="aspect-ratio:1;object-fit:cover;width:50px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"center","level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"18px"}},"className":"wp-block-heading"} -->
<h5 class="wp-block-heading has-text-align-center" style="font-size:18px;font-style:normal;font-weight:600"><?php esc_html_e( 'Search Engine Optimization', 'flaron' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"16px"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary"} -->
<p class="has-text-align-center has-secondary-color has-text-color has-link-color" style="font-size:16px"><?php esc_html_e( 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus qui beatae quaerat molestias.', 'flaron' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}},"border":{"radius":"12px"}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-background-color has-background" style="border-radius:12px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"id":341,"width":"50px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() . "/patterns/images/icons/rocket-launch.png") ?>" alt="" class="wp-image-341" style="aspect-ratio:1;object-fit:cover;width:50px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"center","level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"18px"}},"className":"wp-block-heading"} -->
<h5 class="wp-block-heading has-text-align-center" style="font-size:18px;font-style:normal;font-weight:600"><?php esc_html_e( 'Content Marketing', 'flaron' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"16px"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary"} -->
<p class="has-text-align-center has-secondary-color has-text-color has-link-color" style="font-size:16px"><?php esc_html_e( 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus qui beatae quaerat molestias.', 'flaron' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}},"border":{"radius":"12px"}},"backgroundColor":"light-primary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-light-primary-background-color has-background" style="border-radius:12px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"id":341,"width":"50px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() . "/patterns/images/icons/web-traffic.png") ?>" alt="" class="wp-image-341" style="aspect-ratio:1;object-fit:cover;width:50px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"center","level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"18px"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","className":"wp-block-heading"} -->
<h5 class="wp-block-heading has-text-align-center has-base-color has-text-color has-link-color" style="font-size:18px;font-style:normal;font-weight:600"><?php esc_html_e( 'Pay-Per-Click Advertising', 'flaron' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"16px"},"elements":{"link":{"color":{"text":"var:preset|color|light-gray"}}}},"textColor":"light-gray"} -->
<p class="has-text-align-center has-light-gray-color has-text-color has-link-color" style="font-size:16px"><?php esc_html_e( 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus qui beatae quaerat molestias.', 'flaron' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}},"border":{"radius":"12px"}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-background-color has-background" style="border-radius:12px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"id":341,"width":"50px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() . "/patterns/images/icons/mail.png") ?>" alt="" class="wp-image-341" style="aspect-ratio:1;object-fit:cover;width:50px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"center","level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"18px"}},"className":"wp-block-heading"} -->
<h5 class="wp-block-heading has-text-align-center" style="font-size:18px;font-style:normal;font-weight:600"><?php esc_html_e( 'Email Marketing', 'flaron' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"16px"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary"} -->
<p class="has-text-align-center has-secondary-color has-text-color has-link-color" style="font-size:16px"><?php esc_html_e( 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus qui beatae quaerat molestias.', 'flaron' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}},"border":{"radius":"12px"}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-background-color has-background" style="border-radius:12px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"id":341,"width":"50px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() . "/patterns/images/icons/social.png") ?>" alt="" class="wp-image-341" style="aspect-ratio:1;object-fit:cover;width:50px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"center","level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"18px"}},"className":"wp-block-heading"} -->
<h5 class="wp-block-heading has-text-align-center" style="font-size:18px;font-style:normal;font-weight:600"><?php esc_html_e( 'Social Media Marketing', 'flaron' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"16px"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary"} -->
<p class="has-text-align-center has-secondary-color has-text-color has-link-color" style="font-size:16px"><?php esc_html_e( 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus qui beatae quaerat molestias.', 'flaron' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}},"border":{"radius":"12px"}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-background-color has-background" style="border-radius:12px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"id":341,"width":"50px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() . "/patterns/images/icons/options.png") ?>" alt="" class="wp-image-341" style="aspect-ratio:1;object-fit:cover;width:50px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"center","level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"18px"}},"className":"wp-block-heading"} -->
<h5 class="wp-block-heading has-text-align-center" style="font-size:18px;font-style:normal;font-weight:600"><?php esc_html_e( 'Web Analytics & Reporting', 'flaron' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"16px"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary"} -->
<p class="has-text-align-center has-secondary-color has-text-color has-link-color" style="font-size:16px"><?php esc_html_e( 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus qui beatae quaerat molestias.', 'flaron' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->