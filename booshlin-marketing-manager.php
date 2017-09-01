<?php
/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://example.com
 * @since             1.0.0
 * @package           Booshlin Marketing Manager
 *
 * @wordpress-plugin
 * Plugin Name:       Booshlin Marketing Manager
 * Plugin URI:        http://www.booshlin.com/marketing-manager/
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Nick Breslin
 * Author URI:        https://github.com/nickbreslin
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       booshlin-marketing-manager
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

define( PLUGIN_VERSION, '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-booshlin-marketing-manager-activator.php
 */
function activate_booshlin_marketing_manager() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-booshlin-marketing-manager-activator.php';
	Booshlin_Marketing_Manager_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-booshlin_marketing_manager-deactivator.php
 */
function deactivate_booshlin_marketing_manager() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-booshlin-marketing-manager-deactivator.php';
	Booshlin_Marketing_Manager_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_booshlin_marketing_manager' );
register_deactivation_hook( __FILE__, 'deactivate_booshlin_marketing_manager' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-booshlin_marketing_manager.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_booshlin_marketing_manager() {

	$plugin = new Booshlin_Margeting_Manager();
	$plugin->run();

}

run_booshlin_marketing_manager();
