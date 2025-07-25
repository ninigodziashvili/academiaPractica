<?php
/**
 * Smush Settings class: Settings
 *
 * @since 3.0  Migrated from old settings class.
 * @package Smush\Core
 */

namespace Smush\Core;

use Smush\Core\CDN\CDN_Helper;
use Smush\Core\LCP\LCP_Helper;
use Smush\Core\Stats\Global_Stats;
use Smush\Core\Next_Gen\Next_Gen_Manager;
use WP_Smush;

if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Class Settings
 *
 * @since 3.0
 */
class Settings {

	const SUBSITE_CONTROLS_OPTION_KEY = 'wp-smush-networkwide';
	const LAZY_PRELOAD_MODULE_NAME = 'lazy_load';
	const SETTINGS_KEY = 'wp-smush-settings';
	const NEXT_GEN_CDN_KEY = 'webp';
	const LEVEL_LOSSLESS = 0;
	const LEVEL_SUPER_LOSSY = 1;
	const LEVEL_ULTRA_LOSSY = 2;
	const NONE_CDN_MODE = 0;
	const WEBP_CDN_MODE = 1;
	const AVIF_CDN_MODE = 2;

	/**
	 * Plugin instance.
	 *
	 * @since 3.0
	 *
	 * @var null|Settings
	 */
	private static $instance = null;

	/**
	 * Settings array.
	 *
	 * @since 3.2.2
	 * @var array $settings
	 */
	private $settings = array();

	/**
	 * Default settings array.
	 *
	 * We don't want it to be edited directly, so we use public get_*, set_* and delete_* methods.
	 *
	 * @since 3.0    Improved structure.
	 * @since 3.2.2  Changed to be a default array.
	 * @since 3.8.0  Added webp_mod.
	 *
	 * @var array
	 */
	private $defaults = array(
		'auto'                   => true,    // works with CDN.
		'lossy'                  => 0,   // works with CDN.
		'strip_exif'             => true,    // works with CDN.
		'resize'                 => false,
		'detection'              => false,
		'original'               => false,
		'backup'                 => false,
		'no_scale'               => false,
		'png_to_jpg'             => false,   // works with CDN.
		'nextgen'                => false,
		's3'                     => false,
		'gutenberg'              => false,
		'js_builder'             => false,
		'gform'                  => false,
		'cdn'                    => false,
		'auto_resize'            => false,
		self::NEXT_GEN_CDN_KEY   => self::WEBP_CDN_MODE,
		'usage'                  => false,
		'accessible_colors'      => false,
		'keep_data'              => true,
		'lazy_load'              => false,
		'background_images'      => true,
		'rest_api_support'       => false,   // CDN option.
		'webp_mod'               => false,   // WebP module.
		'background_email'       => false,
		'webp_direct_conversion' => false,
		'webp_fallback'          => false,
		'disable_streams'        => false,
		'avif_mod'               => false,
		'avif_fallback'          => false,
		'preload_images'         => false,
	);

	/**
	 * Available modules.
	 *
	 * @since 3.2.2
	 * @since 3.8.0  Added webp.
	 * @var array $modules
	 */
	private $modules = array( 'bulk', 'integrations', self::LAZY_PRELOAD_MODULE_NAME, 'cdn', 'next_gen', 'settings' );

	/**
	 * List of features/settings that are free.
	 *
	 * @var array $basic_features
	 */
	public static $basic_features = array( 'bulk', 'auto', 'strip_exif', 'resize', 'original', 'gutenberg', 'js_builder', 'gform', 'lazy_load', 'lossy' );

	/**
	 * List of fields in bulk smush form.
	 *
	 * @used-by save_settings()
	 *
	 * @var array
	 */
	private $bulk_fields = array( 'lossy', 'bulk', 'auto', 'strip_exif', 'resize', 'original', 'backup', 'png_to_jpg', 'no_scale', 'background_email' );

	/**
	 * @since 3.12.6
	 *
	 * Upsell fields.
	 */
	private $upsell_fields = array( 'background_email' );

	/**
	 * List of fields in integration form.
	 *
	 * @used-by save_settings()
	 *
	 * @var array
	 */
	private $integrations_fields = array( 'gutenberg', 'gform', 'js_builder', 's3', 'nextgen' );

	/**
	 * List of fields in CDN form.
	 *
	 * @used-by save_settings()
	 *
	 * @var array
	 */
	private $cdn_fields = array( 'cdn', 'background_images', 'auto_resize', self::NEXT_GEN_CDN_KEY, 'rest_api_support' );

	/**
	 * List of fields in CDN form.
	 *
	 * @used-by save_settings()
	 *
	 * @since 3.8.0
	 *
	 * @var array
	 */
	private $webp_fields = array( 'webp_mod', 'webp_direct_conversion', 'webp_fallback' );

	/**
	 * @var array
	 */
	private $avif_fields = array( 'avif_mod', 'avif_fallback' );

	/**
	 * List of fields in Settings form.
	 *
	 * @used-by save_settings()
	 *
	 * @var array
	 */
	private $settings_fields = array( 'detection', 'accessible_colors', 'usage', 'keep_data', 'api_auth', 'disable_streams' );

	/**
	 * List of fields in lazy loading form.
	 *
	 * @used-by save_settings()
	 *
	 * @var array
	 */
	private $lazy_load_fields = array( 'lazy_load' );

	/**
	 * @var array
	 */
	private $preload_fields = array( 'preload_images' );

	/**
	 * @var array
	 */
	private $activated_subsite_modules;

	/**
	 * Return the plugin instance.
	 *
	 * @since 3.0
	 *
	 * @return Settings
	 */
	public static function get_instance() {
		if ( ! self::$instance ) {
			self::$instance = new self();
		}

		return self::$instance;
	}

	/**
	 * WP_Smush_Settings constructor.
	 */
	private function __construct() {
		// Do not initialize if not in admin area
		// wp_head runs specifically in the frontend, good check to make sure we're accidentally not loading settings on required pages.
		if ( ! is_admin() && ! wp_doing_ajax() && did_action( 'wp_head' ) ) {
			return;
		}

		// Save Settings.
		add_action( 'wp_ajax_smush_save_settings', array( $this, 'save_settings' ) );
		// Reset Settings.
		add_action( 'wp_ajax_reset_settings', array( $this, 'reset' ) );

		add_filter( 'wp_smush_settings', array( $this, 'remove_unavailable' ) );

		add_action( 'switch_blog', array( $this, 'maybe_reset_cache_site_settings' ), 10, 2 );

		$this->init();
	}

