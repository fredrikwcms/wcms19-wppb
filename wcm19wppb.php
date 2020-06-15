<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              www.data-lord.se
 * @since             1.0.0
 * @package           Wcm19wppb
 *
 * @wordpress-plugin
 * Plugin Name:       My First WPPB
 * Plugin URI:        http://lmgtfy.com
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Fredrik Larsson
 * Author URI:        www.data-lord.se
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wcm19wppb
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
define( 'WCM19WPPB_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wcm19wppb-activator.php
 */
function activate_wcm19wppb() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wcm19wppb-activator.php';
	Wcm19wppb_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wcm19wppb-deactivator.php
 */
function deactivate_wcm19wppb() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wcm19wppb-deactivator.php';
	Wcm19wppb_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_wcm19wppb' );
register_deactivation_hook( __FILE__, 'deactivate_wcm19wppb' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wcm19wppb.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wcm19wppb() {

	$plugin = new Wcm19wppb();
	$plugin->run();

}
run_wcm19wppb();
