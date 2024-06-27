<?php
/**
 * Title: Centered FAQs
 * Slug: flaron/text-centered-faq
 * Categories: flaron/faq
 * Keywords: faq, about, frequently asked
 * Viewport width: 1400
 */
?>

<!-- wp:group {"metadata":{"name":"FAQs"},"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull"><!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"textAlign":"center","align":"wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|large"}}},"textColor":"main","className":"wp-block-heading"} -->
<h2 class="wp-block-heading alignwide has-text-align-center has-main-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--large)"><?php
    echo sprintf(
        /* Translators: Frequently Asked Questions */
        esc_html__( 'Frequently %1$s', 'flaron' ),
        '<span class="has-primary-color">Asked Questions</span>'
    );
?></h2>
<!-- /wp:heading -->

<!-- wp:group {"align":"wide","layout":{"type":"constrained","contentSize":"700px"}} -->
<div class="wp-block-group alignwide"><!-- wp:details {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"blockGap":"var:preset|spacing|x-small","padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}},"border":{"width":"1px"}},"borderColor":"tertiary","backgroundColor":"light-gray","fontSize":"large"} -->
<details class="wp-block-details has-border-color has-tertiary-border-color has-light-gray-background-color has-background has-large-font-size" style="border-width:1px;padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small);font-style:normal;font-weight:500"><summary><?php esc_html_e( 'What services do you offer?', 'flaron' ); ?></summary><!-- wp:paragraph {"placeholder":"Type / to add a hidden block","style":{"typography":{"fontStyle":"normal","fontWeight":"400"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"secondary","fontSize":"medium"} -->
<p class="has-secondary-color has-text-color has-link-color has-medium-font-size" style="font-style:normal;font-weight:400"><?php
    echo sprintf(
        /* Translators: I offer a range of UI/UX design services including initial consultations, wireframing, prototyping, user research, usability testing, and responsive design. Check out my Services page for more details. */
        esc_html__( 'I offer a range of UI/UX design services including initial consultations, wireframing, prototyping, user research, usability testing, and responsive design. Check out my %1$s page for more details.', 'flaron' ),
        '<a href="#">Services</a>'
    );
?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"blockGap":"var:preset|spacing|x-small","padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}},"border":{"width":"1px"}},"borderColor":"tertiary","backgroundColor":"light-gray","fontSize":"large"} -->
<details class="wp-block-details has-border-color has-tertiary-border-color has-light-gray-background-color has-background has-large-font-size" style="border-width:1px;padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small);font-style:normal;font-weight:500"><summary><?php esc_html_e( 'How much do your design services cost?', 'flaron' ); ?></summary><!-- wp:paragraph {"placeholder":"Type / to add a hidden block","style":{"typography":{"fontStyle":"normal","fontWeight":"400"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"secondary","fontSize":"medium"} -->
<p class="has-secondary-color has-text-color has-link-color has-medium-font-size" style="font-style:normal;font-weight:400"><?php
    echo sprintf(
        /* Translators: My pricing varies based on the scope and complexity of the project. You can find detailed information on my Pricing page. For custom projects, feel free to Contact Me */
        esc_html__( 'My pricing varies based on the scope and complexity of the project. You can find detailed information on my Pricing page. For custom projects, feel free to  %1$s for a personalized quote.', 'flaron' ),
        '<a href="#">Contact Me</a>'
    );
?> </p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"blockGap":"var:preset|spacing|x-small","padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}},"border":{"width":"1px"}},"borderColor":"tertiary","backgroundColor":"light-gray","fontSize":"large"} -->
<details class="wp-block-details has-border-color has-tertiary-border-color has-light-gray-background-color has-background has-large-font-size" style="border-width:1px;padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small);font-style:normal;font-weight:500"><summary><?php esc_html_e( 'How long does a project take?', 'flaron' ); ?></summary><!-- wp:paragraph {"placeholder":"Type / to add a hidden block","style":{"typography":{"fontStyle":"normal","fontWeight":"400"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"secondary","fontSize":"medium"} -->
<p class="has-secondary-color has-text-color has-link-color has-medium-font-size" style="font-style:normal;font-weight:400"><?php esc_html_e( 'The timeline depends on the complexity of the project and the specific requirements. Generally, a basic project can take about a week, while more comprehensive projects can take up to a month or more. I’ll provide a more accurate timeline during our initial consultation.', 'flaron' ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"blockGap":"var:preset|spacing|x-small","padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}},"border":{"width":"1px"}},"borderColor":"tertiary","backgroundColor":"light-gray","fontSize":"large"} -->
<details class="wp-block-details has-border-color has-tertiary-border-color has-light-gray-background-color has-background has-large-font-size" style="border-width:1px;padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small);font-style:normal;font-weight:500"><summary><?php esc_html_e( 'Can you work on a project with a tight deadline?', 'flaron' ); ?></summary><!-- wp:paragraph {"placeholder":"Type / to add a hidden block","style":{"typography":{"fontStyle":"normal","fontWeight":"400"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"secondary","fontSize":"medium"} -->
<p class="has-secondary-color has-text-color has-link-color has-medium-font-size" style="font-style:normal;font-weight:400"><?php esc_html_e( 'I understand that sometimes projects come with tight deadlines. I\'m happy to discuss your timeline and see if we can make it work. Please reach out to me as soon as possible so we can plan accordingly.', 'flaron' ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"blockGap":"var:preset|spacing|x-small","padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}},"border":{"width":"1px"}},"borderColor":"tertiary","backgroundColor":"light-gray","fontSize":"large"} -->
<details class="wp-block-details has-border-color has-tertiary-border-color has-light-gray-background-color has-background has-large-font-size" style="border-width:1px;padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small);font-style:normal;font-weight:500"><summary><?php esc_html_e( 'How can I get started with a project?', 'flaron' ); ?></summary><!-- wp:paragraph {"placeholder":"Type / to add a hidden block","style":{"typography":{"fontStyle":"normal","fontWeight":"400"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"secondary","fontSize":"medium"} -->
<p class="has-secondary-color has-text-color has-link-color has-medium-font-size" style="font-style:normal;font-weight:400"><?php
    echo sprintf(
        /* Translators: Getting started is easy! Just reach out to me via my Contact  */
        esc_html__( 'Getting started is easy! Just reach out to me via my  %1$s page, and we can set up an initial consultation to discuss your project goals and requirements.', 'flaron' ),
        '<a href="#">Contact</a>'
    );
?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->