	/**
	 * Remove settings that are not available on a specific version of WordPress.
	 *
	 * @since 3.9.1
	 *
	 * @param array $settings Current settings.
	 *
	 * @return array
	 */
	public function remove_unavailable( $settings ) {
		global $wp_version;

		if ( version_compare( $wp_version, '5.3', '<' ) ) {
			if ( isset( $this->bulk_fields['no_scale'] ) ) {
				unset( $this->bulk_fields['no_scale'] );
			}

			if ( isset( $settings['no_scale'] ) ) {
				unset( $settings['no_scale'] );
			}
		}

		return $settings;
	}

	/**
	 * Get descriptions for all settings.
	 *
	 * @since 3.8.6 Moved from Core
	 *
	 * @param string $id Setting ID to get data for.
	 * @param string $type What value to get. Accepts: label, short_label or desc.
	 *
	 * @return string
	 */
	public static function get_setting_data( $id, $type = '' ) {
		$bg_optimization = WP_Smush::get_instance()->core()->mod->bg_optimization;
		if ( $bg_optimization->can_use_background() ) {
			$bg_email_desc = esc_html__( 'Be notified via email about the bulk smush status when the process has completed.', 'wp-smushit' );
		} else {
			$bg_email_desc = sprintf(
			/* translators: %s Email address */
				esc_html__( "Be notified via email about the bulk smush status when the process has completed. You'll receive an email at %s.", 'wp-smushit' ),
				'<strong>' . $bg_optimization->get_mail_recipient() . '</strong>'
			);
		}
		$settings = array(
			'background_email'  => array(
				'label'       => esc_html__( 'Enable email notification', 'wp-smushit' ),
				'short_label' => esc_html__( 'Email Notification', 'wp-smushit' ),
				'desc'        => $bg_email_desc,
			),
			'bulk'              => array(
				'short_label' => esc_html__( 'Image Sizes', 'wp-smushit' ),
				'desc'        => esc_html__( 'WordPress generates multiple image thumbnails for each image you upload. Choose which of those thumbnail sizes you want to include when bulk smushing.', 'wp-smushit' ),
			),
			'auto'              => array(
				'label'       => esc_html__( 'Automatically compress my images on upload', 'wp-smushit' ),
				'short_label' => esc_html__( 'Automatic compression', 'wp-smushit' ),
				'desc'        => esc_html__( 'When you upload images to your site, we will automatically optimize and compress them for you.', 'wp-smushit' ),
			),
			'lossy'             => array(
				'label'       => esc_html__( 'Choose Compression Level', 'wp-smushit' ),
				'short_label' => esc_html__( 'Smush Mode', 'wp-smushit' ),
				'desc'        => sprintf(
				/* translators: 1: Opening <strong> 2: Closing </strong> */
					esc_html__( 'Choose the level of compression that suits your needs. We recommend %1$sUltra%2$s for faster sites and impressive image quality.', 'wp-smushit' ),
					'<strong>',
					'</strong>'
				),
			),
			'strip_exif'        => array(
				'label'       => esc_html__( 'Strip my image metadata', 'wp-smushit' ),
				'short_label' => esc_html__( 'Metadata', 'wp-smushit' ),
				'desc'        => esc_html__( 'Photos often store camera settings in the file, i.e., focal length, date, time and location. Removing EXIF data reduces the file size. Note: it does not strip SEO metadata.', 'wp-smushit' ),
			),
			'resize'            => array(
				'label'       => esc_html__( 'Resize original images', 'wp-smushit' ),
				'short_label' => esc_html__( 'Image Resizing', 'wp-smushit' ),
				'desc'        => esc_html__( 'As of version 5.3, WordPress creates a scaled version of uploaded images over 2560x2560px by default, and keeps your original uploaded images as a backup. If desired, you can choose a different resizing threshold or disable the scaled images altogether.', 'wp-smushit' ),
			),
			'no_scale'          => array(
				'label'       => esc_html__( 'Disable scaled images', 'wp-smushit' ),
				'short_label' => esc_html__( 'Disable Scaled Images', 'wp-smushit' ),
				'desc'        => esc_html__( 'Enable this feature to disable automatic resizing of images above the threshold, keeping only your original uploaded images.', 'wp-smushit' ),
			),
			'detection'         => array(
				'label'       => esc_html__( 'Detect and show incorrectly sized images', 'wp-smushit' ),
				'short_label' => esc_html__( 'Image Resize Detection', 'wp-smushit' ),
				'desc'        => esc_html__( 'This will add functionality to your website that highlights images that are either too large or too small for their containers.', 'wp-smushit' ),
			),
			'original'          => array(
				'label'       => esc_html__( 'Optimize original images', 'wp-smushit' ),
				'short_label' => esc_html__( 'Original Images', 'wp-smushit' ),
				'desc'        => esc_html__( 'Choose how you want Smush to handle the original image file when you run a bulk smush.', 'wp-smushit' ),
			),
			'backup'            => array(
				'label'       => esc_html__( 'Backup original images', 'wp-smushit' ),
				'short_label' => esc_html__( 'Backup Original Images', 'wp-smushit' ),
				'desc'        => esc_html__( 'Enable this feature to save a copy of your original images so you can restore them at any point. Note: Keeping a copy of the original images can significantly increase the size of your uploads folder.', 'wp-smushit' ),
			),
			'png_to_jpg'        => array(
				'label'       => esc_html__( 'Auto-convert PNGs to JPEGs (lossy)', 'wp-smushit' ),
				'short_label' => esc_html__( 'PNG to JPEG Conversion', 'wp-smushit' ),
				'desc'        => esc_html__( 'When you compress a PNG, Smush will check if converting it to JPEG could further reduce its size.', 'wp-smushit' ),
			),
			'accessible_colors' => array(
				'label'       => esc_html__( 'Enable high contrast mode', 'wp-smushit' ),
				'short_label' => esc_html__( 'Color Accessibility', 'wp-smushit' ),
				'desc'        => esc_html__( 'Increase the visibility and accessibility of elements and components to meet WCAG AAA requirements.', 'wp-smushit' ),
			),
			'usage'             => array(
				'label'       => esc_html__( 'Allow usage tracking', 'wp-smushit' ),
				'short_label' => esc_html__( 'Usage Tracking', 'wp-smushit' ),
				'desc'        => esc_html__( 'Help make Smush better by letting our designers learn how you’re using the plugin.', 'wp-smushit' ),
			),
		);

		/**
		 * Allow adding other settings via filtering the variable
		 *
		 * Like Nextgen and S3 integration
		 */
		$settings = apply_filters( 'wp_smush_settings', $settings );

		if ( ! isset( $settings[ $id ] ) ) {
			return '';
		}

		if ( 'short-label' === $type ) {
			return ! empty( $settings[ $id ]['short_label'] ) ? $settings[ $id ]['short_label'] : $settings[ $id ]['label'];
		}

		if ( 'label' === $type ) {
			return ! empty( $settings[ $id ]['label'] ) ? $settings[ $id ]['label'] : $settings[ $id ]['short_label'];
		}

		if ( 'desc' === $type ) {
			return $settings[ $id ]['desc'];
		}

		return $settings[ $id ];
	}

