<?php

function surbma_custom_srm_max_redirects() {
if ( class_exists( 'SRM_Safe_Redirect_Manager' ) )
	add_filter( 'srm_max_redirects', function() { return 9999999; } );
}
add_action( 'plugins_loaded', 'surbma_custom_srm_max_redirects' );
