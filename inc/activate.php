<?php
/**
 * 
 */

class WPFreeBotActivate
{
	public static function activate() {
		flush_rewrite_rules();
	}
}