	/**
	 * Getter method for bulk settings fields.
	 *
	 * @since 3.2.2
	 * @return array
	 */
	public function get_bulk_fields() {
		return $this->bulk_fields;
	}

	/**
	 * Getter method for integration fields.
	 *
	 * @since 3.2.2
	 * @return array
	 */
	public function get_integrations_fields() {
		return $this->integrations_fields;
	}

	/**
	 * Getter method for CDN fields.
	 *
	 * @since 3.2.2
	 * @return array
	 */
	public function get_cdn_fields() {
		return $this->cdn_fields;
	}

	public function is_upsell_field( $field ) {
		return in_array( $field, $this->upsell_fields, true );
	}

	public function is_pro_field( $field ) {
		return ! in_array( $field, self::$basic_features, true );
	}

	public function can_access_pro_field( $field ) {
		if ( WP_Smush::is_pro() ) {
			return true;
		}

		$bg_optimization = WP_Smush::get_instance()->core()->mod->bg_optimization;
		return 'background_email' === $field && $bg_optimization->can_use_background();
	}

	/**
	 * Getter method for settings fields.
	 *
	 * @since 3.2.2
	 * @return array
	 */
	public function get_settings_fields() {
		return $this->settings_fields;
	}

	/**
	 * Getter method for lazy loading fields.
	 *
	 * @since 3.3.0
	 * @return array
	 */
	public function get_lazy_load_fields() {
		return $this->lazy_load_fields;
	}

	public function get_preload_fields() {
		return $this->preload_fields;
	}

	public function get_webp_fields() {
		return $this->webp_fields;
	}

	public function get_avif_fields() {
		return $this->avif_fields;
	}

	public function get_next_gen_fields() {
		return array_merge( $this->get_webp_fields(), $this->get_avif_fields() );
	}

	/**
	 * Init settings.
	 *
	 * If there are no settings in the database, populate it with the defaults, if settings are present
	 */
	public function init() {
	}

	/**
	 * Checks whether the settings are applicable for the whole network/site or sitewise (multisite).
	 */
	public function is_network_enabled() {
		return $this->is_network_setting( self::SETTINGS_KEY );
	}

	public function is_network_setting( $option_id ) {
		if ( ! is_multisite() ) {
			return false;
		}

		$global_setting_keys = array(
			'wp_smush_api_auth',
			self::SUBSITE_CONTROLS_OPTION_KEY,
		);

		if ( in_array( $option_id, $global_setting_keys, true ) ) {
			return true;
		}

		$subsite_modules = $this->get_activated_subsite_modules();
		if ( empty( $subsite_modules ) ) {
			return true;
		}

		$module_option_keys = array(
			'wp-smush-image_sizes'  => 'bulk',
			'wp-smush-resize_sizes' => 'bulk',
			'wp-smush-lazy_load'    => self::LAZY_PRELOAD_MODULE_NAME,
			'wp-smush-preload'      => self::LAZY_PRELOAD_MODULE_NAME,
			'wp-smush-cdn_status'   => 'cdn',
		);

		if ( ! isset( $module_option_keys[ $option_id ] ) ) {
			return self::is_ajax_network_admin() || is_network_admin();
		}

		$module = $module_option_keys[ $option_id ];

		return ! in_array( $module, $subsite_modules, true );
	}

	/**
	 * Check if user is able to access the page.
	 *
	 * @since 3.2.2
	 *
	 * @param string|bool $module Check if a specific module is allowed.
	 * @param bool $top_menu Is this a top level menu point? Defaults to a Smush sub page.
	 *
	 * @return bool|array  Can access page or not. If custom access rules defined - return custom rules array.
	 */
	public static function can_access( $module = false, $top_menu = false ) {
		// Allow all access on single site installs.
		if ( ! is_multisite() ) {
			return true;
		}

		$access = get_site_option( self::SUBSITE_CONTROLS_OPTION_KEY );

		// Check to if the settings update is network-wide or not ( only if in network admin ).
		$action = filter_input( INPUT_POST, 'action', FILTER_SANITIZE_SPECIAL_CHARS );

		$is_network_admin = is_network_admin() || 'save_settings' === $action;

		if ( self::is_ajax_network_admin() ) {
			$is_network_admin = true;
		}

		if ( $is_network_admin && ! $access && $top_menu ) {
			return true;
		}

		if ( current_user_can( 'manage_options' ) && ( '1' === $access || 'custom' === $access && $top_menu ) ) {
			return true;
		}

		if ( is_array( $access ) && current_user_can( 'manage_options' ) ) {
			if ( ! $module ) {
				return $access;
			}

			if ( $is_network_admin && ! in_array( $module, $access, true ) ) {
				return true;
			} elseif ( ! $is_network_admin && in_array( $module, $access, true ) ) {
				return true;
			}

			return false;
		}

		return false;
	}

	public function maybe_reset_cache_site_settings( $new_blog_id, $prev_blog_id ) {
		if ( $new_blog_id !== $prev_blog_id ) {
			$this->reset_cache_site_settings();
		}
	}

	public function reset_cache_site_settings() {
		$this->settings = array();// Reset settings, leave force update the settings for get_site_settings.
	}

	private function update_site_settings( $new_settings ) {
		$new_settings  = (array) $new_settings;
		$site_settings = $this->get_site_settings();

		foreach ( $new_settings as $setting => $value ) {
			if ( isset( $site_settings[ $setting ], $value ) ) {
				$site_settings[ $setting ] = $value;
			}
		}

		$this->update_site_option( self::SETTINGS_KEY, $site_settings );
		$this->reset_cache_site_settings();
	}

	public function get_site_settings() {
		if ( empty( $this->settings ) ) {
			$this->settings = $this->prepare_site_settings();
		}

		return $this->settings;
	}

