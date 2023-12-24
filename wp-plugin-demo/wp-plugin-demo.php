<?php
/**
 * Plugin Name: WP Plugin Demo
 * Plugin URI: https://github.com/Php-Ninja-Dev/phpninja-warzone
 * Description: Connects with an API endpoint on specific WooCommerce events.
 * Version: 1.0.0
 * Author: Php Ninja Developer
 * Author URI: https://github.com/Php-Ninja-Dev
 * License: GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 *
 * WC requires at least: 3.0.0
 * WC tested up to: 5.6.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

// Code for WooCommerce events, filters, actions and setting page will go here.

/**
 * Activation hook.
 */
function wp_plugin_demo_activate() {
    // Activation code here.
}
register_activation_hook( __FILE__, 'wp_plugin_demo_activate' );

/**
 * Deactivation hook.
 */
function wp_plugin_demo_deactivate() {
    // Deactivation code here.
}
register_deactivation_hook( __FILE__, 'wp_plugin_demo_deactivate' );

// Other hooks and code related to plugin functionality.
