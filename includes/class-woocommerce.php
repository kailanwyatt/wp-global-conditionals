<?php
/**
 * WP Global Conditionals Woocommerce
 *
 * @since 1.0.0
 * @package WP Global Conditionals
 */

/**
 * WP Global Conditionals Woocommerce.
 *
 * @since 1.0.0
 */
class WPGC_Woocommerce {
	/**
	 * Parent plugin class
	 *
	 * @var   WP_Global_Conditionals
	 * @since 1.0.0
	 */
	protected $plugin = null;

	/**
	 * Constructor
	 *
	 * @since  1.0.0
	 * @param  WP_Global_Conditionals $plugin Main plugin object.
	 * @return void
	 */
	public function __construct( $plugin ) {
		$this->plugin = $plugin;
		$this->hooks();
	}

	/**
	 * Initiate our hooks
	 *
	 * @since  1.0.0
	 * @return void
	 */
	public function hooks() {
	}
}