	private function prepare_site_settings() {
		$is_multisite = is_multisite();
		if ( ! $is_multisite ) {
			// Make sure the new default settings are included into the old configs.
			return wp_parse_args( get_option( self::SETTINGS_KEY, array() ), $this->defaults );
		}

		$network_settings = get_site_option( self::SETTINGS_KEY, array() );
		$network_settings = wp_parse_args( $network_settings, $this->defaults );
		if ( $this->is_network_enabled() ) {
			return $network_settings;
		}

		$subsite_modules  = $this->get_activated_subsite_modules();
		$network_modules  = array_diff( $this->modules, $subsite_modules );
		$subsite_settings = get_option( self::SETTINGS_KEY, array() );

		foreach ( $network_modules as $key ) {
			// Remove values that are network wide from subsite settings.
			$get_module_fields = "get_{$key}_fields";
			$subsite_settings  = array_diff_key( $subsite_settings, array_flip( $this->$get_module_fields() ) );
		}

		// And append subsite settings to the site settings.
		$network_settings = array_merge( $network_settings, $subsite_settings );

		return $network_settings;
	}

	/**
	 * Getter method for $settings.
	 *
	 * @since 3.0
	 *
	 * @param string $setting Setting to get. Default: get all settings.
	 *
	 * @return array|bool  Return either a setting value or array of settings.
	 */
	public function get( $setting = '' ) {
		$settings = $this->get_site_settings();

		if ( ! empty( $setting ) ) {
			return isset( $settings[ $setting ] ) ? $settings[ $setting ] : false;
		}

		return $settings;
	}

	/**
	 * Setter method for $settings.
	 *
	 * @since 3.0
	 *
	 * @param string $setting Setting to update.
	 * @param bool $value Value to set. Default: false.
	 */
	public function set( $setting = '', $value = false ) {
		if ( empty( $setting ) ) {
			return;
		}

		$this->update_site_settings( array( $setting => $value ) );
	}

	/**
	 * Get all Smush settings, based on if network settings are enabled or not.
	 *
	 * @param string $name Setting to fetch.
	 * @param mixed $default Default value.
	 *
	 * @return bool|mixed
	 */
	public function get_setting( $name = '', $default = false ) {
		if ( empty( $name ) ) {
			return false;
		}

		if ( ! is_multisite() ) {
			return get_option( $name, $default );
		}

		$global          = $this->is_network_setting( $name );
		$global_settings = get_site_option( $name, $default );
		if ( $global ) {
			return $global_settings;
		}

		$subsite_settings = get_option( $name, $default );
		$subsite_settings = false !== $subsite_settings ? $subsite_settings : $global_settings;

		return $subsite_settings;
	}

	/**
	 * Update value for given setting key
	 *
	 * @param string $name Key.
	 * @param mixed $value Value.
	 *
	 * @return bool If the setting was updated or not
	 */
	public function set_setting( $name = '', $value = '' ) {
		if ( empty( $name ) ) {
			return false;
		}

		if ( self::SETTINGS_KEY === $name ) {
			return $this->update_site_settings( $value );
		}

		return $this->update_site_option( $name, $value );
	}

	private function update_site_option( $name, $value ) {
		$global = $this->is_network_setting( $name );

		return $global ? update_site_option( $name, $value ) : update_option( $name, $value );
	}

	/**
	 * Delete the given key name.
	 *
	 * @param string $name Key.
	 *
	 * @return bool If the setting was updated or not
	 */
	public function delete_setting( $name = '' ) {
		if ( empty( $name ) ) {
			return false;
		}

		$global = $this->is_network_setting( $name );

		return $global ? delete_site_option( $name ) : delete_option( $name );
	}

	/**
	 * Reset settings to defaults.
	 *
	 * @since 3.2.0
	 */
	public function reset() {
		check_ajax_referer( 'wp_smush_reset' );

		// Check capability.
		if ( ! Helper::is_user_allowed( 'manage_options' ) ) {
			wp_die( esc_html__( 'Unauthorized', 'wp-smushit' ), 403 );
		}

		delete_site_option( self::SUBSITE_CONTROLS_OPTION_KEY );
		delete_site_option( 'wp-smush-webp_hide_wizard' );
		delete_site_option( 'wp-smush-preset_configs' );
		$this->delete_setting( 'wp-smush-image_sizes' );
		$this->delete_setting( 'wp-smush-resize_sizes' );
		$this->delete_setting( 'wp-smush-cdn_status' );
		$this->delete_setting( 'wp-smush-lazy_load' );
		$this->delete_setting( 'wp-smush-cdn-advanced-settings' );
		$this->delete_setting( 'wp-smush-hide-tutorials' );
		delete_option( 'wp-smush-png2jpg-rewrite-rules-flushed' );
		delete_option( 'wp_smush_scan_slice_size' );

		LCP_Helper::delete_all_lcp_data();

		// We used update_option for skip-smush-setup,
		// so let's reset it with delete_option instead of delete_site_option for MU site.
		delete_option( 'skip-smush-setup' );

		// Reset site settings.
		$this->reset_site_settings();

		// Reset sub-sites.
		$this->reset_sub_sites();

		wp_send_json_success();
	}

	private function reset_site_settings() {
		$this->delete_setting( self::SETTINGS_KEY );
		$this->reset_cache_site_settings();
		// The action wp_smush_settings_updated only triggers after option is updated, does not trigger on add_(site_)option.
		// So to support this, we need to add the default option first.
		$this->add_default_site_settings();
	}

	private function add_default_site_settings() {
		$this->update_site_settings( $this->defaults );
	}

	public function initial_default_site_settings() {
		if ( false === $this->get_setting( self::SETTINGS_KEY, false ) ) {
			$this->add_default_site_settings();
		}
	}

	private function reset_sub_sites() {
		if ( ! is_multisite() ) {
			return;
		}

		// Limit 100 sub sites by default.
		$site_args = array(
			'fields' => 'ids',
			'public' => 1,
		);

		$site_ids = get_sites( $site_args );
		if ( empty( $site_ids ) ) {
			return;
		}

		foreach ( $site_ids as $site_id ) {
			switch_to_blog( $site_id );
			$this->reset_sub_site_settings();
			restore_current_blog();
		}
	}

