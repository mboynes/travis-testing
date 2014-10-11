<?php
/**
 * Address a bug with older versions of WP and the unit tests.
 * @param  array $t mime types.
 * @return array
 */
function travis_set_upload_mimes( $t ) {
	return wp_parse_args( $t, array(
		'jpg|jpeg|jpe' => 'image/jpeg',
		'gif' => 'image/gif',
		'png' => 'image/png',
	) );
}
add_filter( 'upload_mimes', 'travis_set_upload_mimes' );