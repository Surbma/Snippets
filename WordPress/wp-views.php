<?php

// Remove Front-end scripts and styles
add_action( 'wp_enqueue_scripts', function() {
	if ( !is_admin() ) {
		// global $WP_Views;

		wp_dequeue_style( 'views-pagination-style' );
		wp_dequeue_style( 'toolset_blocks-style-css' );
		wp_dequeue_style( 'view_editor_gutenberg_frontend_assets' );
		// wp_dequeue_style( 'views-table-sorting-style' );
		// wp_dequeue_style( 'wpv_render_css' );
		// wp_dequeue_style( 'wptoolset-field-datepicker');

		wp_deregister_script( 'views-pagination-script' );
		// wp_dequeue_script( 'wpv-front-end-utils' );
		// wp_dequeue_script( 'jquery-ui-core' );
		// wp_dequeue_script( 'jquery-ui-datepicker' );
		// wp_dequeue_script( 'jquery-ui-datepicker-local' );
		// wp_dequeue_script( 'jquery-ui-datepicker-local-nl' );
		// wp_dequeue_script( 'wpv-date-front-end-script' );

		// remove_action( 'wp_print_styles', array( $WP_Views, 'add_render_css' ) );
		// remove_action( 'wp_head', 'wpv_add_front_end_js' );
	}
}, 999 );
