<?php

// This function is overrides the multisite-plugin-manager plugin's settings to list all plugins for specified users.
function surbma_list_all_plugins_function( $all_plugins ) {
	if ( class_exists( 'PluginManager' ) ) {
		$current_user = wp_get_current_user();
		$userid = $current_user->ID;

		// 4 = batorizoltan
		// 6 = krajnakcsaba
		// 110 = hslaszlo
		// 121 = hslaszlo1
		if ( $userid == 4 || $userid == 6 || $userid == 110 || $userid == 121 ) {
			$all_plugins = get_plugins();
		}
	}
    return $all_plugins;
}
add_filter( 'all_plugins', 'surbma_list_all_plugins_function', 999 );