	private function reset_sub_site_settings() {
		delete_option( self::SETTINGS_KEY );
		delete_option( 'wp-smush-image_sizes' );
		delete_option( 'wp-smush-resize_sizes' );
		delete_option( 'wp-smush-cdn_status' );
		delete_option( 'wp-smush-lazy_load' );
		delete_option( 'wp-smush-cdn-advanced-settings' );
		delete_option( 'wp-smush-hide-tutorials' );
		delete_option( 'skip-smush-setup' );
		delete_option( 'wp_smush_scan_slice_size' );

		LCP_Helper::delete_all_lcp_data();
	}

	/**
	 * Save settings.
	 *
	 * @since 3.8.6
	 */
	public function save_settings() {
		check_ajax_referer( 'wp-smush-ajax' );

		if ( ! Helper::is_user_allowed( 'manage_options' ) ) {
			wp_send_json_error(
				array(
					'message' => esc_html__( "You don't have permission to do this.", 'wp-smushit' ),
				)
			);
		}

		// Delete S3 alert flag, if S3 option is disabled again.
		if ( ! isset( $_POST['wp-smush-s3'] ) && isset( $settings['integration']['s3'] ) && $settings['integration']['s3'] ) {
			delete_site_option( 'wp-smush-hide_s3support_alert' );
		}

		$page = filter_input( INPUT_POST, 'page', FILTER_SANITIZE_SPECIAL_CHARS );

		if ( ! isset( $page ) ) {
			wp_send_json_error(
				array( 'message' => __( 'The page these settings belong to is missing.', 'wp-smushit' ) )
			);
		}

		$new_settings = array();
		$status       = array(
			'is_outdated_stats' => false,
			'page'              => $page,
		);

		if ( 'bulk' === $page ) {
			foreach ( $this->get_bulk_fields() as $field ) {
				// Skip the module enable/disable option.
				if ( 'bulk' === $field ) {
					continue;
				}
				if ( 'lossy' == $field ) {
					$new_settings['lossy'] = filter_input( INPUT_POST, $field, FILTER_SANITIZE_NUMBER_INT );
					continue;
				}
				$new_settings[ $field ] = (bool) filter_input( INPUT_POST, $field, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE );
			}
			$this->parse_bulk_settings();
		}

		if ( 'lazy-load' === $page ) {
			$this->parse_lazy_load_settings();
		} elseif ( 'preload' === $page ) {
			$preload_images                 = filter_input( INPUT_POST, 'preload_images', FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE );
			$new_settings['preload_images'] = (bool) $preload_images;
			$this->parse_preload_settings();
		}

		if ( 'cdn' === $page ) {
			foreach ( $this->get_cdn_fields() as $field ) {
				// Skip the module enable/disable option.
				if ( 'cdn' === $field ) {
					continue;
				}

				if ( self::NEXT_GEN_CDN_KEY === $field ) {
					$new_settings[ self::NEXT_GEN_CDN_KEY ] = $this->parse_next_gen_cdn_from_input();
					continue;
				}

				$new_settings[ $field ] = (bool) filter_input( INPUT_POST, $field, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE );
			}
			$this->parse_cdn_settings();
		}

		if ( 'next-gen' === $page ) {
			$this->parse_next_gen_settings();
			// Check whether Next-Gen Formats have changed (WebP <-> AVIF).
			$status['next_gen_format_changed'] = did_action( 'wp_smush_next_gen_after_format_switch' );
			// Check whether WebP method is changed (Direct Conversion <-> Server Configuration).
			$status['webp_method_changed'] = did_action( 'wp_smush_webp_method_changed' );
		}

		if ( 'integrations' === $page ) {
			foreach ( $this->get_integrations_fields() as $field ) {
				$new_settings[ $field ] = (bool) filter_input( INPUT_POST, $field, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE );
			}
		}

		if ( 'settings' === $page ) {
			$tab = filter_input( INPUT_POST, 'tab', FILTER_SANITIZE_SPECIAL_CHARS );
			if ( ! isset( $tab ) ) {
				wp_send_json_error(
					array( 'message' => __( 'The tab these settings belong to is missing.', 'wp-smushit' ) )
				);
			}

			if ( 'general' === $tab ) {
				$new_settings['usage']     = (bool) filter_input( INPUT_POST, 'usage', FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE );
				$new_settings['detection'] = (bool) filter_input( INPUT_POST, 'detection', FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE );
			}
			if ( 'permissions' === $tab ) {
				$new_settings['networkwide'] = $this->parse_access_settings();
			}
			if ( 'data' === $tab ) {
				$new_settings['keep_data'] = (bool) filter_input( INPUT_POST, 'keep_data', FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE );
			}
			if ( 'accessibility' === $tab ) {
				$new_settings['accessible_colors'] = (bool) filter_input( INPUT_POST, 'accessible_colors', FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE );
			}
		}

		$this->update_site_settings( $new_settings );
		$status['is_outdated_stats'] = Global_Stats::get()->is_outdated();
		wp_send_json_success( $status );
	}

	private function parse_next_gen_cdn_from_input() {
		$cdn_next_gen_mode = filter_input( INPUT_POST, 'next-gen-cdn', FILTER_VALIDATE_INT );

		return $this->sanitize_cdn_next_gen_conversion_mode( $cdn_next_gen_mode );
	}

	/**
	 * Parse bulk Smush specific settings.
	 *
	 * Nonce processed in parent method.
	 *
	 * @since 3.2.0  Moved from save method.
	 */
	private function parse_bulk_settings() {
		// Save the selected image sizes.
		if ( isset( $_POST['wp-smush-auto-image-sizes'] ) && 'all' === $_POST['wp-smush-auto-image-sizes'] ) { // phpcs:ignore WordPress.Security.NonceVerification.Missing
			$this->delete_setting( 'wp-smush-image_sizes' );
		} else {
			if ( ! isset( $_POST['wp-smush-image_sizes'] ) ) { // phpcs:ignore WordPress.Security.NonceVerification.Missing
				$image_sizes = array();
			} else {
				$image_sizes = array_filter( array_map( 'sanitize_text_field', wp_unslash( $_POST['wp-smush-image_sizes'] ) ) ); // phpcs:ignore WordPress.Security.NonceVerification.Missing
			}

			$this->set_setting( 'wp-smush-image_sizes', $image_sizes );
		}

		// Update Resize width and height settings if set.
		$resize_sizes['width']  = isset( $_POST['wp-smush-resize_width'] ) ? (int) $_POST['wp-smush-resize_width'] : 0; // phpcs:ignore WordPress.Security.NonceVerification.Missing
		$resize_sizes['height'] = isset( $_POST['wp-smush-resize_height'] ) ? (int) $_POST['wp-smush-resize_height'] : 0; // phpcs:ignore WordPress.Security.NonceVerification.Missing

		$this->set_setting( 'wp-smush-resize_sizes', $resize_sizes );
	}

