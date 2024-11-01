<?php
/**
 * Plugin Name:       WooCommerce zooming image
 * Description:       Highly customizable product image zoom plugin for Woocommerce Store. 
 * Version:           2.0
 * Author:            Raihanul Islam
 * Author URI:http://raihanislamcse.me        


if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly 

/**
 * Localization
 */

function wzi_wiz_textdomain() {
	load_plugin_textdomain( 'woocommerce-image-zoom', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
}
add_action( 'init', 'wzi_wiz_textdomain' );




function wzi_wiz_adding_scripts() {
	if (!is_admin()) {
		wp_register_script('wpb-wiz-elevatezoom', plugins_url('assets/js/jquery.elevateZoom-3.0.8.min.js', __FILE__),array('jquery'),'3.0.8', false);
		wp_register_script('wpb-wiz-plugin-main', plugins_url('assets/js/main.js', __FILE__),array('jquery'),'1.0', true);
		wp_enqueue_script('wpb-wiz-elevatezoom');
		wp_enqueue_script('wpb-wiz-plugin-main');
	}
}
add_action( 'wp_enqueue_scripts', 'wzi_wiz_adding_scripts' ); 


/**
 * Require Files
 */

require_once dirname( __FILE__ ) . '/inc/wpb-wiz-filter.php';