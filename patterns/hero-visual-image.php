<?php
/**
 * Title: Hero with visual image
 * Slug: flaron/hero-visual-image
 * Categories: flaron/hero, flaron/cta
 * Viewport width: 1400
 */
?>

<!-- wp:group {"metadata":{"name":"Hero"},"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull"><!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|small","left":"var:preset|spacing|medium"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"60%","style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained","contentSize":"600px","justifyContent":"left"}} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} -->
<p class="has-primary-color has-text-color has-link-color"><?php esc_html_e( 'Hey there! 👋', 'flaron' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"style":{"typography":{"lineHeight":"1.2","fontStyle":"normal","fontWeight":"700","fontSize":"3rem"}}} -->
<h1 class="wp-block-heading" style="font-size:3rem;font-style:normal;font-weight:700;line-height:1.2"><?php
    echo sprintf(
        /* Translators: I'm John Doe, and I craft visual stories with a creative touch.*/
        esc_html__( 'I\'m %1$s, and I craft visual stories with a creative touch.', 'flaron' ),
        '<span class="has-primary-color">John Doe</span>'
    );
?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary"} -->
<p class="has-secondary-color has-text-color has-link-color"><?php esc_html_e( 'I\'m a creative thinker at work, but outside, I\'m just a regular guy.', 'flaron' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"spacing":{"padding":{"left":"var:preset|spacing|large","right":"var:preset|spacing|large"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" style="padding-right:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)"><?php esc_html_e( 'Hire me', 'flaron' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%"><!-- wp:image {"id":18,"aspectRatio":"1","scale":"contain","sizeSlug":"full","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-full"><img src="<?php echo esc_url( get_template_directory_uri() . "/patterns/images/hero-portfolio.png") ?>" alt="" class="wp-image-18" style="aspect-ratio:1;object-fit:contain"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->