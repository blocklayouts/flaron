<?php
/**
 * Title: Archive template
 * Slug: flaron/template-index
 * Template Types: archive, category, tag, author, date
 * Viewport width: 1400
 * Inserter: no
 */
?>

<!-- wp:template-part {"slug":"header","area":"header","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","style":{"spacing":{"blockGap":"0","margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="margin-top:0">
    <!-- wp:group {"align":"full","backgroundColor":"light-gray","layout":{"type":"constrained","justifyContent":"center"}} -->
    <div class="wp-block-group alignfull has-light-gray-background-color has-background"><!-- wp:spacer {"height":"50px"} -->
        <div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
        <!-- /wp:spacer -->

        <!-- wp:heading {"textAlign":"center","level":1,"textColor":"main","className":"wp-block-heading","fontFamily":"bricolage"} -->
        <h1 class="wp-block-heading has-text-align-center has-main-color has-text-color has-bricolage-font-family"><?php
            echo sprintf(
                /* Translators: Latest Articles & New */
                esc_html__( 'Latest Articles %1$s', 'flaron' ),
                '<span class="has-primary-color">New</span>'
            );
        ?></h1>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary"} -->
        <p class="has-text-align-center has-secondary-color has-text-color has-link-color"><?php esc_html_e( 'Discover expert tips, trends, and strategies to boost your online presence and stay ahead in the digital landscape.', 'flaron' ); ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:spacer {"height":"50px"} -->
        <div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
        <!-- /wp:spacer -->
    </div>
    <!-- /wp:group -->

	<!-- wp:pattern {"slug":"flaron/posts-blog-3-col"} /-->
</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","area":"footer","tagName":"footer"} /-->
