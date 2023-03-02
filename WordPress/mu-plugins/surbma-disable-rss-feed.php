<?php

function surbma_disable_feed() {
	wp_redirect( home_url() );
	exit;
}

add_action( 'do_feed', 'surbma_disable_feed', 1 );
add_action( 'do_feed_rdf', 'surbma_disable_feed', 1 );
add_action( 'do_feed_rss', 'surbma_disable_feed', 1 );
add_action( 'do_feed_rss2', 'surbma_disable_feed', 1 );
add_action( 'do_feed_atom', 'surbma_disable_feed', 1 );
add_action( 'do_feed_rss2_comments', 'surbma_disable_feed', 1 );
add_action( 'do_feed_atom_comments', 'surbma_disable_feed', 1 );

remove_action( 'wp_head', 'feed_links', 2 );
remove_action( 'wp_head', 'feed_links_extra', 3 );
