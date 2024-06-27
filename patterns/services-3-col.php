<?php
/**
 * Title: Services 3 columns
 * Slug: flaron/services-3-col
 * Categories: text, flaron/featured
 * Viewport width: 1400
 */
?>

<!-- wp:group {"metadata":{"name":"Services"},"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull"><!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"textAlign":"center","align":"wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|large"}}},"textColor":"main","className":"wp-block-heading"} -->
<h2 class="wp-block-heading alignwide has-text-align-center has-main-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--large)"><?php
    echo sprintf(
        /* Translators: Bringing Your Ideas to Life*/
        esc_html__( 'Bringing  %1$s to Life', 'flaron' ),
        '<span class="has-primary-color">Your Ideas</span>'
    );
?></h2>
<!-- /wp:heading -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"style":{"spacing":{"blockGap":"1.1rem"}},"layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-column"><!-- wp:group {"style":{"shadow":"rgba(0, 0, 0, 0.05) 0px 6px 24px 0px, rgba(0, 0, 0, 0.08) 0px 0px 0px 1px","spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|small"},"border":{"radius":"12px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-radius:12px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium);box-shadow:rgba(0, 0, 0, 0.05) 0px 6px 24px 0px, rgba(0, 0, 0, 0.08) 0px 0px 0px 1px"><!-- wp:image {"id":519,"width":"50px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() . "/patterns/images/icons/options.png") ?>" alt="" class="wp-image-519" style="aspect-ratio:1;object-fit:cover;width:50px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"left","level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"18px"}},"className":"wp-block-heading"} -->
<h5 class="wp-block-heading has-text-align-left" style="font-size:18px;font-style:normal;font-weight:600"><?php esc_html_e( 'UI/UX Design', 'flaron' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","style":{"typography":{"fontSize":"16px"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary"} -->
<p class="has-text-align-left has-secondary-color has-text-color has-link-color" style="font-size:16px"><?php esc_html_e( 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus qui beatae quaerat molestias.', 'flaron' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} -->
<p class="has-primary-color has-text-color has-link-color"><a href="#"><?php esc_html_e( 'Learn More →', 'flaron' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"1.1rem"}},"layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-column"><!-- wp:group {"style":{"shadow":"rgba(0, 0, 0, 0.05) 0px 6px 24px 0px, rgba(0, 0, 0, 0.08) 0px 0px 0px 1px","spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|small"},"border":{"radius":"12px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-radius:12px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium);box-shadow:rgba(0, 0, 0, 0.05) 0px 6px 24px 0px, rgba(0, 0, 0, 0.08) 0px 0px 0px 1px"><!-- wp:image {"id":519,"width":"50px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() . "/patterns/images/icons/rocket-launch.png") ?>" alt="" class="wp-image-519" style="aspect-ratio:1;object-fit:cover;width:50px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"left","level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"18px"}},"className":"wp-block-heading"} -->
<h5 class="wp-block-heading has-text-align-left" style="font-size:18px;font-style:normal;font-weight:600"><?php esc_html_e( 'Product Design', 'flaron' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","style":{"typography":{"fontSize":"16px"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary"} -->
<p class="has-text-align-left has-secondary-color has-text-color has-link-color" style="font-size:16px"><?php esc_html_e( 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus qui beatae quaerat molestias.', 'flaron' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} -->
<p class="has-primary-color has-text-color has-link-color"><a href="#"><?php esc_html_e( 'Learn More →', 'flaron' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"1.1rem"}},"layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-column"><!-- wp:group {"style":{"shadow":"rgba(0, 0, 0, 0.05) 0px 6px 24px 0px, rgba(0, 0, 0, 0.08) 0px 0px 0px 1px","spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|small"},"border":{"radius":"12px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-radius:12px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium);box-shadow:rgba(0, 0, 0, 0.05) 0px 6px 24px 0px, rgba(0, 0, 0, 0.08) 0px 0px 0px 1px"><!-- wp:image {"id":519,"width":"50px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() . "/patterns/images/icons/chart-data.png") ?>" alt="" class="wp-image-519" style="aspect-ratio:1;object-fit:cover;width:50px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"left","level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"18px"}},"className":"wp-block-heading"} -->
<h5 class="wp-block-heading has-text-align-left" style="font-size:18px;font-style:normal;font-weight:600"><?php esc_html_e( 'Brand Design', 'flaron' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","style":{"typography":{"fontSize":"16px"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary"} -->
<p class="has-text-align-left has-secondary-color has-text-color has-link-color" style="font-size:16px"><?php esc_html_e( 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus qui beatae quaerat molestias.', 'flaron' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} -->
<p class="has-primary-color has-text-color has-link-color"><a href="#"><?php esc_html_e( 'Learn More →', 'flaron' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->