	/**
	 * Parse CDN specific settings.
	 *
	 * @since 3.2.0  Moved from save method.
	 */
	private function parse_cdn_settings() {
		// $status = connect to CDN.
		if ( ! CDN_Helper::get_instance()->is_cdn_active() ) {
			$response = WP_Smush::get_instance()->api()->enable();

			// Probably an exponential back-off.
			if ( is_wp_error( $response ) ) {
				sleep( 1 ); // This is needed so we don't trigger the 597 API response.
				$response = WP_Smush::get_instance()->api()->enable( true );
			}

			// Logged error inside API.
			if ( ! is_wp_error( $response ) ) {
				$response = json_decode( $response['body'] );
				$this->set_setting( 'wp-smush-cdn_status', $response->data );
			}
		}

		$cdn_advanced_settings = $this->get_setting( 'wp-smush-cdn-advanced-settings', array() );
		if ( isset( $_POST['excluded-keywords'] ) ) {
			$exclusion_keywords = filter_input(
				INPUT_POST,
				'excluded-keywords',
				FILTER_CALLBACK,
				array(
					'options' => 'sanitize_text_field',
				)
			);

			$exclusion_keywords                         = preg_split( '/[\r\n\t ]+/', trim( $exclusion_keywords ) );
			$cdn_advanced_settings['excluded-keywords'] = $exclusion_keywords;

			$this->set_setting( 'wp-smush-cdn-advanced-settings', $cdn_advanced_settings );
		}
	}

	/**
	 * Parse lazy loading specific settings.
	 *
	 * @since 3.2.0
	 */
	private function parse_lazy_load_settings() {
		$previous_settings = $this->get_setting( 'wp-smush-lazy_load' );

		$args = array(
			'format'            => array(
				'filter' => FILTER_VALIDATE_BOOLEAN,
				'flags'  => FILTER_REQUIRE_ARRAY,
			),
			'output'            => array(
				'filter' => FILTER_VALIDATE_BOOLEAN,
				'flags'  => FILTER_REQUIRE_ARRAY,
			),
			'include'           => array(
				'filter' => FILTER_VALIDATE_BOOLEAN,
				'flags'  => FILTER_REQUIRE_ARRAY,
			),
			'exclude-pages'     => array(
				'filter'  => FILTER_CALLBACK,
				'options' => 'sanitize_text_field',
			),
			'exclude-classes'   => array(
				'filter'  => FILTER_CALLBACK,
				'options' => 'sanitize_text_field',
			),
			'footer'            => FILTER_VALIDATE_BOOLEAN,
			'native'            => FILTER_VALIDATE_BOOLEAN,
			'noscript_fallback' => FILTER_VALIDATE_BOOLEAN,
		);

		$settings = filter_input_array( INPUT_POST, $args );

		// Verify lazyload.
		if ( ! empty( $_POST['animation'] ) ) { // phpcs:ignore WordPress.Security.NonceVerification.Missing
			$settings['animation'] = map_deep( wp_unslash( $_POST['animation'] ), 'sanitize_text_field' ); // phpcs:ignore WordPress.Security.NonceVerification.Missing
		}

		// Fade-in settings.
		$settings['animation']['fadein']['duration'] = 0;
		if ( isset( $settings['animation']['duration'] ) ) {
			$settings['animation']['fadein']['duration'] = absint( $settings['animation']['duration'] );
			unset( $settings['animation']['duration'] );
		}

		$settings['animation']['fadein']['delay'] = 0;
		if ( isset( $settings['animation']['delay'] ) ) {
			$settings['animation']['fadein']['delay'] = absint( $settings['animation']['delay'] );
			unset( $settings['animation']['delay'] );
		}

		/**
		 * Spinner and placeholder settings.
		 */
		$items = array( 'spinner', 'placeholder' );
		foreach ( $items as $item ) {
			$settings['animation'][ $item ]['selected'] = isset( $settings['animation']["$item-icon"] ) ? $settings['animation']["$item-icon"] : 1;
			unset( $settings['animation']["$item-icon"] );

			// Custom spinners.
			if ( ! isset( $previous_settings['animation'][ $item ]['custom'] ) || ! is_array( $previous_settings['animation'][ $item ]['custom'] ) ) {
				$settings['animation'][ $item ]['custom'] = array();
			} else {
				// Remove empty values.
				$settings['animation'][ $item ]['custom'] = array_filter( $previous_settings['animation'][ $item ]['custom'] );
			}

			// Add uploaded custom spinner.
			if ( isset( $settings['animation']["custom-$item"] ) ) {
				if ( ! empty( $settings['animation']["custom-$item"] ) && ! in_array( $settings['animation']["custom-$item"], $settings['animation'][ $item ]['custom'], true ) ) {
					$settings['animation'][ $item ]['custom'][] = $settings['animation']["custom-$item"];
					$settings['animation'][ $item ]['selected'] = $settings['animation']["custom-$item"];
				}
				unset( $settings['animation']["custom-$item"] );
			}
		}

		// Custom color for placeholder.
		if ( ! isset( $settings['animation']['color'] ) ) {
			$settings['animation']['placeholder']['color'] = $previous_settings['animation']['placeholder']['color'];
		} else {
			$settings['animation']['placeholder']['color'] = $settings['animation']['color'];
			unset( $settings['animation']['color'] );
		}

		/**
		 * Exclusion rules.
		 */
		// Convert to array.
		if ( ! empty( $settings['exclude-pages'] ) ) {
			$settings['exclude-pages'] = preg_split( '/[\r\n\t ]+/', $settings['exclude-pages'] );
		} else {
			$settings['exclude-pages'] = array();
		}
		if ( ! empty( $settings['exclude-classes'] ) ) {
			$settings['exclude-classes'] = preg_split( '/[\r\n\t ]+/', $settings['exclude-classes'] );
		} else {
			$settings['exclude-classes'] = array();
		}

		$this->set_setting( 'wp-smush-lazy_load', $settings );
	}

