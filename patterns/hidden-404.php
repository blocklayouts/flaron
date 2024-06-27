<?php
/**
 * Title: 404 Page
 * Slug: flaron/hidden-404
 * Inserter: no
 */
?>

<!-- wp:template-part {"slug":"header","area":"header","tagName":"header"} /-->

<!-- wp:group {"align":"full","layout":{"type":"constrained","contentSize":"700px"}} -->
<div class="wp-block-group alignfull"><!-- wp:spacer {"height":"70px"} -->
<div style="height:70px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"constrained","contentSize":"500px"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"9rem","fontStyle":"normal","fontWeight":"900","lineHeight":"0.8"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} -->
<p class="has-text-align-center has-primary-color has-text-color has-link-color" style="font-size:9rem;font-style:normal;font-weight:900;line-height:0.8"><?php esc_html_e( '404', 'flaron' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"32px","fontStyle":"normal","fontWeight":"700"}}} -->
<h2 class="wp-block-heading has-text-align-center" style="font-size:32px;font-style:normal;font-weight:700"><?php esc_html_e( 'Whoops! Page Not Found.', 'flaron' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary"} -->
<p class="has-text-align-center has-secondary-color has-text-color has-link-color"><?php esc_html_e( 'Sorry, the page you\'re looking for doesn\'t exist. Try searching for something else.', 'flaron' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search...","width":350,"widthUnit":"px","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true,"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"border":{"width":"1px"}},"borderColor":"tertiary","backgroundColor":"transparent","textColor":"secondary"} /--></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"70px"} -->
<div style="height:70px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","area":"footer","tagName":"footer"} /-->
