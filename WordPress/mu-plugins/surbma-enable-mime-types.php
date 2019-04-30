<?php

add_filter( 'upload_mimes', 'surbma_enable_mime_types' );
function surbma_enable_mime_types( $mimes ) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
