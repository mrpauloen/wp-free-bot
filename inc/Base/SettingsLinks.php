<?php

namespace Inc\Base;
use \Inc\Base\BaseController;

class SettingsLinks extends BaseController
{

	public function register() {
		add_filter( 'plugin_action_links_' . $this->plugin, array( $this, 'settings_link' ) );
	}

	public function settings_link( $links ) {
		$settings_link = '<a href="' . admin_url( 'admin.php?page=wp_free_bot' ) . '">Settings</a>';
		array_push( $links, $settings_link );
		return $links;
	}
}
