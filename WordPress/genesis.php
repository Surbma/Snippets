<?php

// Genesis markup modification
add_filter( 'genesis_attr_site-header', function( $attributes ) {
	$attributes['class'] .= ' container';
	return $attributes;
} );

// Remove widget areas
add_action( 'widgets_init', function() {
	unregister_sidebar( 'header-right' );
	unregister_sidebar( 'sidebar' );
	unregister_sidebar( 'sidebar-alt' );
}, 11 );

// Remove widget areas
unregister_sidebar( 'header-right' );
unregister_sidebar( 'sidebar' );
unregister_sidebar( 'sidebar-alt' );

// Theme content width
add_action( 'after_setup_theme', function() {
	if ( ! isset( $content_width ) ) {
		$content_width = apply_filters( 'content_width', 590, 410, 910 );
	}
} );

// Theme content width
if ( ! isset( $content_width ) ) {
	$content_width = apply_filters( 'content_width', 590, 410, 910 );
}

// Genesis default sestting modifications
add_action( 'after_setup_theme', function() {
	remove_action( 'genesis_entry_header', 'genesis_post_info', 12 );
	remove_action( 'genesis_entry_footer', 'genesis_post_meta' );
} );
