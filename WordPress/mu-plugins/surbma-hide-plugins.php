<?php

/*
Plugin Name: Surbma - Hide plugins
Plugin URI: https://surbma.com/wordpress-plugins/
Description: Hides plugins
Version: 1.0.1
Author: Surbma
Author URI: https://surbma.com/
License: GPL2
*/

add_filter( 'all_plugins', function( $plugins ) {
	if( is_plugin_active( 'worker/init.php' ) ) {
		unset( $plugins[ 'worker/init.php' ] );
	}
	if( is_plugin_active( 'surbma-smtp/surbma-smtp.php' ) ) {
		unset( $plugins[ 'surbma-smtp/surbma-smtp.php' ] );
	}
	if( is_plugin_active( 'surbma-wp-control/surbma-wp-control.php' ) ) {
		unset( $plugins[ 'surbma-wp-control/surbma-wp-control.php' ] );
	}
	if( is_plugin_active( 'wpmudev-updates/update-notifications.php' ) ) {
		unset( $plugins[ 'wpmudev-updates/update-notifications.php' ] );
	}
	if( is_plugin_active( 'wp-smush-pro/wp-smush.php' ) ) {
		unset( $plugins[ 'wp-smush-pro/wp-smush.php' ] );
	}
	return $plugins;
} );
