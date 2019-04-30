<?php

function surbma_filter_domain_mapping_permissions( $permitted ) {
	if ( !is_super_admin() )
		$permitted = false;
	return $permitted;
}
add_filter( 'dm_is_site_permitted', 'surbma_filter_domain_mapping_permissions', 30, 1 );
