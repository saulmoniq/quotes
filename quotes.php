<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://saulmoniquedev.com/
 * @since             1.0.0
 * @package           Quotes
 *
 * @wordpress-plugin
 * Plugin Name:       quotes
 * Plugin URI:        https://saulmoniquedev.com/servicios-pagina-web/
 * Description:       Making quotes easier with complex selection for clients.
 * Version:           1.0.0
 * Author:            Saul Monique
 * Author URI:        https://saulmoniquedev.com//
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       quotes
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'QUOTES_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-quotes-activator.php
 */
function activate_quotes() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-quotes-activator.php';
	Quotes_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-quotes-deactivator.php
 */
function deactivate_quotes() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-quotes-deactivator.php';
	Quotes_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_quotes' );
register_deactivation_hook( __FILE__, 'deactivate_quotes' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-quotes.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_quotes() {

	$plugin = new Quotes();
	$plugin->run();

}
run_quotes();



?>