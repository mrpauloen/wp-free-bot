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

  if ( class_exists( 'WPFreeBot' ) ) {

 class WPFreeBot
 {

	 function register() {
		add_action( 'admin_enqueue_scripts', array( $this, 'enqueue' ) );

		add_action( 'admin_menu', array( $this, 'add_admin_pages') );
	}

	public function add_admin_pages(){
		add_menu_page(
			'WPFreeBot',
			'WP Free Bot',
			'manage_options',
			'wp_free_bot',
			array( $this, 'admin_index' ),
			'dashicons-buddicons-replies',
			6
		);
	}

	public function admin_index(){
		require_once plugin_dir_path( __FILE__ ) . 'templates/admin.php';

	}

	protected function create_post_type() {
		add_action( 'init', array( $this, 'custom_post_type' ) );
	}

	 function custom_post_type(){

		 $args = array(
			'public' => true,
			'label' => 'Newsletter',
			'menu_icon' => 'dashicons-bell',
		 );
		 register_post_type( 'newsletter', $args );
	 }

	function enqueue() {
		// enqueue all our scripts
		wp_enqueue_style( 'style', plugins_url( '/assets/style.css', __FILE__ ) );
		wp_enqueue_script( 'script', plugins_url( '/assets/script.js', __FILE__ ) );
	}

	 function activate() {
		require_once plugin_dir_path( __FILE__ ) . 'inc/activate.php';
		WPFreeBotActivate::activate();
	}
 }


	 $wpFreeBot = new WPFreeBot();
	 $wpFreeBot->register();


 // activation
	register_activation_hook( __FILE__, array( $wpFreeBot, 'activate' ) );

	// deactivation
	require_once plugin_dir_path( __FILE__ ) . 'inc/deactivate.php';
	register_deactivation_hook( __FILE__, array( 'WPFreeBotDeactivate', 'deactivate' ) );

}
