<?php
/**
 * Welcome Notice
 *
 * @package flaron
 * @author Yahya Qara
 * @since 0.0.4
 */
function flaron_welcome_notice() {
	$current_screen = get_current_screen();

	// Check if the current screen is the themes page.
	if ( $current_screen->id === 'themes' ) {
		// Enqueue styles.
		wp_enqueue_style( 'welcome-notice', get_template_directory_uri() . '/assets/css/welcome-notice.css', array(), wp_get_theme()->get( 'Version' ) );

		// Enqueue jQuery.
		wp_enqueue_script( 'jquery' );

		// Register and enqueue welcome-notice.js.
		wp_register_script( 'flaron-welcome-notice-js', get_template_directory_uri() . '/assets/js/welcome-notice.js', array( 'jquery' ), '0.0.4', true );
		$welcome_notice_params = array(
			'ajaxurl'                 => admin_url( 'admin-ajax.php' ),
			'welcome_notice_security' => wp_create_nonce( 'flaron-welcome-notice-nonce' ),
		);
		wp_localize_script( 'flaron-welcome-notice-js', 'welcome_notice_params', $welcome_notice_params );
		wp_enqueue_script( 'flaron-welcome-notice-js' );

		$get_started_url = 'https://blocklayouts.com/';
		// Check if the notice has been dismissed.
		if ( ! get_option( 'flaron_notice_dismissed', false ) ) {
			?>
				<div class="flaron-notice-container notice notice-info is-dismissible">
					<div class="flaron-notice-content">
						<div class="col-left">
							<p class="flaron-notice-subtitle">
								<?php esc_html_e( 'Thanks for installing Flaron ✨', 'flaron' ); ?>
							</p>
							<h2 class="flaron-notice-heading">
								<?php esc_html_e( 'Introducing BlockLayouts: Pre-Designed WordPress Block Patterns Library', 'flaron' ); ?>
							</h2>
							<p class="flaron-notice-description">
								<?php esc_html_e( 'Design your perfect pages or postes effortlessly. Choose the block patterns you need, copy and paste them into the editor, and you\'re all set!', 'flaron' ); ?>
							</p>
							<a href="<?php echo esc_url( $get_started_url ); ?>" class="flaron-notice-btn" target="_blank">
								<?php esc_html_e( 'Learn more', 'flaron' ); ?>
							</a>
						</div>
						<div class="col-right">
							<img class="flaron-notice-img" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/flaron-notice-welcome.png' ); ?>" alt="Blocks Image">
						</div>
					</div>
				</div>
			<?php
		}
	}
}
add_action( 'admin_notices', 'flaron_welcome_notice' );

function flaron_dismiss_notice() {
	// Check nonce for security.
	if ( ! isset( $_POST['nonce'] ) || ! wp_verify_nonce( $_POST['nonce'], 'flaron-welcome-notice-nonce' ) ) {
		die( 'Permission check failed' );
	}

	// Update the option to indicate that the notice has been dismissed.
	update_option( 'flaron_notice_dismissed', true );
	die();
}

add_action( 'wp_ajax_flaron_dismiss_notice', 'flaron_dismiss_notice' );

function flaron_activate() {
	// Check if it's the first activation.
	if ( get_option( 'flaron_activated', false ) ) {
		add_action( 'admin_notices', 'flaron_welcome_notice' );
		// Update the option to indicate that the welcome notice has been shown.
		update_option( 'flaron_activated', true );
	}
}
add_action( 'after_switch_flaron', 'flaron_activate' );
