<?php
/**
 * Block Styles
 *
 * @package flaron
 * @author Yahya Qara
 * @since 0.0.2
 */

namespace flaron;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register block styles
 */
$dark_style = array(
    'background-color' => 'var(--wp--preset--color--dark-gray)',
    'color'            => 'var(--wp--preset--color--light-gray)',
);

// Register block styles for core/code and core/preformatted.
register_block_style(
    'core/code',
    array(
        'name'         => 'dark-code',
        'label'        => __( 'Dark', 'flaron' ),
        'inline_style' => flaron_generate_inline_style( $dark_style ),
    )
);

register_block_style(
    'core/preformatted',
    array(
        'name'         => 'dark-preformatted',
        'label'        => __( 'Dark', 'flaron' ),
        'inline_style' => flaron_generate_inline_style( $dark_style ),
    )
);

// Register block styles for core/button.
register_block_style(
    'core/button',
    array(
        'name'         => 'secondary-button',
        'label'        => __( 'Secondary', 'flaron' ),
        'inline_style' => '
            .is-style-secondary-button .wp-element-button {
                color: var(--wp--preset--color--primary);
                background-color: var(--wp--preset--color--light-gray);
            }
        ',
    )
);

/**
 * Generate inline style from an array of CSS properties.
 *
 * @param array $styles Array of CSS properties and values.
 * @return string Inline CSS style.
 */
function flaron_generate_inline_style( $styles ) {
    $inline_style = '';
    foreach ( $styles as $property => $value ) {
        $inline_style .= "$property: $value;";
    }
    return $inline_style;
}


// Register block styles for core/tag-cloud
register_block_style(
    'core/tag-cloud',
    array(
        'name'         => 'button',
        'label'        => __( 'Button', 'flaron' ),
        'inline_style' => '
            .wp-block-tag-cloud.is-style-button {
                display: flex;
                flex-wrap: wrap;
                gap: 0.65rem;
            }
            .wp-block-tag-cloud.is-style-button a {
                border-radius: var(--wp--custom--border-radius--full);
                padding: 0.65rem 1rem;
                text-decoration: none !important;
                background-color: #f1f5f9;
            }
        ',
    )
);