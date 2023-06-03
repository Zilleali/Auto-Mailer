<?php


/**
 * Auto Mailer
 *
 * @package           PluginPackage
 * @author            ZILLEALI
 * @copyright         2023 Developer Zone
 * @license           GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name:       Auto Mailer
 * Plugin URI:        https://example.com/plugin-name
 * Description:       Introducing EmailBot, the ultimate automation email sender plugin designed to streamline your communication process. With EmailBot, your users can easily subscribe to your blog or website's updates and receive email notifications right in their inbox.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            ZILLEALI
 * Author URI:        https://zilleali.com
 * Text Domain:       auto-mailer
 * License:           GPL v2 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Update URI:        https://example.com/my-plugin/
 */

 if (!defined('ABSPATH')) {
	exit;
}

/**
 * Currently plugin version.
 */
define( 'auto-mailer_VERSION', '1.0.0' );


// include('auto-mailer_PLUGIN_DIR."includes/menu.php"')
// Plugin Folder Path.
if (!defined('auto-mailer_PLUGIN_DIR')) {
	define('auto-mailer_PLUGIN_DIR', plugin_dir_path(__FILE__));
}

// Plugin Folder URL.
if (!defined('auto-mailer_PLUGIN_URL')) {
	define('auto-mailer_PLUGIN_URL', plugin_dir_url(__FILE__));
}

// Plugin Root File.
if (!defined('auto-mailer_PLUGIN_FILE')) {
	define('auto-mailer_PLUGIN_FILE', __FILE__);
}




/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-plugin-name-activator.php
 */
function activate_auto_mailer() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-auto-mailer-activator.php';
	auto_mailer_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-plugin-name-deactivator.php
 */
function deactivate_auto_mailer() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-auto-mailer-deactivator.php';
	auto_mailer_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_auto_mailer' );
register_deactivation_hook( __FILE__, 'deactivate_auto_mailer' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-auto-mailer.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
// function run_auto_mailer() {

// 	$plugin = new auto_mailer();
// 	$plugin-> run();

// }
// run_auto_mailer();



add_action('admin_menu', 'auto_mailer_menu');

function auto_mailer_menu() {
    add_menu_page(
        'Auto Mailer', // Page title
        'Auto Mailer', // Menu title
        'manage_options', // Capability required to access the menu
        'auto-mailer-menu', // Menu slug
        'function_all_email', // Callback function to render the menu page
        'dashicons-email', // Menu icon
        20 // Menu position
        
    );

    add_submenu_page(
        'auto-mailer-menu', // Parent menu slug
        'All Emails', // Page title
        'All Emails', // Menu title
        'manage_options', // Capability required to access the submenu
        plugin_dir_path(__FILE__)."admin/function_all_email.php", // Submenu slug

    );

    add_submenu_page(
        'auto-mailer-menu', // Parent menu slug
        'Add New', // Page title
        'Add New', // Menu title
        'manage_options', // Capability required to access the submenu
        plugin_dir_path(__FILE__)."admin/function_add_new.php", // Submenu slug

    );

    add_submenu_page(
        'auto-mailer-menu', // Parent menu slug
        'Email Categories', // Page title
        'Email Categories', // Menu title
        'manage_options', // Capability required to access the submenu
        plugin_dir_path(__FILE__)."admin/function_email_catagories.php", // Submenu slug

    );

    add_submenu_page(
        'auto-mailer-menu', // Parent menu slug
        'All Email Logs', // Page title
        'All Email Logs', // Menu title
        'manage_options', // Capability required to access the submenu
        plugin_dir_path(__FILE__)."admin/function_all_email_logs.php", // Submenu slug

    );

    add_submenu_page(
        'auto-mailer-menu', // Parent menu slug
        'About Us', // Page title
        'About Us', // Menu title
        'manage_options', // Capability required to access the submenu
        plugin_dir_path(__FILE__)."admin/function_about_us.php", // Submenu slug

    );

    add_submenu_page(
        'auto-mailer-menu', // Parent menu slug
        'Lists', // Page title
        'Lists', // Menu title
        'manage_options', // Capability required to access the submenu
        plugin_dir_path(__FILE__)."admin/function_lists.php", // Submenu slug

    );

    add_submenu_page(
        'auto-mailer-menu', // Parent menu slug
        'User Stats', // Page title
        'User Stats', // Menu title
        'manage_options', // Capability required to access the submenu
        plugin_dir_path(__FILE__)."admin/function_user_stats.php", // Submenu slug
    );

    add_submenu_page(
        'auto-mailer-menu', // Parent menu slug
        'Settings', // Page title
        'Settings', // Menu title
        'manage_options', // Capability required to access the submenu
        plugin_dir_path(__FILE__)."admin/function_setting.php" // Callback function to render the submenu page
    );
}




// function auto_mailer_submenu_page() {
//     // Code to render the submenu page HTML
//     echo '<h1>Auto Mailer Submenu Page</h1>';
// }



// 	}









 ?>