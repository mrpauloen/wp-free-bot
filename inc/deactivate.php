<?php
/**
 * 
 */

class WPFreeBotDeactivate
{
	public static function deactivate() {
		flush_rewrite_rules();
	}
}
