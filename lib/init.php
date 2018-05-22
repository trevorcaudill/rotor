<?php

/**
 * Init File
 * 
 * @package tcaudill\rotor
 * @since 1.0.0
 * @author Trevor Caudill
 * @link https://trevorcaudill.com
 * @license GNU General Public License 2.0+
 */

namespace tcaudill\rotor;

/**
 * Initialize the theme's constants.
 * 
 * @since 1.0.0
 * 
 * @return void
 */

function init_constants() {

    $child_theme = wp_get_theme();

    define( 'CHILD_THEME_NAME', $child_theme->get( 'Name' ) );
    define( 'CHILD_THEME_URL', $child_theme->get( 'AuthorURI' ) );
    define( 'CHILD_THEME_VERSION', $child_theme->get( 'Version' ) );
    define( 'CHILD_TEXT_DOMAIN', $child_theme->get( 'TextDomain' ) );

    define('CHILD_THEME_DIR', get_stylesheet_directory() );
}

init_constants();