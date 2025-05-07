<?php
/**
 * Block Styles
 *
 * @package flaron
 * @author Yahya Qara
 * @since 0.0.7
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Registers custom block styles.
if ( ! function_exists( 'flaron_block_styles' ) ) :

	function flaron_block_styles() {

		// Register block styles for core/code and core/preformatted.
		register_block_style(
			'core/code',
			array(
				'name'         => 'dark-code',
				'label'        => __( 'Dark', 'flaron' ),
				'inline_style' => '
					.is-style-dark-code {
						color: var(--wp--preset--color--light-gray);
						background-color: var(--wp--preset--color--dark-gray) !important;
					}
        		',
			)
		);

		register_block_style(
			'core/preformatted',
			array(
				'name'         => 'dark-preformatted',
				'label'        => __( 'Dark', 'flaron' ),
				'inline_style' => '
					.is-style-dark-preformatted {
						color: var(--wp--preset--color--light-gray);
						background-color: var(--wp--preset--color--dark-gray) !important;
					}
        		',
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

		// Register block styles for core/tag-cloud.
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
	}
endif;
add_action( 'init', 'flaron_block_styles' );
