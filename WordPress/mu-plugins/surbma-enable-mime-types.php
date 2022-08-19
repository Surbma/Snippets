<?php

add_filter( 'upload_mimes', function( $mimes ) {
	$mimes['svg'] = 'image/svg+xml';
	// Optional. Remove a mime type.
	// unset( $mimes['exe'] );
	return $mimes;
} );
