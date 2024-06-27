<?php
/**
 * Title: Latest posts, 4 columns
 * Slug: flaron/posts-4-col
 * Categories: query, posts
 * Block Types: core/query
 */
?>

<!-- wp:group {"metadata":{"name":"Posts"},"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull"><!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|large"}}},"textColor":"main","className":"wp-block-heading","fontFamily":"bricolage"} -->
<h2 class="wp-block-heading has-text-align-center has-main-color has-text-color has-bricolage-font-family" style="margin-bottom:var(--wp--preset--spacing--large)"><?php
    echo sprintf(
        /* Translators: Latest Insights from Our Blog */
        esc_html__( 'Latest Insights from  %1$s', 'flaron' ),
        '<span class="has-primary-color">Our Blog</span>'
    );
?></h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId":0,"query":{"perPage":"4","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide"} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"grid","columnCount":4}} -->
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
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->