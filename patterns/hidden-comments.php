<?php
/**
 * Title: Comments
 * Slug: flaron/hidden-comments
 * Inserter: no
 */
?>

<!-- wp:comments -->
<div class="wp-block-comments"><!-- wp:comments-title {"level":3,"fontSize":"3x-large"} /-->

<!-- wp:comment-template -->
<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|small","left":"var:preset|spacing|small"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"40px"} -->
<div class="wp-block-column" style="flex-basis:40px"><!-- wp:avatar {"size":40,"style":{"border":{"radius":"20px"}}} /--></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}}} -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:comment-author-name {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} /-->

<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:comment-date {"style":{"elements":{"link":{"color":{"text":"var:preset|color|medium-gray"}}}},"textColor":"medium-gray","fontSize":"small"} /-->

<!-- wp:comment-edit-link {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"},":hover":{"color":{"text":"var:preset|color|primary-700"}}}}},"fontSize":"small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}},"border":{"radius":"12px"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"backgroundColor":"light-gray","textColor":"secondary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-secondary-color has-light-gray-background-color has-text-color has-background has-link-color" style="border-radius:12px;padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--small)"><!-- wp:comment-content {"style":{"elements":{"link":{"color":{"text":"var:preset|color|dark-gray"}}}},"textColor":"dark-gray"} /--></div>
<!-- /wp:group -->

<!-- wp:comment-reply-link {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"fontSize":"small"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:comment-template -->

<!-- wp:comments-pagination {"paginationArrow":"arrow","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary-600"}}}},"textColor":"secondary-600","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:comments-pagination-previous /-->

<!-- wp:comments-pagination-numbers {"style":{"typography":{"letterSpacing":"5px"}}} /-->

<!-- wp:comments-pagination-next /-->
<!-- /wp:comments-pagination -->

<!-- wp:post-comments-form /--></div>
<!-- /wp:comments -->