	/**
	 * Parse preload specific settings.
	 *
	 * @since 3.20.0
	 */
	private function parse_preload_settings(){

		$args = array(
			'exclude-pages'   => array(
				'filter'  => FILTER_CALLBACK,
				'options' => 'sanitize_text_field',
			),
		);

		$settings = filter_input_array( INPUT_POST, $args );

		/**
		 * Exclusion rules.
		 */
		// Convert to array.
		if ( ! empty( $settings['exclude-pages'] ) ) {
			$settings['exclude-pages'] = array_filter( preg_split( '/[\r\n\t ]+/', $settings['exclude-pages'] ) );
		} else {
			$settings['exclude-pages'] = array();
		}

		$this->set_setting( 'wp-smush-preload', $settings );
	}

	private function parse_next_gen_settings() {
		$next_gen_manager = Next_Gen_Manager::get_instance();

		$next_gen_format = filter_input( INPUT_POST, 'next-gen-format', FILTER_SANITIZE_SPECIAL_CHARS );
		$next_gen_method = filter_input( INPUT_POST, 'next-gen-method', FILTER_SANITIZE_SPECIAL_CHARS );
		$next_gen_manager->activate_format( $next_gen_format );
		$next_gen_configuration = $next_gen_manager->get_active_format_configuration();

		// Update Next-Gen method.
		$next_gen_configuration->set_next_gen_method( $next_gen_method );
		// Update Next-Gen fallback.
		if ( $next_gen_configuration->direct_conversion_enabled() ) {
			$next_gen_fallback_active = filter_input( INPUT_POST, 'next-gen-fallback', FILTER_VALIDATE_BOOLEAN );
			$next_gen_configuration->set_next_gen_fallback( (bool) $next_gen_fallback_active );
		}
	}

	/**
	 * Parse access control settings on multisite.
	 *
	 * @since 3.2.2
	 *
	 * @return mixed
	 */
	private function parse_access_settings() {
		$current_value = get_site_option( self::SUBSITE_CONTROLS_OPTION_KEY );

		$new_value = filter_input( INPUT_POST, 'wp-smush-subsite-access', FILTER_SANITIZE_SPECIAL_CHARS );
		$access    = filter_input( INPUT_POST, 'wp-smush-access', FILTER_SANITIZE_SPECIAL_CHARS, FILTER_REQUIRE_ARRAY );

		if ( 'custom' === $new_value ) {
			$new_value = $access;
		}

		if ( $current_value !== $new_value ) {
			update_site_option( self::SUBSITE_CONTROLS_OPTION_KEY, $new_value );
		}

		return $new_value;
	}

	/**
	 * Apply a default configuration to lazy loading on first activation.
	 *
	 * @since 3.2.0
	 */
	public function init_lazy_load_defaults() {
		$defaults = array(
			'format'          => array(
				'jpeg'        => true,
				'png'         => true,
				'webp'        => true,
				'gif'         => true,
				'svg'         => true,
				'iframe'      => true,
				'embed_video' => false,
			),
			'output'            => array(
				'content'    => true,
				'widgets'    => true,
				'thumbnails' => true,
				'gravatars'  => true,
			),
			'animation'         => array(
				'selected'    => 'fadein', // Accepts: fadein, spinner, placeholder, false.
				'fadein'      => array(
					'duration' => 400,
					'delay'    => 0,
				),
				'spinner'     => array(
					'selected' => 1,
					'custom'   => array(),
				),
				'placeholder' => array(
					'selected' => 1,
					'custom'   => array(),
					'color'    => '#F3F3F3',
				),
			),
			'include'           => array(
				'frontpage' => true,
				'home'      => true,
				'page'      => true,
				'single'    => true,
				'archive'   => true,
				'category'  => true,
				'tag'       => true,
			),
			'exclude-pages'     => array(),
			'exclude-classes'   => array(),
			'footer'            => true,
			'native'            => false,
			'noscript_fallback' => false,
		);

		$this->set_setting( 'wp-smush-lazy_load', $defaults );
	}

	/**
	 * Check if in network admin.
	 *
	 * The is_network_admin() check does not work in ajax calls.
	 *
	 * @since 3.10.3
	 *
	 * @return bool
	 */
	public static function is_ajax_network_admin() {
		return defined( 'DOING_AJAX' ) && DOING_AJAX && isset( $_SERVER['HTTP_REFERER'] ) && preg_match( '#^' . network_admin_url() . '#i', wp_unslash( $_SERVER['HTTP_REFERER'] ) ); // phpcs:ignore WordPress.Security.ValidatedSanitizedInput.InputNotSanitized
	}

	public function is_optimize_original_images_active() {
		return ! empty( self::get_instance()->get( 'original' ) );
	}

	public function is_png2jpg_module_active() {
		return $this->is_module_active( 'png_to_jpg' );
	}

	public function is_webp_module_active() {
		return $this->is_module_active( 'webp_mod' );
	}

	public function is_avif_module_active() {
		return $this->is_module_active( 'avif_mod' );
	}

	public function is_avif_fallback_active() {
		return $this->is_avif_module_active()
		       && ! empty( self::get_instance()->get( 'avif_fallback' ) );
	}

	public function is_resize_module_active() {
		return $this->is_module_active( 'resize' );
	}

	public function is_backup_active() {
		return $this->is_module_active( 'backup' );
	}

	public function is_s3_active() {
		return $this->is_module_active( 's3' );
	}

	public function is_cdn_webp_conversion_active() {
		return $this->is_cdn_active()
		       && self::WEBP_CDN_MODE === $this->get_cdn_next_gen_conversion_mode();
	}

	public function is_cdn_avif_conversion_active() {
		return $this->is_cdn_active()
		       && self::AVIF_CDN_MODE === $this->get_cdn_next_gen_conversion_mode();
	}

	public function is_cdn_next_gen_conversion_active() {
		return $this->is_cdn_active()
		       && ! empty( $this->get_cdn_next_gen_conversion_mode() );
	}

	public function get_cdn_next_gen_conversion_mode() {
		$cdn_next_gen_mode = (int) self::get_instance()->get( self::NEXT_GEN_CDN_KEY );

		return $this->sanitize_cdn_next_gen_conversion_mode( $cdn_next_gen_mode );
	}

	public function get_cdn_next_gen_conversion_label( $cdn_next_gen_mode ) {
		$cdn_next_gen_mode  = $this->sanitize_cdn_next_gen_conversion_mode( $cdn_next_gen_mode );
		$cdn_next_gen_modes = $this->get_cdn_next_gen_modes();

		return $cdn_next_gen_modes[ $cdn_next_gen_mode ];
	}

