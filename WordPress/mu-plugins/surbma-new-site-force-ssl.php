<?php

add_filter( 'wp_initialize_site_args', function( $args, $site ) {
	$url = untrailingslashit( 'https://' . $site->domain . $site->path );

	$args['options']['home'] = $url;
	$args['options']['siteurl'] = $url;

	return $args;
}, 10, 2 );
