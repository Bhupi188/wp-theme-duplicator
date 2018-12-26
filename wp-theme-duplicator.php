<?php
/**
 * Plugin Name: WP Theme Duplicator
 * Version:     1.0.0
 * Plugin URI:  https://wordpress.org/support/plugin/wp-theme-duplicator/
 * Author:      Bhupender Singh
 * Author URI:  http://www.spraynt.com/
 * Text Domain: wp-theme-duplicator
 * License:     GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 * Description: WordPress Login, registration and forgot password pages design change according to your theme.
 *
 * Compatible with WordPress 4.6 through 4.9+.
 *
 * =>> Read the accompanying readme.txt file for instructions and documentation.
 * =>> Also, visit the plugin's homepage for additional information and updates.
 * =>> Or visit: https://wordpress.org/support/plugin/wp-theme-duplicator/
 *
 * @package Wp_Theme_Duplicator
 * @author  Bhupender Singh
 * @version 1.0.0
 */

/*
	Copyright (c) 2013-2018 by BhupenderSingh

	This program is free software; you can redistribute it and/or
	modify it under the terms of the GNU General Public License
	as published by the Free Software Foundation; either version 2
	of the License, or (at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.
*/

defined( 'ABSPATH' ) or die();

if ( ! class_exists( 'b2s_WpThemeDuplicator' ) ) :

if ( ! defined( 'WP_THEME_DUPLICATOR_PATH' ) ) {
	define( 'WP_THEME_DUPLICATOR_PATH', dirname( __FILE__ ) );
}

class b2s_WpThemeDuplicator {

	/**
	 * Returns version of the plugin.
	 *
	 * @since 1.0
	 */
	public static function version() {
		return '1.0.0';
	}

	/**
	 * Prevent instantiation.
	 *
	 * @since 1.0
	 */
	private function __construct() {}

	/**
	 * Prevent unserializing an instance.
	 *
	 * @since 1.0
	 */
	private function __wakeup() {}

	/**
	 * Initializes the plugin.
	 */
	public static function init() {
		// Require a few needed files
		//require_once( WP_LOGIN_THEME_PATH . '/inc/class-wp-login-theme.php' );
		//add_action( 'plugins_loaded', array( __CLASS__, 'do_init' ) );
	}

	/**
	 * Performs actual initialization tasks.
	 *
	 * @since 1.5
	 */
	public static function do_init() {
		// Load textdomain.
		load_plugin_textdomain( 'wp-theme-duplicator' );

	}

} // end b2s_WpThemeDuplicator


b2s_WpThemeDuplicator::init();

endif; // end if !class_exists()
