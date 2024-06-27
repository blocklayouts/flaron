<?php
/**
 * Title: Text with alternating image on the left - dark
 * Slug: flaron/text-alternating-image-dark
 * Categories: text
 * Keywords: text, about, banner
 * Viewport width: 1400
 */

 $co_workers_img_url =  get_template_directory_uri() . "/patterns/images/co-workers.png";
?>


<!-- wp:group {"metadata":{"name":"About"},"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull"><!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|medium","left":"var:preset|spacing|large"},"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}},"border":{"radius":"12px"}},"backgroundColor":"dark-gray"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center has-dark-gray-background-color has-background" style="border-radius:12px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"1.1rem"}},"layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:cover {"url":"<?php echo esc_url($co_workers_img_url);?>","id":181,"dimRatio":0,"isDark":false,"style":{"border":{"radius":"10px"}}} -->
<div class="wp-block-cover is-light" style="border-radius:10px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-181" alt="" src="<?php echo esc_url($co_workers_img_url);?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained","contentSize":"","justifyContent":"left"}} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"textAlign":"left","align":"wide","textColor":"base","className":"wp-block-heading"} -->
<h2 class="wp-block-heading alignwide has-text-align-left has-base-color has-text-color"><?php
    echo sprintf(
        /* Translators: A Little About Me */
        esc_html__( 'A Little  %1$s', 'flaron' ),
        '<span class="has-primary-color">About Me</span>'
    );
?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-gray"}}}},"textColor":"light-gray"} -->
<p class="has-light-gray-color has-text-color has-link-color"><?php esc_html_e( 'I\'m John Doe, a UI/UX designer with a passion for crafting delightful and intuitive user experiences. My journey into the world of design began with a simple love for creativity and technology, and it has grown into a fulfilling career where I get to solve problems and create beautiful digital products every day.', 'flaron' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconColor":"light-gray","iconColorValue":"#f9fafb","size":"has-small-icon-size","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|x-small","left":"var:preset|spacing|x-small"}}},"className":"is-style-logos-only"} -->
<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"behance"} /-->

<!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"dribbble"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->
