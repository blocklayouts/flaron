<?php
/**
 * Title: Hero with large image
 * Slug: flaron/hero-large-image
 * Categories: flaron/hero, flaron/cta
 * Viewport width: 1400
 */
?>

<!-- wp:group {"metadata":{"name":"Hero"},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"layout":{"type":"constrained","contentSize":"800px"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"lineHeight":"1.2","fontStyle":"normal","fontWeight":"700","fontSize":"3rem","textTransform":"uppercase"}}} -->
<h1 class="wp-block-heading has-text-align-center" style="font-size:3rem;font-style:normal;font-weight:700;line-height:1.2;text-transform:uppercase"><?php
    echo sprintf(
        /* Translators: I'm John Doe, and I craft visual stories with a creative touch. */
        esc_html__( 'I\'m %1$s , and I craft visual stories with a creative touch.', 'flaron' ),
        '<span class="has-primary-color">John Doe</span>'
    );
?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary"} -->
<p class="has-text-align-center has-secondary-color has-text-color has-link-color"><?php esc_html_e( 'I\'m a UI/UX designer with a love for simplicity and a knack for solving complex design challenges. Whether it\'s creating intuitive interfaces or designing seamless user journeys, I thrive on bringing ideas to life through clean, user-centric design.', 'flaron' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"id":272,"sizeSlug":"full","linkDestination":"none","align":"wide","style":{"border":{"radius":"20px"}}} -->
<figure class="wp-block-image alignwide size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() . "/patterns/images/hero-portfolio-large.png") ?>" alt="" class="wp-image-272" style="border-radius:20px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->