<?php

$_tests_dir = getenv('WP_TESTS_DIR');
if ( !$_tests_dir ) {
	$_tests_dir = '/tmp/wordpress-tests-lib';
}

require_once $_tests_dir . '/includes/functions.php';

/**
 * Load up required plugins for this theme.
 *
 * @example
 *     require WP_CONTENT_DIR . '/plugins/plugin-name/plugin-name.php';
 */
function _manually_load_plugin() {
}
tests_add_filter( 'muplugins_loaded', '_manually_load_plugin' );

require $_tests_dir . '/includes/bootstrap.php';
