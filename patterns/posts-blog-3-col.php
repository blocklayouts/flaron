<?php
/**
 * Title: Blog posts, 3 columns
 * Slug: flaron/posts-blog-3-col
 * Categories: query, posts
 * Block Types: core/query
 */
?>

<!-- wp:group {"metadata":{"name":"Posts"},"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull"><!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:query {"queryId":0,"query":{"perPage":"12","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide"} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:post-featured-image {"style":{"border":{"radius":"12px"}}} /-->

<!-- wp:post-date {"style":{"elements":{"link":{"color":{"text":"var:preset|color|medium-gray"}}}},"textColor":"medium-gray","fontSize":"small"} /-->

<!-- wp:post-title {"level":3,"isLink":true} /-->

<!-- wp:post-excerpt {"excerptLength":15,"style":{"elements":{"link":{"color":{"text":"var:preset|color|medium-gray"}}}},"textColor":"medium-gray"} /-->

<!-- wp:read-more {"content":"Read More →\u003cbr\u003e","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"align":"center","placeholder":"Add text or blocks that will display when a query returns no results.","style":{"elements":{"link":{"color":{"text":"var:preset|color|medium-gray"}}}},"textColor":"medium-gray"} -->
<p class="has-text-align-center has-medium-gray-color has-text-color has-link-color"><?php esc_html_e( 'No posts found!', 'flaron' ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--x-large);margin-bottom:var(--wp--preset--spacing--x-large)"><!-- wp:query-pagination {"layout":{"type":"flex","verticalAlignment":"stretch"}} -->
<!-- wp:query-pagination-previous {"label":"← Previous"} /-->

<!-- wp:query-pagination-numbers {"midSize":1} /-->

<!-- wp:query-pagination-next {"label":"Next →"} /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:group --></div>
<!-- /wp:query -->

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->