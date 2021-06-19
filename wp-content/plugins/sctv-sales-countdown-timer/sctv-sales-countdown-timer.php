<?php
/**
 * Plugin Name: Sales Countdown Timer Premium for WooCommerce and WordPress
 * Plugin URI: https://villatheme.com/extensions/sales-countdown-timer/
 * Description: Create a sense of urgency with a countdown to the beginning or end of sales, store launch or other events for higher conversions.
 * Version: 1.0.1.3
 * Author: VillaTheme
 * Author URI: http://villatheme.com
 * Text Domain: sales-countdown-timer
 * Domain Path: /languages
 * Copyright 2019-2020 VillaTheme.com. All rights reserved.
 * Tested up to: 5.5
 * WC requires at least: 3.2.0
 * WC tested up to: 4.4
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
define( 'VI_SCT_SALES_COUNTDOWN_TIMER_VERSION', '1.0.1.3' );
/**
 * Detect plugin. For use on Front End only.
 */

include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
$init_file = WP_PLUGIN_DIR . DIRECTORY_SEPARATOR . "sctv-sales-countdown-timer" . DIRECTORY_SEPARATOR . "includes" . DIRECTORY_SEPARATOR . "define.php";
require_once $init_file;

/**
 * Class VI_SCT_SALES_COUNTDOWN_TIMER
 */
class VI_SCT_SALES_COUNTDOWN_TIMER {
	public function __construct() {

		register_activation_hook( __FILE__, array( $this, 'install' ) );
		register_deactivation_hook( __FILE__, array( $this, 'uninstall' ) );
//		add_action( 'activated_plugin', array( $this, 'activated_plugin' ) );
	}

	/**
	 * When active plugin Function will be call
	 */
	public function install() {
		global $wp_version;
		if ( version_compare( $wp_version, "4.4", "<" ) ) {
			deactivate_plugins( basename( __FILE__ ) ); // Deactivate our plugin
			wp_die( "This plugin requires WordPress version 4.4 or higher." );
		}
	}

	/**
	 * When deactive function will be call
	 */
	public function uninstall() {

	}
	function activated_plugin( $plugin ) {
		if ( $plugin === 'sctv-sales-countdown-timer/sctv-sales-countdown-timer.php' && is_plugin_active( 'woocommerce/woocommerce.php' ) ) {
			if (! empty( get_option( 'sales_countdown_timer_params', array() ) )){
				ob_start();
				var_dump('wc_get_product_ids_on_sale()');
				var_dump(wc_get_product_ids_on_sale());
				$a=ob_get_clean();
				error_log($a);

				$product_ids_on_sale = wc_get_product_ids_on_sale();
				foreach ( $product_ids_on_sale as $product_id ) {
					$product = wc_get_product( $product_id );
					if ( ! $product ) {
						continue;
					}
					if ( ! $product->get_sale_price( 'edit' ) ) {
						continue;
					}
					if ( get_post_meta( $product_id, '_sale_price_times_to', true ) ) {
						if ( $product->get_date_on_sale_from( 'edit' ) && $product->get_date_on_sale_from( 'edit' )->getTimestamp() ) {
							if ( current_time( 'timestamp', true ) < $product->get_date_on_sale_from( 'edit' )->getTimestamp() ) {
								update_post_meta( $product_id, '_price', $product->get_regular_price( 'edit' ) );
								$product->set_price( $product->get_regular_price( 'edit' ) );
								wp_schedule_single_event( $product->get_date_on_sale_from( 'edit' )->getTimestamp(),
									'sctv_schedule_sale_product',
									array( $product_id ) );
							} else {
								update_post_meta( $product_id, '_price', $product->get_sale_price( 'edit' ) );
								$product->set_price( $product->get_sale_price( 'edit' ) );
							}
						}
						if ( $product->get_date_on_sale_to( 'edit' ) && $product->get_date_on_sale_to( 'edit' )->getTimestamp() ) {
							if ( current_time( 'timestamp', true ) < $product->get_date_on_sale_to( 'edit' )->getTimestamp() ) {
								wp_schedule_single_event( $product->get_date_on_sale_to( 'edit' )->getTimestamp(),
									'sctv_schedule_remove_sale_product',
									array( $product_id ) );
							} else {
								$regular_price = $product->get_regular_price();
								$product->set_price( $regular_price );
								$product->set_sale_price( '' );
								$product->set_date_on_sale_to( '' );
								$product->set_date_on_sale_from( '' );
								$product->save();
								delete_post_meta( $product_id, '_sale_price_times_from' );
								delete_post_meta( $product_id, '_sale_price_times_to' );
								delete_post_meta( $product_id, '_woo_ctr_product_sold_quantity' );
							}
						}
					}
				}
				set_transient( '_sales_countdown_timer_set_schedule', current_time( 'timestamp' ), 180 * DAY_IN_SECONDS );
			}
		}
	}
}

new VI_SCT_SALES_COUNTDOWN_TIMER();