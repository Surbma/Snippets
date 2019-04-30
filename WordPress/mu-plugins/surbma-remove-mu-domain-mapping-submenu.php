<?php

function surbma_remove_domainmapping_submenu() {
	if ( !is_super_admin() && is_plugin_active( 'wordpress-mu-domain-mapping/domain_mapping.php' ) ) {
		remove_submenu_page( 'tools.php', 'domainmapping' );
	}
}
add_action( 'admin_menu', 'surbma_remove_domainmapping_submenu', 999 );
