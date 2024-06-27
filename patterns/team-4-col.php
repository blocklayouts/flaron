<?php
/**
 * Title: team 4 columns
 * Slug: flaron/team-4-col
 * Categories: testimonials
 * Viewport width: 1400
 */
?>

<!-- wp:group {"metadata":{"name":"Team"},"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull"><!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|large"}}},"textColor":"main","className":"wp-block-heading","fontFamily":"bricolage"} -->
<h2 class="wp-block-heading has-text-align-center has-main-color has-text-color has-bricolage-font-family" style="margin-bottom:var(--wp--preset--spacing--large)"><?php
    echo sprintf(
        /* Translators: The Talented People Behind Flaron*/
        esc_html__( 'The Talented People Behind %1$s', 'flaron' ),
        '<span class="has-primary-color">Flaron</span>'
    );
?></h2>
<!-- /wp:heading -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|large","left":"var:preset|spacing|large"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-column"><!-- wp:group {"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-background-color has-background">
 
<!-- wp:image {"id":496,"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"12px"}}} -->
<figure class="wp-block-image size-full has-custom-border">
    <img src="<?php echo esc_url( get_template_directory_uri() . "/patterns/images/avatars/user-1.png") ?>" alt="" class="wp-image-496" style="border-radius:12px;aspect-ratio:1;object-fit:cover"/>
</figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"left","style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
<p class="has-text-align-left" style="font-style:normal;font-weight:500"><?php esc_html_e( 'Mark Thompson', 'flaron' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"typography":{"fontSize":"14px"}},"textColor":"secondary"} -->
<p class="has-text-align-left has-secondary-color has-text-color has-link-color" style="font-size:14px"><?php esc_html_e( 'Head of Strategy', 'flaron' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"12px"},"elements":{"link":{"color":{"text":"var:preset|color|medium-gray"}}}},"textColor":"medium-gray"} -->
<p class="has-medium-gray-color has-text-color has-link-color" style="font-size:12px"><?php esc_html_e( 'Expert in strategic planning and market trend analysis.', 'flaron' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-column"><!-- wp:group {"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-background-color has-background"><!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"12px"}}} -->
<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . "/patterns/images/avatars/user-2.png") ?>" alt="" style="border-radius:12px;aspect-ratio:1;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"left","style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
<p class="has-text-align-left" style="font-style:normal;font-weight:500"><?php esc_html_e( 'Matthew Baker', 'flaron' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"typography":{"fontSize":"14px"}},"textColor":"secondary"} -->
<p class="has-text-align-left has-secondary-color has-text-color has-link-color" style="font-size:14px"><?php esc_html_e( 'Software Developer', 'flaron' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"12px"},"elements":{"link":{"color":{"text":"var:preset|color|medium-gray"}}}},"textColor":"medium-gray"} -->
<p class="has-medium-gray-color has-text-color has-link-color" style="font-size:12px"><?php esc_html_e( 'Skilled in graphic design and visual storytelling.', 'flaron' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-column"><!-- wp:group {"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-background-color has-background"><!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"12px"}}} -->
<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . "/patterns/images/avatars/user-3.png") ?>" alt="" style="border-radius:12px;aspect-ratio:1;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"left","style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
<p class="has-text-align-left" style="font-style:normal;font-weight:500"><?php esc_html_e( 'Ryan Cooper', 'flaron' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"typography":{"fontSize":"14px"}},"textColor":"secondary"} -->
<p class="has-text-align-left has-secondary-color has-text-color has-link-color" style="font-size:14px"><?php esc_html_e( 'SEO & Marketing', 'flaron' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"12px"},"elements":{"link":{"color":{"text":"var:preset|color|medium-gray"}}}},"textColor":"medium-gray"} -->
<p class="has-medium-gray-color has-text-color has-link-color" style="font-size:12px"><?php esc_html_e( 'Focuses on innovative marketing campaigns and brand identities.', 'flaron' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-column"><!-- wp:group {"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-background-color has-background"><!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"12px"}}} -->
<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . "/patterns/images/avatars/user-4.png") ?>" alt="" style="border-radius:12px;aspect-ratio:1;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"left","style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
<p class="has-text-align-left" style="font-style:normal;font-weight:500"><?php esc_html_e( 'Nathan Reed', 'flaron' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"typography":{"fontSize":"14px"}},"textColor":"secondary"} -->
<p class="has-text-align-left has-secondary-color has-text-color has-link-color" style="font-size:14px"><?php esc_html_e( 'Creative Director', 'flaron' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"12px"},"elements":{"link":{"color":{"text":"var:preset|color|medium-gray"}}}},"textColor":"medium-gray"} -->
<p class="has-medium-gray-color has-text-color has-link-color" style="font-size:12px"><?php esc_html_e( 'Specializes in digital content creation and branding.', 'flaron' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->