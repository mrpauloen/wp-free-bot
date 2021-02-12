<?php

namespace Inc\Pages;
/**
 *
 */
class Admin
{

	public function register(){
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
		require_once PLUGIN_PATH . 'templates/admin.php';

	}
}
