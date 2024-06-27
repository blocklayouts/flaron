<?php
/**
 * Title: Testimonials grid 3 columns
 * Slug: flaron/testimonials-grid-3-col
 * Categories: testimonials
 * Viewport width: 1400
 */
?>

<!-- wp:group {"metadata":{"name":"Testimonials"},"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull"><!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|large"}}},"textColor":"main","className":"wp-block-heading","fontFamily":"bricolage"} -->
<h2 class="wp-block-heading has-text-align-center has-main-color has-text-color has-bricolage-font-family" style="margin-bottom:var(--wp--preset--spacing--large)"><?php
    echo sprintf(
        /* Translators: We Have Worked With Thousands of Amazing People */
        esc_html__( 'We Have Worked With Thousands of %1$s', 'flaron' ),
        '<span class="has-primary-color">Amazing People</span>'
    );
?></h2>
<!-- /wp:heading -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}},"border":{"radius":"12px","width":"1px"}},"borderColor":"tertiary","backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-tertiary-border-color has-base-background-color has-background" style="border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:image {"id":463,"width":"50px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"99px"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . "/patterns/images/avatars/user-1.png") ?>" alt="" class="wp-image-463" style="border-radius:99px;aspect-ratio:1;object-fit:cover;width:50px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
<p style="font-style:normal;font-weight:500"><?php esc_html_e( 'Mark Thompson', 'flaron' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|medium-gray"}}}},"textColor":"medium-gray","fontSize":"small"} -->
<p class="has-medium-gray-color has-text-color has-link-color has-small-font-size"><?php esc_html_e( 'CEO of X-Brand', 'flaron' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"align":"left","style":{"typography":{"fontSize":"16px"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary"} -->
<p class="has-text-align-left has-secondary-color has-text-color has-link-color" style="font-size:16px"><?php esc_html_e( 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque, esse. Exercitationem.', 'flaron' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>⭐️⭐️⭐️⭐️</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}},"border":{"radius":"12px","width":"1px"}},"borderColor":"tertiary","backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-tertiary-border-color has-base-background-color has-background" style="border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:image {"id":466,"width":"50px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"99px"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . "/patterns/images/avatars/user-2.png") ?>" alt="" class="wp-image-466" style="border-radius:99px;aspect-ratio:1;object-fit:cover;width:50px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
<p style="font-style:normal;font-weight:500"><?php esc_html_e( 'Michael Thompson', 'flaron' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|medium-gray"}}}},"textColor":"medium-gray","fontSize":"small"} -->
<p class="has-medium-gray-color has-text-color has-link-color has-small-font-size"><?php esc_html_e( 'Owner of X-Brand', 'flaron' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"align":"left","style":{"typography":{"fontSize":"16px"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary"} -->
<p class="has-text-align-left has-secondary-color has-text-color has-link-color" style="font-size:16px"><?php esc_html_e( 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque, esse. Exercitationem aliquid labore fugit eveniet ea officia et fugiat, quidem dolore porro temporibus error, sint dignissimos nulla recusandae qui reiciendis.', 'flaron' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>⭐️⭐️⭐️⭐️⭐️</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}},"border":{"radius":"12px","width":"1px"}},"borderColor":"tertiary","backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-tertiary-border-color has-base-background-color has-background" style="border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:image {"id":463,"width":"50px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"99px"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . "/patterns/images/avatars/user-3.png") ?>" alt="" class="wp-image-463" style="border-radius:99px;aspect-ratio:1;object-fit:cover;width:50px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
<p style="font-style:normal;font-weight:500"><?php esc_html_e( 'David Smith', 'flaron' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|medium-gray"}}}},"textColor":"medium-gray","fontSize":"small"} -->
<p class="has-medium-gray-color has-text-color has-link-color has-small-font-size"><?php esc_html_e( 'Founder of X-Brand', 'flaron' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"align":"left","style":{"typography":{"fontSize":"16px"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary"} -->
<p class="has-text-align-left has-secondary-color has-text-color has-link-color" style="font-size:16px"><?php esc_html_e( 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque, esse. Exercitationem aliquid labore fugit eveniet ea officia et fugiat, quidem dolore porro temporibus error, sint dignissimos nulla recusandae qui reiciendis.', 'flaron' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>⭐️⭐️⭐️⭐️</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}},"border":{"radius":"12px","width":"1px"}},"borderColor":"tertiary","backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-tertiary-border-color has-base-background-color has-background" style="border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:image {"id":466,"width":"50px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"99px"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . "/patterns/images/avatars/user-4.png") ?>" alt="" class="wp-image-466" style="border-radius:99px;aspect-ratio:1;object-fit:cover;width:50px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
<p style="font-style:normal;font-weight:500"><?php esc_html_e( 'Ryan Cooper', 'flaron' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|medium-gray"}}}},"textColor":"medium-gray","fontSize":"small"} -->
<p class="has-medium-gray-color has-text-color has-link-color has-small-font-size"><?php esc_html_e( 'Director of X-Brand', 'flaron' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"align":"left","style":{"typography":{"fontSize":"16px"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary"} -->
<p class="has-text-align-left has-secondary-color has-text-color has-link-color" style="font-size:16px"><?php esc_html_e( 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque, esse. Exercitationem aliquid labore fugit.', 'flaron' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>⭐️⭐️⭐️⭐️⭐️</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}},"border":{"radius":"12px","width":"1px"}},"borderColor":"tertiary","backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-tertiary-border-color has-base-background-color has-background" style="border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:image {"id":463,"width":"50px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"99px"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . "/patterns/images/avatars/user-5.png") ?>" alt="" class="wp-image-463" style="border-radius:99px;aspect-ratio:1;object-fit:cover;width:50px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
<p style="font-style:normal;font-weight:500"><?php esc_html_e( 'Alex Martinez', 'flaron' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|medium-gray"}}}},"textColor":"medium-gray","fontSize":"small"} -->
<p class="has-medium-gray-color has-text-color has-link-color has-small-font-size"><?php esc_html_e( 'Co-founder of X-Brand', 'flaron' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"align":"left","style":{"typography":{"fontSize":"16px"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary"} -->
<p class="has-text-align-left has-secondary-color has-text-color has-link-color" style="font-size:16px"><?php esc_html_e( 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque, esse. Exercitationem aliquid labore fugit eveniet ea officia et fugiat.', 'flaron' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>⭐️⭐️⭐️⭐️</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}},"border":{"radius":"12px","width":"1px"}},"borderColor":"tertiary","backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-tertiary-border-color has-base-background-color has-background" style="border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:image {"id":466,"width":"50px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"99px"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . "/patterns/images/avatars/user-6.png") ?>" alt="" class="wp-image-466" style="border-radius:99px;aspect-ratio:1;object-fit:cover;width:50px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
<p style="font-style:normal;font-weight:500"><?php esc_html_e( 'Ethan Brown', 'flaron' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|medium-gray"}}}},"textColor":"medium-gray","fontSize":"small"} -->
<p class="has-medium-gray-color has-text-color has-link-color has-small-font-size"><?php esc_html_e( 'Managing Director of X-Brand', 'flaron' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"align":"left","style":{"typography":{"fontSize":"16px"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary"} -->
<p class="has-text-align-left has-secondary-color has-text-color has-link-color" style="font-size:16px"><?php esc_html_e( 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque, esse. Exercitationem aliquid labore fugit.', 'flaron' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>⭐️⭐️⭐️⭐️⭐️</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->