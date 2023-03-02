<?php

/*
Plugin Name: Surbma - Define DISALLOW_FILE_MODS
Plugin URI: https://surbma.com/wordpress-plugins/
Description: Disallow file modifications for all users, except premiumwp.
Version: 1.0.0
Author: Surbma
Author URI: https://surbma.com/
License: GPL2
*/

add_action( 'init', function() {
	if ( ( defined( 'MULTISITE' ) && MULTISITE == true ) || defined( 'DISALLOW_FILE_MODS' ) ) {
		return;
	}

	$current_user = wp_get_current_user();
	$username = $current_user->user_login;
	$userid = $current_user->ID;

	if ( $username != 'premiumwp' ) {
		define( 'DISALLOW_FILE_MODS', true );
	}
} );