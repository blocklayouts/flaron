<?php
/**
 * Title: Text with alternating image on the left
 * Slug: flaron/text-alternating-image
 * Categories: text
 * Keywords: text, about, banner
 * Viewport width: 1400
 */
?>

<!-- wp:group {"metadata":{"name":"About"},"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull"><!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|medium","left":"var:preset|spacing|large"}},"border":{"radius":"12px"}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center" style="border-radius:12px"><!-- wp:column {"verticalAlignment":"center","width":"30%","style":{"spacing":{"blockGap":"1.1rem"}},"layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:30%"><!-- wp:image {"id":346,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"12px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . "/patterns/images/placeholder-vertical.png") ?>" alt="" class="wp-image-346" style="border-radius:12px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"70%","style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained","contentSize":"","justifyContent":"left"}} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:70%"><!-- wp:heading {"textAlign":"left","className":"wp-block-heading","fontFamily":"bricolage"} -->
<h2 class="wp-block-heading has-text-align-left has-bricolage-font-family"><?php
    echo sprintf(
        /* Translators: We Help Businesses Thrive in the Digital Age */
        esc_html__( 'We Help Businesses Thrive in the  %1$s', 'flaron' ),
        '<span class="has-primary-color">Digital Age</span>'
    );
?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary"} -->
<p class="has-secondary-color has-text-color has-link-color"><?php esc_html_e( 'We are a passionate team of digital marketing experts dedicated to empowering businesses to achieve their online goals. We believe in data-driven strategies, creative solutions, and building genuine partnerships with our clients. Unlike other agencies, we focus on building long-term success and measurable results.', 'flaron' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary"} -->
<p class="has-secondary-color has-text-color has-link-color"><?php esc_html_e( 'We partner with businesses of all sizes, from startups to established enterprises, across various industries.', 'flaron' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} -->
<p class="has-primary-color has-text-color has-link-color"><a href="#"><?php esc_html_e( 'Download Our Free Marketing Guide →', 'flaron' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconColor":"medium-gray","iconColorValue":"#94A3B8","size":"has-small-icon-size","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|x-small","left":"var:preset|spacing|x-small"}}},"className":"is-style-logos-only"} -->
<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"behance"} /-->

<!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"dribbble"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->