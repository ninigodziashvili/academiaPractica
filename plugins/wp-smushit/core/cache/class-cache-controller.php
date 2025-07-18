<?php

namespace Smush\Core\Cache;

use Smush\Core\Controller;
use Smush\Core\Helper;
use Smush\Core\Settings;

class Cache_Controller extends Controller {
	private Cache_Helper $helper;

	public function __construct() {
		$this->helper = Cache_Helper::get_instance();

		$this->register_action( 'wp_smush_avif_status_changed', array( $this, 'avif_status_changed' ) );
		$this->register_action( 'wp_smush_webp_status_changed', array( $this, 'webp_status_changed' ) );
		$this->register_action( 'wp_smush_webp_method_changed', array( $this, 'webp_method_changed' ) );
		$this->register_action( 'wp_smush_cdn_status_changed', array( $this, 'cdn_status_changed' ) );
		// TODO: identify other cases where cache should be cleared and call the clear_third_party_cache method

		$this->register_action( 'wp_ajax_smush_dismiss_cache_notice', array( $this, 'dismiss_cache_notice' ) );
		$this->register_action( 'wp_smush_header_notices', array( $this, 'maybe_show_cache_notice' ) );
	}

	public function cdn_status_changed() {
		$this->helper->clear_full_cache( 'cdn' );
	}

	public function webp_method_changed() {
		$this->helper->clear_full_cache( 'next_gen_method' );
	}

	public function webp_status_changed() {
		$this->helper->clear_full_cache( 'next_gen' );
	}

	public function avif_status_changed() {
		$this->helper->clear_full_cache( 'next_gen' );
	}

	public function dismiss_cache_notice() {
		check_ajax_referer( 'wp-smush-ajax' );
		// Check for permission.
		if ( ! Helper::is_user_allowed( 'manage_options' ) ) {
			wp_die( esc_html__( 'Unauthorized', 'wp-smushit' ), 403 );
		}
		$this->helper->delete_notice_key();

		wp_send_json_success();
	}

	public function maybe_show_cache_notice() {
		$notice = $this->get_cache_notice();
		if ( empty( $notice ) ) {
			return;
		}
		?>
		<div class="sui-notice sui-notice-info" id="wp-smush-cache-notice">
			<div class="sui-notice-content">
				<div class="sui-notice-message">
					<i class="sui-notice-icon sui-icon-info" aria-hidden="true"></i>
					<p><?php echo wp_kses_post( $notice ); ?></p>
				</div>
				<div class="sui-notice-actions">
					<button class="sui-button-icon smush-dismiss-notice-button">
						<i class="sui-icon-check" aria-hidden="true"></i>
						<span class="sui-screen-reader-text"><?php esc_html_e( 'Dismiss', 'wp-smushit' ); ?></span>
					</button>
				</div>
			</div>
		</div>
		<?php
	}

	private function get_cache_notice() {
		$notice_key = $this->helper->get_notice_key();
		if ( empty( $notice_key ) ) {
			return;
		}

		$settings = Settings::get_instance();
		if ( 'cdn' === $notice_key ) {
			return $settings->has_cdn_page() ? __( 'CDN status has changed.<br/>If you have a page caching plugin or server caching, please clear it to ensure everything works as expected.', 'wp-smushit' ) : '';
		}

		if ( 'next_gen' === $notice_key || 'next_gen_method' === $notice_key ) {
			$notice = 'next_gen' === $notice_key ? __( 'Next-Gen Formats status has changed.<br/>If you have a page caching plugin or server caching, please clear it to ensure everything works as expected.', 'wp-smushit' ) :
				__( 'Next-Gen conversion method has been updated.<br/>If you have a page caching plugin or server caching, please clear it to ensure everything works as expected.', 'wp-smushit' );
			return $settings->has_next_gen_page() ? $notice : '';
		}
	}
}
