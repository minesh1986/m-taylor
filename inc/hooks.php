<?php
/**
 * Custom hooks
 *
 * @package m_taylor
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'm_taylor_site_info' ) ) {
	/**
	 * Add site info hook to WP hook library.
	 */
	function m_taylor_site_info() {
		do_action( 'm_taylor_site_info' );
	}
}

add_action( 'm_taylor_site_info', 'm_taylor_add_site_info' );
if ( ! function_exists( 'm_taylor_add_site_info' ) ) {
	/**
	 * Add site info content.
	 */
	function m_taylor_add_site_info() {
		$the_theme = wp_get_theme();

		$site_info = sprintf(
			'<a href="%1$s">%2$s</a><span class="sep"> | </span>%3$s(%4$s)',
			esc_url( __( 'https://wordpress.org/', 'm_taylor' ) ),
			sprintf(
				/* translators: WordPress */
				esc_html__( 'Proudly powered by %s', 'm_taylor' ),
				'WordPress'
			),
			sprintf( // WPCS: XSS ok.
				/* translators: 1: Theme name, 2: Theme author */
				esc_html__( 'Theme: %1$s by %2$s.', 'm_taylor' ),
				$the_theme->get( 'Name' ),
				'<a href="' . esc_url( __( 'https://m_taylor.com', 'm_taylor' ) ) . '">m_taylor.com</a>'
			),
			sprintf( // WPCS: XSS ok.
				/* translators: Theme version */
				esc_html__( 'Version: %1$s', 'm_taylor' ),
				$the_theme->get( 'Version' )
			)
		);

		echo apply_filters( 'm_taylor_site_info_content', $site_info ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	}
}
