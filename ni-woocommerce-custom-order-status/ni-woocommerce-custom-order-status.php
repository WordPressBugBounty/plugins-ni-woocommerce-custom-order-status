<?php
/*
Plugin Name: Ni WooCommerce Custom Order Status
Description: WooCommerce Custom Order Status plugin allows you to create and manage new order statuses for WooCommerce and also display order status reports.
Version: 2.2.7
Author: Anzia
Author URI: https://naziinfotech.com/
Plugin URI: https://wordpress.org/plugins/ni-woocommerce-custom-order-status/
License: GPLv3 or later
License URI: https://www.gnu.org/licenses/gpl-3.0.html

Requires at least: 5.0
Tested up to: 6.9.1
Requires PHP: 7.4

Requires Plugins: woocommerce

WC requires at least: 4.0
WC tested up to: 9.7

Text Domain: niwoocos
Domain Path: /languages/
*/
if ( ! defined( 'ABSPATH' ) ) { exit;}
if( !class_exists( 'ni_custom_order_status' ) ) {
	class ni_custom_order_status{
		
		var $constant =  array(
            "is_hpos_enabled" => false // Initialize with default value
        );
		
		public function __construct(){
			
			
			add_action( 'before_woocommerce_init',  array(&$this,'before_woocommerce_init') );
			add_action('plugins_loaded', array($this, 'plugins_loaded'));
		}
		function before_woocommerce_init(){
			if ( class_exists( \Automattic\WooCommerce\Utilities\FeaturesUtil::class ) ) {
				\Automattic\WooCommerce\Utilities\FeaturesUtil::declare_compatibility( 'custom_order_tables', __FILE__, true );
			}	 
		}
		function plugins_loaded(){
			
			 if ( ! class_exists( 'WooCommerce' ) ) {

			        deactivate_plugins( plugin_basename( __FILE__ ) );

				add_action( 'admin_notices', function() {
					echo '<div class="error"><p><strong>Ni Cost of Goods for WooCommerce</strong> requires WooCommerce to be installed and active.</p></div>';
				});

			}
			
			include_once('include/ni-custom-order-status-init.php'); 
			$obj = new ni_custom_order_status_init();  
			
			require_once("include/ni-custom-order-status-bulk-action.php");
			$obj_bulk = new ni_custom_order_status_bulk_action();
			
			require_once("include/ni-custom-order-status-email.php");
			$obj_email = new ni_custom_order_status_email();
			
			require_once("include/ni-custom-order-status-setting.php");
			$obj_setting = new ni_custom_order_status_setting();
			
		}
		function set_hpos_enabled() {
			if (  class_exists( '\Automattic\WooCommerce\Utilities\OrderUtil' ) ) {
				if ( \Automattic\WooCommerce\Utilities\OrderUtil::custom_orders_table_usage_is_enabled() ) {
					$this->constant["is_hpos_enabled"] = true;
				} else {
					$this->constant["is_hpos_enabled"] = false;
				}
			}
            
        }
	}
	$objcustome = new  ni_custom_order_status();
}