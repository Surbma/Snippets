<?php

add_action( 'admin_menu', function() {
	if ( is_multisite() && !is_super_admin() ) {
		remove_submenu_page( 'tools.php', 'ms-delete-site.php' );
	}
}, 999 );
