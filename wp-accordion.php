<?php

/**
 * @link              mailto:shellysajudev@gmail.com
 * @since             1.0.0
 * @package           Wp_Accordion
 *
 * @wordpress-plugin
 * Plugin Name:       WP Accordion
 * Plugin URI:        mailto:shellysajudev@gmail.com
 * Description:       Add Accordion widgets in your Sidebar
 * Version:           1.0.0
 * Author:            SCS Dev
 * Author URI:        mailto:shellysajudev@gmail.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wp-accordion
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 */
define( 'WP_ACCORDION_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 */
function activate_wp_accordion() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-accordion-activator.php';
	Wp_Accordion_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 */
function deactivate_wp_accordion() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-accordion-deactivator.php';
	Wp_Accordion_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_wp_accordion' );
register_deactivation_hook( __FILE__, 'deactivate_wp_accordion' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wp-accordion.php';

/**
 * Begins execution of the plugin.
 */
function run_wp_accordion() {

	$plugin = new Wp_Accordion();
	$plugin->run();

}
run_wp_accordion();
