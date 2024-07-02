<?php
/**
 * Flaron functions and definitions
 *
 * @package flaron
 * @author  Yahya Qara
 * @link https://blocklayouts.com/product/flaron/
 * @since 0.0.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'flaron_setup' ) ) {

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since 0.0.4
	 * @return void
	 */
	function flaron_setup() {
		add_editor_style( 'style.css' );
		remove_theme_support( 'core-block-patterns' );
	}
}
add_action( 'after_setup_theme', 'flaron_setup' );

/**
 * Enqueue styles.
 */
function flaron_enqueue_style_sheet() {

	$version = wp_get_theme( 'flaron' )->get( 'Version' );
	wp_enqueue_style( 'flaron-custom-style', get_template_directory_uri() . '/assets/css/style.css', array(), $version );
}
add_action( 'wp_enqueue_scripts', 'flaron_enqueue_style_sheet' );

/**
 * Add editor styles
 */
function flaron_editor_enqueue_style_sheet() {
	wp_enqueue_style( 'flaron-editor-style', get_template_directory_uri() . '/assets/css/style.css', array(), wp_get_theme()->get( 'Version' ) );
}
add_action( 'enqueue_block_editor_assets', 'flaron_editor_enqueue_style_sheet' );


if ( ! function_exists( 'flaron_pattern_categories' ) ) :
	/**
	 * Register pattern categories
	 *
	 * @since 0.0.4
	 * @return void
	 */
	function flaron_pattern_categories() {
		// Register block pattern categories.
		$pattern_categories = array(
			array(
				'slug'        => 'flaron/page',
				'label'       => __( 'Pages', 'flaron' ),
				'description' => __( 'A collection of full page layouts.', 'flaron' ),
			),
			array(
				'slug'        => 'flaron/featured',
				'label'       => __( 'Featured', 'flaron' ),
				'description' => __( 'A collection of featured patterns.', 'flaron' ),
			),
			array(
				'slug'        => 'flaron/pricing',
				'label'       => __( 'Pricing', 'flaron' ),
				'description' => __( 'A collection of pricing patterns.', 'flaron' ),
			),
			array(
				'slug'        => 'flaron/cta',
				'label'       => __( 'CTA', 'flaron' ),
				'description' => __( 'A collection of CTA patterns.', 'flaron' ),
			),
			array(
				'slug'        => 'flaron/stats',
				'label'       => __( 'Stats', 'flaron' ),
				'description' => __( 'A collection of stats patterns.', 'flaron' ),
			),
			array(
				'slug'        => 'flaron/faq',
				'label'       => __( 'FAQs', 'flaron' ),
				'description' => __( 'A collection of frequently asked questions patterns.', 'flaron' ),
			),
			array(
				'slug'        => 'flaron/hero',
				'label'       => __( 'Hero', 'flaron' ),
				'description' => __( 'A collection of heroes patterns.', 'flaron' ),
			),
		);
		// Register each pattern category.
		foreach ( $pattern_categories as $category ) {
			register_block_pattern_category( $category['slug'], $category );
		}
	}

endif;

add_action( 'init', 'flaron_pattern_categories' );

require_once 'inc/block-styles.php';
require_once 'inc/welcome-notice.php';
