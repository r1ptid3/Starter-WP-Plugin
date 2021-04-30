<?php
/**
 * The admin-specific functionality of the plugin.
 *
 * @since      1.0.0
 *
 * @package    Sample
 * @subpackage Sample/admin
 */

// Enable strict typing mode.
declare( strict_types = 1 );

/**
 * The admin-specific functionality of the plugin.
 *
 * An instance of this class should be passed to the run() function
 *
 * Defines the plugin name, version, and enqueue
 * the admin-specific stylesheet and JavaScript.
 *
 * @package    Sample
 * @subpackage Sample/admin
 */
class Sample_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 *
	 * @access   private
	 * @var      string $plugin_name - The ID of this plugin.
	 */
	private string $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 *
	 * @access   private
	 * @var      string $version - The current version of this plugin.
	 */
	private string $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 *
	 * @param    string $plugin_name - The name of this plugin.
	 * @param    string $version - The version of this plugin.
	 */
	public function __construct( string $plugin_name, string $version ) {

		$this->plugin_name = $plugin_name;
		$this->version     = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles(): void {

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/sample-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts(): void {

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/sample-admin.js', array( 'jquery' ), $this->version, false );

	}

}
