<?php

// Hide the admin menu
add_action( 'admin_menu', function() {
	$current_user = wp_get_current_user();
	$username = $current_user->user_login;

	if ( 'premiumwp' != $username ) {
		remove_menu_page( 'gpltimes_plugin' );
	}
}, 999 );

// Hide the plugin from Plugins list
add_filter( 'all_plugins', function( $plugins ) {
	$current_user = wp_get_current_user();
	$username = $current_user->user_login;

	if ( 'premiumwp' != $username ) {
		unset( $plugins[ 'gpltimes/gpltimes.php' ] );
	}
	return $plugins;
} );
