<?php
/**
 * Title: Centered Hero
 * Slug: flaron/hero-centered
 * Categories: flaron/hero, flaron/cta
 * Viewport width: 1400
 */
?>

<!-- wp:group {"metadata":{"name":"Hero"},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"constrained","contentSize":"800px"}} -->
<div class="wp-block-group alignwide"><!-- wp:image {"id":260,"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","style":{"border":{"radius":"999px"}}} -->
<figure class="wp-block-image aligncenter size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . "/patterns/images/avatars/user-1.png") ?>" alt="" class="wp-image-260" style="border-radius:999px;aspect-ratio:1;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"lineHeight":"1.2","fontStyle":"normal","fontWeight":"700","fontSize":"3rem"}}} -->
<h1 class="wp-block-heading has-text-align-center" style="font-size:3rem;font-style:normal;font-weight:700;line-height:1.2"><?php
    echo sprintf(
        /* Translators: I'm John Doe, and I craft visual stories with a creative touch. */
        esc_html__( 'I\'m %1$s , and I craft visual stories with a creative touch.', 'flaron' ),
        '<span class="has-primary-color">John Doe</span>'
    );
?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary"} -->
<p class="has-text-align-center has-secondary-color has-text-color has-link-color"><?php esc_html_e( 'I\'m a UI/UX designer with a love for simplicity and a knack for solving complex design challenges. Whether it\'s creating intuitive interfaces or designing seamless user journeys, I thrive on bringing ideas to life through clean, user-centric design.', 'flaron' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"spacing":{"padding":{"left":"var:preset|spacing|large","right":"var:preset|spacing|large"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" style="padding-right:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)"><?php esc_html_e( 'Get In Touch', 'flaron' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"backgroundColor":"transparent","textColor":"primary","style":{"spacing":{"padding":{"left":"var:preset|spacing|large","right":"var:preset|spacing|large"}},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"border":{"width":"2px"}},"borderColor":"primary","className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-primary-color has-transparent-background-color has-text-color has-background has-link-color has-border-color has-primary-border-color wp-element-button" style="border-width:2px;padding-right:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)"><?php esc_html_e( 'Download CV', 'flaron' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->