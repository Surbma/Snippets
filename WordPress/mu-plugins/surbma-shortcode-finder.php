<?php

// Original code by Bill Erickson: https://www.billerickson.net/shortcode-finder/
function surbma_shortcode_finder( $atts = array() ) {
	$atts = shortcode_atts( array(
		'shortcode' => '',
	), $atts, 'find-shortcode' );

	$loop = new WP_Query( array(
		'posts_per_page' => -1,
		'post_type' => array( 'post', 'page' ),
		'orderby' => 'title',
		'order' => 'ASC'
	));

	$found = array();

	if( $loop->have_posts() ): while( $loop->have_posts() ): $loop->the_post();
		global $post;
		if( has_shortcode( $post->post_content, $atts['shortcode'] ) )
			$found[] = '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
	endwhile; endif; wp_reset_postdata();

	if( !empty( $found ) ) {
		$output = '<h3>Pages with the [' . $atts['shortcode'] . '] shortcode</h3><ul>' . join( PHP_EOL, $found ) . '</ul>';
	} else {
		$output = '<h3>No pages found with [' . $atts['shortcode'] . '] shortcode</h3>';
	}

	return $output;
}
add_shortcode( 'find-shortcode', 'surbma_shortcode_finder' );
