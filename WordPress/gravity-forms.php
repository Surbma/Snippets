<?php

function pwp_control_set_gravityforms_permission( $permission ) {
	if( current_user_can( 'manage_network' ) ) {
		return 'gform_full_access';
	} else {
		return '';
	}
}
add_filter( 'gform_cap_full_access', 'pwp_control_set_gravityforms_permission' );

// Gravity Forms capabilities
$role->remove_cap( 'gform_full_access' );
$role->remove_cap( 'gravityforms_create_form' );
$role->remove_cap( 'gravityforms_delete_entries' );
$role->remove_cap( 'gravityforms_delete_forms' );
$role->remove_cap( 'gravityforms_edit_entries' );
$role->remove_cap( 'gravityforms_edit_entry_notes' );
$role->remove_cap( 'gravityforms_edit_forms' );
$role->remove_cap( 'gravityforms_edit_settings' );
$role->remove_cap( 'gravityforms_export_entries' );
$role->remove_cap( 'gravityforms_feed' );
$role->remove_cap( 'gravityforms_uninstall' );
$role->remove_cap( 'gravityforms_view_entries' );
$role->remove_cap( 'gravityforms_view_entry_notes' );
$role->remove_cap( 'gravityforms_view_settings' );
$role->remove_cap( 'gravityforms_view_updates' );
