<?php

namespace Inc\Base;

class SettingsLinks
{

	public function register() {
		add_filter( 'plugin_action_links_' . PLUGIN, array( $this, 'settings_link' ) );
	}

	public function settings_link( $links ) {
		$settings_link = '<a href="' . admin_url( 'admin.php?page=wp_free_bot' ) . '">Settings</a>';
		array_push( $links, $settings_link );
		return $links;
	}
}
