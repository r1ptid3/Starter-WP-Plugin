<?php
/**
 * Starter r1ptid3's WP Plugin
 *
 * @since             1.0.0
 * @package           Sample
 *
 * @wordpress-plugin
 * Plugin Name:       Starter Plugin
 * Description:       Starter r1ptid3's WP Plugin
 * Version:           1.0.0
 * Author:            r1ptid3
 * Author URI:        https://github.com/r1ptid3
 * License:           GNU General Public License v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-3.0.en.html
 * Text Domain:       sample
 * Domain Path:       /languages
 */

// Enable strict typing mode.
declare( strict_types = 1 );

// Disable direct access.
if ( ! defined( 'ABSPATH' ) ) {
	die;
}

// Currently plugin version.
define( 'SAMPLE_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 *
 * @return  void
 */
function activate_sample(): void {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-sample-activator.php';
	Sample_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 *
 * @return  void
 */
function deactivate_sample(): void {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-sample-deactivator.php';
	Sample_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_sample' );
register_deactivation_hook( __FILE__, 'deactivate_sample' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-sample.php';

/**
 * Begins execution of the plugin.
 *
 * @since    1.0.0
 *
 * @return  void
 */
function run_sample(): void {

	$plugin = new Sample();
	$plugin->run();

}
run_sample();
