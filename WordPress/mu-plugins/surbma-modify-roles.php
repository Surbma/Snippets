<?php

function surbma_modify_roles() {
	$role = get_role( 'administrator' );
	$role->remove_cap( 'unfiltered_html' );
}
add_action( 'init', 'surbma_modify_roles' );
