<?php

function surbma_remove_ms_delete_site_submenu() {
	if ( is_multisite() && !is_super_admin() ) {
		remove_submenu_page( 'tools.php', 'ms-delete-site.php' );
	}
}
add_action( 'admin_menu', 'surbma_remove_ms_delete_site_submenu', 999 );
