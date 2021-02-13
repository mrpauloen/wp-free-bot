<?php
/**
 * Plugin name: WP Free Bot
 * Description: Zaawansowany autoresponder i newsletter w jednym
 * Author: Paweł Nowak
 * Author URI: https://github.com/mrpauloen/
 */

 if ( ! defined( 'ABSPATH' ) ){
	die;
 }

if ( file_exists( dirname( __FILE__ ) . '/vendor/autoload.php' ) ) {
	require_once dirname( __FILE__ ) . '/vendor/autoload.php';
}

define( 'PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
define( 'PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'PLUGIN', plugin_basename( __FILE__ ) );


if ( class_exists( 'Inc\\Init') ){
	Inc\Init::register_services();
}
