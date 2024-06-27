<?php
/**
 * Title: pricing two columns
 * Slug: flaron/pricing-two-columns
 * Categories: flaron/pricing
 * Viewport width: 1400
 */
?>

<!-- wp:group {"metadata":{"name":"Pricing"},"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull"><!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}}} -->
<div class="wp-block-column"><!-- wp:heading {"textAlign":"left","align":"wide","textColor":"main","className":"wp-block-heading"} -->
<h2 class="wp-block-heading alignwide has-text-align-left has-main-color has-text-color"><?php
    echo sprintf(
        /* Translators: Let's Craft Your Dream Website or App Together!*/
        esc_html__( 'Let\'s Craft Your %1$s or App Together!', 'flaron' ),
        '<span class="has-primary-color">Dream Website</span>'
    );
?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"color":{"text":"#6b7280"},"elements":{"link":{"color":{"text":"#6b7280"}}}}} -->
<p class="has-text-color has-link-color" style="color:#6b7280"><?php esc_html_e( 'Whether you\'re launching your first project or looking to refine an existing product, I\'ve got the perfect plan to fit your needs and budget. Let\'s create something amazing together!', 'flaron' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:columns {"verticalAlignment":"top","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-top"><!-- wp:column {"verticalAlignment":"top","layout":{"type":"constrained","contentSize":"350px"}} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"blockGap":"var:preset|spacing|medium"},"border":{"radius":"12px","width":"1px"}},"borderColor":"tertiary","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"center"}} -->
<div class="wp-block-group has-border-color has-tertiary-border-color" style="border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"blockGap":"var:preset|spacing|small"},"border":{"radius":"10px"}},"backgroundColor":"light-gray","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-light-gray-background-color has-background" style="border-radius:10px;padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"18px"}},"textColor":"primary"} -->
<h2 class="wp-block-heading has-text-align-center has-primary-color has-text-color" style="font-size:18px;font-style:normal;font-weight:500"><?php esc_html_e( 'Basic Design', 'flaron' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"40px","fontStyle":"normal","fontWeight":"700","lineHeight":"1"}}} -->
<p class="has-text-align-center" style="font-size:40px;font-style:normal;font-weight:700;line-height:1"><?php esc_html_e( '$499', 'flaron' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"0.6rem"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"20px","aspectRatio":"1","scale":"cover","sizeSlug":"large"} -->
<figure class="wp-block-image size-large is-resized"><img src="data:image/svg+xml,%3Csvg width='24' height='24' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M12 23C18.0751 23 23 18.0751 23 12C23 5.92487 18.0751 1 12 1C5.92487 1 1 5.92487 1 12C1 18.0751 5.92487 23 12 23Z' fill='%23DCFCE7'/%3E%3Cpath d='M7 12L10.5 15.5L17 9' stroke='%2316A34A' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round'/%3E%3C/svg%3E" alt="" style="aspect-ratio:1;object-fit:cover;width:20px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"align":"left","style":{"typography":{"fontSize":"16px"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary"} -->
<p class="has-text-align-left has-secondary-color has-text-color has-link-color" style="font-size:16px"><?php esc_html_e( 'Initial Consultation', 'flaron' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0.6rem"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"20px","aspectRatio":"1","scale":"cover","sizeSlug":"large"} -->
<figure class="wp-block-image size-large is-resized"><img src="data:image/svg+xml,%3Csvg width='24' height='24' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M12 23C18.0751 23 23 18.0751 23 12C23 5.92487 18.0751 1 12 1C5.92487 1 1 5.92487 1 12C1 18.0751 5.92487 23 12 23Z' fill='%23DCFCE7'/%3E%3Cpath d='M7 12L10.5 15.5L17 9' stroke='%2316A34A' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round'/%3E%3C/svg%3E" alt="" style="aspect-ratio:1;object-fit:cover;width:20px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"align":"left","style":{"typography":{"fontSize":"16px"},"color":{"text":"#6b7280"}}} -->
<p class="has-text-align-left has-text-color" style="color:#6b7280;font-size:16px"><?php esc_html_e( 'Wireframing', 'flaron' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0.6rem"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"20px","aspectRatio":"1","scale":"cover","sizeSlug":"large"} -->
<figure class="wp-block-image size-large is-resized"><img src="data:image/svg+xml,%3Csvg width='24' height='24' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M12 23C18.0751 23 23 18.0751 23 12C23 5.92487 18.0751 1 12 1C5.92487 1 1 5.92487 1 12C1 18.0751 5.92487 23 12 23Z' fill='%23DCFCE7'/%3E%3Cpath d='M7 12L10.5 15.5L17 9' stroke='%2316A34A' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round'/%3E%3C/svg%3E" alt="" style="aspect-ratio:1;object-fit:cover;width:20px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"align":"left","style":{"typography":{"fontSize":"16px"},"color":{"text":"#6b7280"}}} -->
<p class="has-text-align-left has-text-color" style="color:#6b7280;font-size:16px"><?php esc_html_e( 'Revisions', 'flaron' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0.6rem"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"20px","aspectRatio":"1","scale":"cover","sizeSlug":"large"} -->
<figure class="wp-block-image size-large is-resized"><img src="data:image/svg+xml,%3Csvg width='24' height='24' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M12 23C18.0751 23 23 18.0751 23 12C23 5.92487 18.0751 1 12 1C5.92487 1 1 5.92487 1 12C1 18.0751 5.92487 23 12 23Z' fill='%23DCFCE7'/%3E%3Cpath d='M7 12L10.5 15.5L17 9' stroke='%2316A34A' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round'/%3E%3C/svg%3E" alt="" style="aspect-ratio:1;object-fit:cover;width:20px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"align":"left","style":{"typography":{"fontSize":"16px"},"color":{"text":"#6b7280"}}} -->
<p class="has-text-align-left has-text-color" style="color:#6b7280;font-size:16px"><?php esc_html_e( 'Basic UI/UX Design', 'flaron' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0.6rem"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"20px","aspectRatio":"1","scale":"cover","sizeSlug":"large"} -->
<figure class="wp-block-image size-large is-resized"><img src="data:image/svg+xml,%3Csvg width='24' height='24' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M12 23C18.0751 23 23 18.0751 23 12C23 5.92487 18.0751 1 12 1C5.92487 1 1 5.92487 1 12C1 18.0751 5.92487 23 12 23Z' fill='%23DCFCE7'/%3E%3Cpath d='M7 12L10.5 15.5L17 9' stroke='%2316A34A' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round'/%3E%3C/svg%3E" alt="" style="aspect-ratio:1;object-fit:cover;width:20px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"align":"left","style":{"typography":{"fontSize":"16px"},"color":{"text":"#6b7280"}}} -->
<p class="has-text-align-left has-text-color" style="color:#6b7280;font-size:16px"><?php esc_html_e( 'Delivery within 1 week', 'flaron' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:buttons {"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-buttons"><!-- wp:button {"width":100,"className":"is-style-fill"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-fill"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Order Now', 'flaron' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","layout":{"type":"constrained","contentSize":"350px"}} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"blockGap":"var:preset|spacing|medium"},"border":{"radius":"12px"}},"backgroundColor":"primary","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"center"}} -->
<div class="wp-block-group has-primary-background-color has-background" style="border-radius:12px;padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)">

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"blockGap":"var:preset|spacing|small"},"border":{"radius":"10px"}},"backgroundColor":"dark-primary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-dark-primary-background-color has-background" style="border-radius:10px;padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"18px"}},"textColor":"base"} -->
<h2 class="wp-block-heading has-text-align-center has-base-color has-text-color" style="font-size:18px;font-style:normal;font-weight:500"><?php esc_html_e( 'Expert Design', 'flaron' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"40px","fontStyle":"normal","fontWeight":"700","lineHeight":"1"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} -->
<p class="has-text-align-center has-base-color has-text-color has-link-color" style="font-size:40px;font-style:normal;font-weight:700;line-height:1"><?php esc_html_e( '$1499', 'flaron' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"0.6rem"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"20px","aspectRatio":"1","scale":"cover","sizeSlug":"large"} -->
<figure class="wp-block-image size-large is-resized"><img src="data:image/svg+xml,%3Csvg width='24' height='24' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M12 23C18.0751 23 23 18.0751 23 12C23 5.92487 18.0751 1 12 1C5.92487 1 1 5.92487 1 12C1 18.0751 5.92487 23 12 23Z' fill='%23DCFCE7'/%3E%3Cpath d='M7 12L10.5 15.5L17 9' stroke='%2316A34A' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round'/%3E%3C/svg%3E" alt="" style="aspect-ratio:1;object-fit:cover;width:20px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"align":"left","style":{"typography":{"fontSize":"16px"},"elements":{"link":{"color":{"text":"var:preset|color|light-gray"}}}},"textColor":"light-gray"} -->
<p class="has-text-align-left has-light-gray-color has-text-color has-link-color" style="font-size:16px"><?php esc_html_e( 'Initial Consultation', 'flaron' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0.6rem"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"20px","aspectRatio":"1","scale":"cover","sizeSlug":"large"} -->
<figure class="wp-block-image size-large is-resized"><img src="data:image/svg+xml,%3Csvg width='24' height='24' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M12 23C18.0751 23 23 18.0751 23 12C23 5.92487 18.0751 1 12 1C5.92487 1 1 5.92487 1 12C1 18.0751 5.92487 23 12 23Z' fill='%23DCFCE7'/%3E%3Cpath d='M7 12L10.5 15.5L17 9' stroke='%2316A34A' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round'/%3E%3C/svg%3E" alt="" style="aspect-ratio:1;object-fit:cover;width:20px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"align":"left","style":{"typography":{"fontSize":"16px"},"elements":{"link":{"color":{"text":"var:preset|color|light-gray"}}}},"textColor":"light-gray"} -->
<p class="has-text-align-left has-light-gray-color has-text-color has-link-color" style="font-size:16px"><?php esc_html_e( 'Wireframing', 'flaron' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0.6rem"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"20px","aspectRatio":"1","scale":"cover","sizeSlug":"large"} -->
<figure class="wp-block-image size-large is-resized"><img src="data:image/svg+xml,%3Csvg width='24' height='24' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M12 23C18.0751 23 23 18.0751 23 12C23 5.92487 18.0751 1 12 1C5.92487 1 1 5.92487 1 12C1 18.0751 5.92487 23 12 23Z' fill='%23DCFCE7'/%3E%3Cpath d='M7 12L10.5 15.5L17 9' stroke='%2316A34A' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round'/%3E%3C/svg%3E" alt="" style="aspect-ratio:1;object-fit:cover;width:20px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"align":"left","style":{"typography":{"fontSize":"16px"},"elements":{"link":{"color":{"text":"var:preset|color|light-gray"}}}},"textColor":"light-gray"} -->
<p class="has-text-align-left has-light-gray-color has-text-color has-link-color" style="font-size:16px"><?php esc_html_e( 'Prototyping', 'flaron' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0.6rem"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"20px","aspectRatio":"1","scale":"cover","sizeSlug":"large"} -->
<figure class="wp-block-image size-large is-resized"><img src="data:image/svg+xml,%3Csvg width='24' height='24' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M12 23C18.0751 23 23 18.0751 23 12C23 5.92487 18.0751 1 12 1C5.92487 1 1 5.92487 1 12C1 18.0751 5.92487 23 12 23Z' fill='%23DCFCE7'/%3E%3Cpath d='M7 12L10.5 15.5L17 9' stroke='%2316A34A' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round'/%3E%3C/svg%3E" alt="" style="aspect-ratio:1;object-fit:cover;width:20px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"align":"left","style":{"typography":{"fontSize":"16px"},"elements":{"link":{"color":{"text":"var:preset|color|light-gray"}}}},"textColor":"light-gray"} -->
<p class="has-text-align-left has-light-gray-color has-text-color has-link-color" style="font-size:16px"><?php esc_html_e( 'Unlimited Revisions', 'flaron' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0.6rem"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"20px","aspectRatio":"1","scale":"cover","sizeSlug":"large"} -->
<figure class="wp-block-image size-large is-resized"><img src="data:image/svg+xml,%3Csvg width='24' height='24' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M12 23C18.0751 23 23 18.0751 23 12C23 5.92487 18.0751 1 12 1C5.92487 1 1 5.92487 1 12C1 18.0751 5.92487 23 12 23Z' fill='%23DCFCE7'/%3E%3Cpath d='M7 12L10.5 15.5L17 9' stroke='%2316A34A' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round'/%3E%3C/svg%3E" alt="" style="aspect-ratio:1;object-fit:cover;width:20px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"align":"left","style":{"typography":{"fontSize":"16px"},"elements":{"link":{"color":{"text":"var:preset|color|light-gray"}}}},"textColor":"light-gray"} -->
<p class="has-text-align-left has-light-gray-color has-text-color has-link-color" style="font-size:16px"><?php esc_html_e( 'Advanced UI/UX Design', 'flaron' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0.6rem"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"20px","aspectRatio":"1","scale":"cover","sizeSlug":"large"} -->
<figure class="wp-block-image size-large is-resized"><img src="data:image/svg+xml,%3Csvg width='24' height='24' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M12 23C18.0751 23 23 18.0751 23 12C23 5.92487 18.0751 1 12 1C5.92487 1 1 5.92487 1 12C1 18.0751 5.92487 23 12 23Z' fill='%23DCFCE7'/%3E%3Cpath d='M7 12L10.5 15.5L17 9' stroke='%2316A34A' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round'/%3E%3C/svg%3E" alt="" style="aspect-ratio:1;object-fit:cover;width:20px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"align":"left","style":{"typography":{"fontSize":"16px"},"elements":{"link":{"color":{"text":"var:preset|color|light-gray"}}}},"textColor":"light-gray"} -->
<p class="has-text-align-left has-light-gray-color has-text-color has-link-color" style="font-size:16px"><?php esc_html_e( 'User Research', 'flaron' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0.6rem"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"20px","aspectRatio":"1","scale":"cover","sizeSlug":"large"} -->
<figure class="wp-block-image size-large is-resized"><img src="data:image/svg+xml,%3Csvg width='24' height='24' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M12 23C18.0751 23 23 18.0751 23 12C23 5.92487 18.0751 1 12 1C5.92487 1 1 5.92487 1 12C1 18.0751 5.92487 23 12 23Z' fill='%23DCFCE7'/%3E%3Cpath d='M7 12L10.5 15.5L17 9' stroke='%2316A34A' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round'/%3E%3C/svg%3E" alt="" style="aspect-ratio:1;object-fit:cover;width:20px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"align":"left","style":{"typography":{"fontSize":"16px"},"elements":{"link":{"color":{"text":"var:preset|color|light-gray"}}}},"textColor":"light-gray"} -->
<p class="has-text-align-left has-light-gray-color has-text-color has-link-color" style="font-size:16px"><?php esc_html_e( 'Usability Testing', 'flaron' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0.6rem"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"20px","aspectRatio":"1","scale":"cover","sizeSlug":"large"} -->
<figure class="wp-block-image size-large is-resized"><img src="data:image/svg+xml,%3Csvg width='24' height='24' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M12 23C18.0751 23 23 18.0751 23 12C23 5.92487 18.0751 1 12 1C5.92487 1 1 5.92487 1 12C1 18.0751 5.92487 23 12 23Z' fill='%23DCFCE7'/%3E%3Cpath d='M7 12L10.5 15.5L17 9' stroke='%2316A34A' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round'/%3E%3C/svg%3E" alt="" style="aspect-ratio:1;object-fit:cover;width:20px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"align":"left","style":{"typography":{"fontSize":"16px"},"elements":{"link":{"color":{"text":"var:preset|color|light-gray"}}}},"textColor":"light-gray"} -->
<p class="has-text-align-left has-light-gray-color has-text-color has-link-color" style="font-size:16px"><?php esc_html_e( 'Delivery within 2 weeks', 'flaron' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:buttons {"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"base","textColor":"primary","width":100,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"className":"is-style-fill"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-fill"><a class="wp-block-button__link has-primary-color has-base-background-color has-text-color has-background has-link-color wp-element-button"><?php esc_html_e( 'Order Now', 'flaron' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->