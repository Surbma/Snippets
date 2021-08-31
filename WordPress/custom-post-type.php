<?php

function surbma_cpt() {

	$supports = array(
		'title', // post title
		'editor', // post content
		'author', // post author
		'thumbnail', // featured images
		'excerpt', // post excerpt
		'custom-fields', // custom fields
		'comments', // post comments
		'revisions', // post revisions
		'post-formats', // post formats
	);

	$labels = array(
		'name' => _x( 'News', 'plural' ),
		'singular_name' => _x( 'News', 'singular' ),
		'menu_name' => _x( 'News', 'admin menu' ),
		'name_admin_bar' => _x( 'news', 'admin bar' ),
		'add_new' => _x( 'Add New', 'add new' ),
		'add_new_item' => __( 'Add New news' ),
		'new_item' => __( 'New news' ),
		'edit_item' => __( 'Edit news' ),
		'view_item' => __( 'View news' ),
		'all_items' => __( 'All news' ),
		'search_items' => __( 'Search news' ),
		'not_found' => __( 'No news found.' ),
	);

	$args = array(
		'supports' => $supports,
		'labels' => $labels,
		'public' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'news' ),
		'has_archive' => true,
		'hierarchical' => false,
		'show_in_rest' => true, // Enable Gutenberg block editor
	);

	register_post_type( 'news', $args );

}
add_action( 'init', 'surbma_cpt' );