	public function sanitize_cdn_next_gen_conversion_mode( $cdn_next_gen_mode ) {
		$cdn_next_gen_mode  = (int) $cdn_next_gen_mode;
		$cdn_next_gen_modes = $this->get_cdn_next_gen_modes();

		if ( ! isset( $cdn_next_gen_modes[ $cdn_next_gen_mode ] ) ) {
			$cdn_next_gen_mode = self::NONE_CDN_MODE;
		}

		return $cdn_next_gen_mode;
	}

	private function get_cdn_next_gen_modes() {
		return array(
			self::NONE_CDN_MODE => __( 'None', 'wp-smushit' ),
			self::WEBP_CDN_MODE => __( 'WebP', 'wp-smushit' ),
			self::AVIF_CDN_MODE => __( 'AVIF', 'wp-smushit' ),
		);
	}

	public function is_webp_direct_conversion_active() {
		return $this->is_webp_module_active()
		       && ! empty( self::get_instance()->get( 'webp_direct_conversion' ) );
	}

	public function is_automatic_compression_active() {
		return self::get_instance()->get( 'auto' );
	}

	public function is_cdn_active() {
		return $this->is_module_active( 'cdn' );
	}

	public function is_webp_fallback_active() {
		return $this->is_webp_module_active()
		       && ! empty( self::get_instance()->get( 'webp_fallback' ) );
	}

	public function is_lazyload_active() {
		return self::get_instance()->get( 'lazy_load' );
	}

	public function is_module_active( $module ) {
		$pro_modules = array(
			'cdn',
			'png_to_jpg',
			'webp_mod',
			'avif_mod',
			's3',
			'ultra',
			'preload_images',
		);

		$module_active = self::get_instance()->get( $module );
		if ( in_array( $module, $pro_modules, true ) ) {
			$module_active = $module_active && WP_Smush::is_pro();
		}

		return $module_active;
	}

	public function get_lossy_level_setting() {
		$current_level = self::get_instance()->get( 'lossy' );
		return $this->sanitize_lossy_level( $current_level );
	}

	public function sanitize_lossy_level( $lossy_level ) {
		$highest_level = $this->get_highest_lossy_level();

		if ( $lossy_level > $highest_level ) {
			return $highest_level;
		}

		if ( $lossy_level > self::LEVEL_LOSSLESS ) {
			return (int) $lossy_level;
		}

		return self::LEVEL_LOSSLESS;
	}

	public function get_highest_lossy_level() {
		if ( WP_Smush::is_pro() ) {
			return self::LEVEL_ULTRA_LOSSY;
		}
		return self::LEVEL_SUPER_LOSSY;
	}

	public function get_current_lossy_level_label() {
		$current_level = $this->get_lossy_level_setting();
		return $this->get_lossy_level_label( $current_level );
	}

	public function get_lossy_level_label( $lossy_level ) {
		$smush_modes = array(
			self::LEVEL_LOSSLESS    => __( 'Basic', 'wp-smushit' ),
			self::LEVEL_SUPER_LOSSY => __( 'Super', 'wp-smushit' ),
			self::LEVEL_ULTRA_LOSSY => __( 'Ultra', 'wp-smushit' ),
		);
		if ( ! isset( $smush_modes[ $lossy_level ] ) ) {
			$lossy_level = self::LEVEL_LOSSLESS;
		}

		return $smush_modes[ $lossy_level ];
	}

	public function get_large_file_cutoff() {
		return apply_filters( 'wp_smush_large_file_cut_off', 32 * 1024 * 1024 );
	}

	public function has_bulk_smush_page() {
		return $this->is_page_active( 'bulk' );
	}

	public function has_cdn_page() {
		return $this->is_page_active( 'cdn' );
	}

	public function has_webp_page() {
		_deprecated_function( __METHOD__, '3.8.0', 'Settings::has_next_gen_page()' );
		return $this->has_next_gen_page();
	}

	public function has_next_gen_page() {
		return $this->is_page_active( 'next-gen' );
	}

	public function has_lazy_preload_page() {
		return $this->is_page_active( self::LAZY_PRELOAD_MODULE_NAME );
	}

	public function streaming_enabled() {
		if ( defined( 'WP_SMUSH_USE_STREAMS' ) ) {
			return (bool) WP_SMUSH_USE_STREAMS;
		}

		return self::get_instance()->get( 'disable_streams' ) != WP_SMUSH_VERSION;
	}

	public function is_lcp_preload_enabled() {
		return $this->is_module_active( 'preload_images' );
	}

	private function is_page_active( $page_slug ) {
		if ( ! is_multisite() ) {
			return true;
		}

		$module                    = $this->slug_to_module( $page_slug );
		$is_page_active_on_subsite = in_array( $module, $this->get_activated_subsite_modules(), true );

		if ( is_network_admin() ) {
			return ! $is_page_active_on_subsite;
		}

		return $is_page_active_on_subsite;
	}

	private function slug_to_module( $page_slug ) {
		return str_replace( '-', '_', $page_slug );
	}

	/**
	 * @return array
	 */
	private function get_activated_subsite_modules() {
		if ( ! is_array( $this->activated_subsite_modules ) ) {
			$this->activated_subsite_modules = $this->prepare_activated_subsite_modules();
		}

		return $this->activated_subsite_modules;
	}

	/**
	 * @return array
	 */
	private function prepare_activated_subsite_modules() {
		$subsite_controls = get_site_option( self::SUBSITE_CONTROLS_OPTION_KEY );
		// None:false|All:1|Custom:array list page modules.
		if ( empty( $subsite_controls ) ) {
			return array();
		}

		$subsite_modules = $this->get_subsite_modules();
		if ( is_array( $subsite_controls ) ) {
			$subsite_modules = $subsite_controls;
		}

		return $subsite_modules;
	}

	private function get_subsite_modules() {
		return array(
			'bulk',
			'integrations',
			self::LAZY_PRELOAD_MODULE_NAME,
			'cdn',
		);
	}

	/**
	 * Get $content_width global var value.
	 */
	public function max_content_width() {
		// Get global content width (if content width is empty, set 1920).
		$content_width = isset( $GLOBALS['content_width'] ) ? (int) $GLOBALS['content_width'] : 1920;

		// Avoid situations, when themes misuse the global.
		if ( 0 === $content_width ) {
			$content_width = 1920;
		}

		// Check to see if we are resizing the images (can not go over that value).
		$resize_sizes = $this->get_setting( 'wp-smush-resize_sizes' );

		if ( isset( $resize_sizes['width'] ) && $resize_sizes['width'] < $content_width ) {
			return $resize_sizes['width'];
		}

		return $content_width;
	}
}
