<?php
/**
 * Title: Text about us
 * Slug: flaron/text-about
 * Categories: text
 * Keywords: text, about, banner
 * Viewport width: 1400
 */
?>

<!-- wp:group {"metadata":{"name":"About us"},"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull">

<!-- wp:media-text {"align":"wide","mediaId":443,"mediaLink":"<?php echo esc_url( get_template_directory_uri() . "/patterns/images/co-workers.png") ?>","mediaType":"image","mediaWidth":40} -->
<div class="wp-block-media-text alignwide is-stacked-on-mobile" style="grid-template-columns:40% auto"><figure class="wp-block-media-text__media"><img src="<?php echo esc_url( get_template_directory_uri() . "/patterns/images/co-workers.png") ?>" alt="" class="wp-image-443 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:heading {"textAlign":"left","className":"wp-block-heading","fontFamily":"bricolage"} -->
<h2 class="wp-block-heading has-text-align-left has-bricolage-font-family"><?php
    echo sprintf(
        /* Translators: We Help Businesses Thrive in the Digital Age */
        esc_html__( 'We Help Businesses Thrive in the %1$s', 'flaron' ),
        '<span class="has-primary-color">Digital Age</span>'
    );
?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","fontSize":"large"} -->
<p class="has-secondary-color has-text-color has-link-color has-large-font-size"><?php esc_html_e( 'We are a passionate team of digital marketing experts dedicated to empowering businesses to achieve their online goals.&nbsp;We believe in data-driven strategies,&nbsp;creative solutions,&nbsp;and building genuine partnerships with our clients.&nbsp;Unlike other agencies,&nbsp;we focus on building long-term success and measurable results.', 'flaron' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","fontSize":"large"} -->
<p class="has-secondary-color has-text-color has-link-color has-large-font-size"><?php esc_html_e( 'We partner with businesses of all sizes,&nbsp;from startups to established enterprises,&nbsp;across various industries.', 'flaron' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconColor":"medium-gray","iconColorValue":"#94A3B8","size":"has-small-icon-size","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|x-small","left":"var:preset|spacing|x-small"}}},"className":"is-style-logos-only"} -->
<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"behance"} /-->

<!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"dribbble"} /--></ul>
<!-- /wp:social-links --></div></div>
<!-- /wp:media-text -->

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->