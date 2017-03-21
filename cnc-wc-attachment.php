<?php
/*
Plugin Name: CnC Woocommerce Product Attachment
Plugin URI: http://colorandcode.hu
Description: Add a file attachment field to product. The plugin requires ACF
Version: 1.0
Author: docker
Author URI: https://hu.linkedin.com/in/docker
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function __cnc_wcatt_load_plugin()
{
	// load translations
	load_plugin_textdomain( 'cnc-wc-attachment', false, 'cnc-wc-attachment/languages' );

	// instantiate classes to register hooks
	require_once('includes/Controller.php');
	$controller = new cncWATT\Controller();
}

add_action('plugins_loaded', '__cnc_wcatt_load_plugin');

