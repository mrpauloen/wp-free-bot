<?php
/**
 * @package  AlecadddPlugin
 */

class WPFreeBotActivate
{
	public static function activate() {
		flush_rewrite_rules();
	}
}