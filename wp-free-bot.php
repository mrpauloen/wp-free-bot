<?php
/**
 * Plugin name: WP Free Bot
 * Description: Zaawansowany autoresponder i newsletter w jednym
 * Author: Paweł Nowak
 * Author URI: https://github.com/mrpauloen/
 */


 // If this file is called firectly, abort!!!
 defined( 'ABSPATH' ) or die( 'Hey, what are you doing here? You silly human!' );

 // Require once the Composer Autoload
 if ( file_exists( dirname( __FILE__ ) . '/vendor/autoload.php' ) ) {
 	require_once dirname( __FILE__ ) . '/vendor/autoload.php';
 }

 /**
  * The code that runs during plugin activation
  */
 function activate_wp_free_bot_plugin() {
 	Inc\Base\Activate::activate();
 }
 register_activation_hook( __FILE__, 'activate_wp_free_bot_plugin' );

 /**
  * The code that runs during plugin deactivation
  */
 function deactivate_wp_free_bot_plugin() {
 	Inc\Base\Deactivate::deactivate();
 }
 register_deactivation_hook( __FILE__, 'deactivate_wp_free_bot_plugin' );

 /**
  * Initialize all the core classes of the plugin
  */
 if ( class_exists( 'Inc\\Init' ) ) {
 	Inc\Init::register_services();
 }
