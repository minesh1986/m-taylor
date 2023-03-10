<?php
/**
 * m_taylor enqueue scripts
 *
 * @package m_taylor
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'm_taylor_scripts' ) ) {
	/**
	 * Load theme's JavaScript and CSS sources.
	 */
	function m_taylor_scripts() {
		// Get the theme data.
		$the_theme     = wp_get_theme();
		$theme_version = $the_theme->get( 'Version' );

		$css_version = $theme_version . '.' . filemtime( get_template_directory() . '/css/theme.min.css' );
		wp_enqueue_style( 'm_taylor-styles', get_template_directory_uri() . '/css/theme.min.css', array(), $css_version );
		wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat&family=Open+Sans&family=Cabin+Sketch:wght@200;400;700&display=swap', [], null);
		wp_enqueue_style( 'swiper-styles', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css');

		wp_enqueue_script( 'jquery' );

		$js_version = $theme_version . '.' . filemtime( get_template_directory() . '/js/theme.min.js' );
		wp_enqueue_script( 'm_taylor-scripts', get_template_directory_uri() . '/js/theme.min.js', array(), $js_version, true );
		wp_enqueue_script( 'swiper-scripts', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js', array(), null, false );
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
} // End of if function_exists( 'm_taylor_scripts' ).

add_action( 'wp_enqueue_scripts', 'm_taylor_scripts' );
