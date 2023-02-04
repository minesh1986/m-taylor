<?php
/**
 * Check and setup theme's default settings
 *
 * @package m_taylor
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'm_taylor_setup_theme_default_settings' ) ) {
	/**
	 * Store default theme settings in database.
	 */
	function m_taylor_setup_theme_default_settings() {
		$defaults = m_taylor_get_theme_default_settings();
		$settings = get_theme_mods();
		foreach ( $defaults as $setting_id => $default_value ) {
			// Check if setting is set, if not set it to its default value.
			if ( ! isset( $settings[ $setting_id ] ) ) {
				set_theme_mod( $setting_id, $default_value );
			}
		}
	}
}

if ( ! function_exists( 'm_taylor_get_theme_default_settings' ) ) {
	/**
	 * Retrieve default theme settings.
	 *
	 * @return array
	 */
	function m_taylor_get_theme_default_settings() {
		$defaults = array(
			'm_taylor_posts_index_style' => 'default',   // Latest blog posts style.
			'm_taylor_sidebar_position'  => 'right',     // Sidebar position.
			'm_taylor_container_type'    => 'container', // Container width.
		);

		/**
		 * Filters the default theme settings.
		 *
		 * @param array $defaults Array of default theme settings.
		 */
		return apply_filters( 'm_taylor_theme_default_settings', $defaults );
	}
}
