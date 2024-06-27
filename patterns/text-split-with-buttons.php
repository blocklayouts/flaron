<?php
/**
 * Title: Text split with CTA buttons
 * Slug: flaron/text-split-with-buttons
 * Categories: text
 * Keywords: text, about, banner
 * Viewport width: 1400
 */
?>

<!-- wp:group {"metadata":{},"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull"><!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|medium","left":"var:preset|spacing|medium"},"margin":{"bottom":"var:preset|spacing|large"}}}} -->
<div class="wp-block-columns alignwide" style="margin-bottom:var(--wp--preset--spacing--large)"><!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}}} -->
<div class="wp-block-column"><!-- wp:heading {"textAlign":"left","textColor":"main","className":"wp-block-heading","fontFamily":"bricolage"} -->
<h2 class="wp-block-heading has-text-align-left has-main-color has-text-color has-bricolage-font-family"><?php
    echo sprintf(
        /* Translators: Elevating Your Business with Expert Digital Marketing*/
        esc_html__( 'Elevating Your Business with Expert %1$s', 'flaron' ),
        '<span class="has-primary-color">Digital Marketing</span>'
    );
?></h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}}} -->
<div class="wp-block-column"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"spacing":{"padding":{"left":"var:preset|spacing|large","right":"var:preset|spacing|large"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" style="padding-right:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)"><?php esc_html_e( 'Get Started', 'flaron' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"style":{"spacing":{"padding":{"left":"var:preset|spacing|large","right":"var:preset|spacing|large"}}},"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" style="padding-right:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)"><?php esc_html_e( 'Try For Free', 'flaron' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}}} -->
<div class="wp-block-column"><!-- wp:paragraph {"fontSize":"large"} -->
<p class="has-large-font-size"><?php esc_html_e( 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, quidem quae rem laboriosam sint nesciunt saepe repellendus omnis repellat est neque nobis perspiciatis voluptatum voluptates dolorum sit voluptatibus quod aliquid reprehenderit laudantium labore? Accusantium, magnam rerum veniam odit, vel modi ea natus consequatur aspernatur tempora, labore molestias? Blanditiis nemo neque adipisci! Architecto molestias voluptates fuga, debitis ipsam iste in nisi quod natus et, quasi accusamus obcaecati incidunt. Nulla, possimus sunt?', 'flaron' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|medium-gray"}}}},"textColor":"medium-gray","fontSize":"large"} -->
<p class="has-medium-gray-color has-text-color has-link-color has-large-font-size"><?php esc_html_e( 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste quae deserunt quam dolorem cum aliquid saepe unde nisi reiciendis repudiandae.', 'flaron' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}}} -->
<div class="wp-block-column"><!-- wp:paragraph {"fontSize":"large"} -->
<p class="has-large-font-size"><?php esc_html_e( 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error eligendi ex saepe dignissimos facilis tenetur perferendis architecto numquam nemo obcaecati nostrum ipsa laborum fugit fuga rerum beatae illum, magnam assumenda ad quis, eius, quasi aperiam consequuntur amet. Hic voluptates iste omnis expedita assumenda maiores architecto quod dolores perspiciatis impedit. Iste amet saepe ut quia culpa voluptatum, laborum quisquam minima accusamus aliquid odio eos neque eveniet ducimus, mollitia modi? Consequatur vero voluptatibus nisi, facilis alias quod nulla praesentium excepturi illum quia exercitationem, libero itaque? Hic nostrum perspiciatis ex quasi eius omnis architecto repudiandae totam molestiae asperiores tempora eveniet itaque, facilis eligendi.', 'flaron' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"large"} -->
<p class="has-large-font-size"><?php esc_html_e( 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste quae deserunt quam dolorem cum aliquid saepe unde nisi reiciendis repudiandae.', 'flaron' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->