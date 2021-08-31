<?php

add_filter( 'wp_initialize_site_args', function( $args, $site ) {
	$args['options']['blog_public'] = 0;
	return $args;
}, 10, 2 );

add_action( 'wp_insert_site', function( $new_site ) {
	$details = array(
		'public' => 0
	);
	update_blog_details( $new_site->id, $details );
} );
