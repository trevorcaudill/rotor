<?php
/**
 * Website Autoloader
 * 
 * @package tcaudill\rotor
 * @since 1.0.0
 * @author Trevor Caudill
 * @link https://trevorcaudill.com
 * @license GNU General Public License 2.0+
 */

namespace tcaudill\rotor;

/**
 * Loads non admin files.
 *
 * @since 1.0.0
 *
 * @return void
 */
function load_nonadmin_files() {
    $filenames = array(
        'setup.php',
        'functions/load-assets.php'
    );

    load_specified_files( $filenames );
}

/**
 * Load each of the specified files.
 *
 * @since 1.0.0
 *
 * @param array $filenames
 * @param string $folder_root
 *
 * @return void
 */
function load_specified_files(array $filenames, $folder_root = '') {

    $folder_root = $folder_root ?: CHILD_THEME_DIR . '/lib/';

    foreach( $filenames as $filename ) {
        include( $folder_root . $filename);
    }
}

load_nonadmin_files();