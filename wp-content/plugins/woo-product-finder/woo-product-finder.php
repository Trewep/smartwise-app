<?php
/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              
 * @since             1.0.0
 * @package           Woo_Product_Finder
 *
 * @wordpress-plugin
 * Plugin Name:       Smartwise wizard based on Product Finder for WooCommerce 
 * Plugin URI:        
 * Description:       Take always a backup before update this plugin.
 * Version:           1.0.0
 * Author:            
 * Author URI:        
 * License:           
 * License URI:       
 * Text Domain:       
 * Domain Path:       /languages
 */
// If this file is called directly, abort.
if (!defined('ABSPATH')) {
    exit;
}

if (!defined('WPF_PLUGIN_URL')) {
    define('WPF_PLUGIN_URL', plugin_dir_url(__FILE__));
}
if (!defined('WPF_PLUGIN_DIR')) {
    define('WPF_PLUGIN_DIR', dirname(__FILE__));
}
if (!defined('WPF_PLUGIN_DIR_PATH')) {
    define('WPF_PLUGIN_DIR_PATH', plugin_dir_path(__FILE__));
}
if (!defined('WPF_PLUGIN_BASENAME')) {
    define('WPF_PLUGIN_BASENAME', plugin_basename(__FILE__));
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-woo-product-finder-activator.php
 */
function activate_woo_product_recommendation_wizard() {
    require_once plugin_dir_path(__FILE__) . 'includes/class-woo-product-finder-activator.php';
    Woo_Product_Finder_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-woo-product-finder-deactivator.php
 */
function deactivate_woo_product_recommendation_wizard() {
    require_once plugin_dir_path(__FILE__) . 'includes/class-woo-product-finder-deactivator.php';
    Woo_Product_Finder_Deactivator::deactivate();
}

register_activation_hook(__FILE__, 'activate_woo_product_recommendation_wizard');
register_deactivation_hook(__FILE__, 'deactivate_woo_product_recommendation_wizard');

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path(__FILE__) . 'includes/class-woo-product-finder.php';

/**
 * Define all constants
 */
require plugin_dir_path(__FILE__) . 'includes/constant.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_woo_product_recommendation_wizard() {

    $plugin = new Woo_Product_Finder();
    $plugin->run();
}
run_woo_product_recommendation_wizard();