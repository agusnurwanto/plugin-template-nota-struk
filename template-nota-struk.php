<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              maremjaya.com
 * @since             1.0.0
 * @package           Template_Nota_Struk
 *
 * @wordpress-plugin
 * Plugin Name:       Template Nota / Struk
 * Plugin URI:        maremjaya.com
 * Description:       Plugin untuk membuat template nota atau struk dari berbagai macam usaha
 * Version:           1.0.0
 * Author:            Agus Nurwanto
 * Author URI:        maremjaya.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       template-nota-struk
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
define( 'TEMPLATE_NOTA_STRUK_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-template-nota-struk-activator.php
 */
function activate_template_nota_struk() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-template-nota-struk-activator.php';
	Template_Nota_Struk_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-template-nota-struk-deactivator.php
 */
function deactivate_template_nota_struk() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-template-nota-struk-deactivator.php';
	Template_Nota_Struk_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_template_nota_struk' );
register_deactivation_hook( __FILE__, 'deactivate_template_nota_struk' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-template-nota-struk.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_template_nota_struk() {

	$plugin = new Template_Nota_Struk();
	$plugin->run();

}
run_template_nota_struk();
