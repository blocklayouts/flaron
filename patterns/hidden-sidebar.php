<?php
/**
 * Title: Sidebar
 * Slug: flaron/hidden-sidebar
 * Inserter: no
 */
?>
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group">



<!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search...","width":350,"widthUnit":"px","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"border":{"width":"1px"}},"borderColor":"tertiary","backgroundColor":"transparent","textColor":"secondary"} /-->

<!-- wp:group {"metadata":{"name":"Categories"},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"x-large"} -->
<p class="has-x-large-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e( 'Categories', 'flaron' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:categories /--></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Recent Posts"},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"x-large"} -->
<p class="has-x-large-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e( 'Recent Posts', 'flaron' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"metadata":{"name":"Posts"},"align":"full","style":{"spacing":{"padding":{"left":"var:preset|spacing|small"}},"border":{"left":{"color":"var:preset|color|primary","width":"3px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="border-left-color:var(--wp--preset--color--primary);border-left-width:3px;padding-left:var(--wp--preset--spacing--small)"><!-- wp:query {"queryId":0,"query":{"perPage":"3","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"default","columnCount":2}} -->
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:post-date {"style":{"elements":{"link":{"color":{"text":"var:preset|color|medium-gray"}}}},"textColor":"medium-gray","fontSize":"small"} /-->

<!-- wp:post-title {"isLink":true,"fontSize":"medium"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"align":"left","placeholder":"Add text or blocks that will display when a query returns no results.","style":{"elements":{"link":{"color":{"text":"var:preset|color|medium-gray"}}},"spacing":{"margin":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small"}}},"textColor":"medium-gray"} -->
<p class="has-text-align-left has-medium-gray-color has-text-color has-link-color" style="margin-top:var(--wp--preset--spacing--small);margin-bottom:var(--wp--preset--spacing--small)"><?php esc_html_e( 'No posts found!', 'flaron' ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Tags"},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"x-large"} -->
<p class="has-x-large-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e( 'Popular Tags', 'flaron' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:tag-cloud {"smallestFontSize":"14px","largestFontSize":"16px","className":"is-style-button"} /--></div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->