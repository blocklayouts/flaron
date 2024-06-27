<?php
/**
 * Title: Archive template
 * Slug: flaron/template-archive
 * Template Types: archive, category, tag, author, date
 * Viewport width: 1400
 * Inserter: no
 */
?>

<!-- wp:template-part {"slug":"header","area":"header","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","style":{"spacing":{"blockGap":"0","margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="margin-top:0">
	<!-- wp:group {"align":"full","backgroundColor":"light-gray","layout":{"type":"constrained","justifyContent":"center"}} -->
	<div class="wp-block-group alignfull has-light-gray-background-color has-background"><!-- wp:spacer {"height":"70px"} -->
		<div style="height:70px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->

		<!-- wp:query-title {"type":"archive","textAlign":"center","style":{"spacing":{"padding":{"top":"var:preset|spacing|50"}}}} /-->

		<!-- wp:spacer {"height":"70px"} -->
		<div style="height:70px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"metadata":{"name":"Posts"},"align":"full","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull"><!-- wp:spacer {"height":"50px"} -->
		<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->

		<!-- wp:query {"queryId":0,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"align":"wide"} -->
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
		<p class="has-text-align-center has-medium-gray-color has-text-color has-link-color">No posts found!</p>
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
		<!-- /wp:spacer -->
	</div>
	<!-- /wp:group -->
</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","area":"footer","tagName":"footer"} /-->
