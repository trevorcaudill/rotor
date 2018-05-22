<?php

/**
 * Assets File for Child Theme.
 * 
 * @package tcaudill\rotor
 * @since 1.0.0
 * @author Trevor Caudill
 * @link https://trevorcaudill.com
 * @license GNU General Public License 2.0+
 */

namespace tcaudill\rotor;

add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\generatepress_child_enqueue_scripts', 100 );

function generatepress_child_enqueue_scripts() {
	if ( is_rtl() ) {
		wp_enqueue_style( 'generatepress-rtl', trailingslashit( get_template_directory_uri() ) . 'rtl.css' );
	}
}

add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\enqueue_assets' );
/**
 * Enqueue Scripts and Styles
 * 
 * @since 1.0.0
 */
function enqueue_assets() {
    wp_enqueue_script( CHILD_TEXT_DOMAIN . '-scripts-min', get_stylesheet_directory_uri() . '/assets/js/scripts.min.js', array( 'jquery' ), CHILD_THEME_VERSION, true );
}