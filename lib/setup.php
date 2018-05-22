<?php
/**
 * Setup File
 * 
 * @package tcaudill\rotor
 * @since 1.0.0
 * @author Trevor Caudill
 * @link https://trevorcaudill.com
 * @license GNU General Public License 2.0+
 */
namespace tcaudill\rotor;

add_action( 'widgets_init', __NAMESPACE__ . '\generate_remove_sidebars', 11 );
/**
 * Uncomment the sidebars you wish to remove.
 * 
 * @since 1.0.0
 * 
 */
function generate_remove_sidebars() {

	$config = array(
		// 'header',
		// 'sidebar-1',
		// 'sidebar-2',
		// 'top-bar',
		// 'footer-bar',
		// 'footer-1',
		// 'footer-2',
		// 'footer-3',
		// 'footer-4',
		// 'footer-5'
	);

	foreach( $config as $args ) {
        unregister_sidebar( $args );
    }
}