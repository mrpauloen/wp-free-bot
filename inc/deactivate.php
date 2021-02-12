<?php
/**
 * @package  AlecadddPlugin
 */

class WPFreeBotDeactivate
{
	public static function deactivate() {
		flush_rewrite_rules();
	}
}