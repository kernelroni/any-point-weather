<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/kernelroni
 * @since             1.0.0
 * @package           Any_Point_Weather
 *
 * @wordpress-plugin
 * Plugin Name:       Any Point Weather
 * Plugin URI:        https://github.com/kernelroni/any-point-weather
 * Description:       Click on Map and Get weather report instantlay
 * Version:           1.0.0
 * Author:            Rani Das
 * Author URI:        https://github.com/kernelroni
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       any-point-weather
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
define( 'ANY_POINT_WEATHER_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-any-point-weather-activator.php
 */
function activate_any_point_weather() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-any-point-weather-activator.php';
	Any_Point_Weather_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-any-point-weather-deactivator.php
 */
function deactivate_any_point_weather() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-any-point-weather-deactivator.php';
	Any_Point_Weather_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_any_point_weather' );
register_deactivation_hook( __FILE__, 'deactivate_any_point_weather' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-any-point-weather.php';
require_once plugin_dir_path( __FILE__ ) . 'admin/menu/any-point-weather-menu.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_any_point_weather() {

	$plugin = new Any_Point_Weather();
	$plugin->run();

}
run_any_point_weather();
