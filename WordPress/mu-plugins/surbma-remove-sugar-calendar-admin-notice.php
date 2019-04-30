<?php

function surbma_remove_sugar_calendar_admin_notice() {
	if ( function_exists( 'sc_show_license_notice' ) ) {
		remove_action( 'admin_notices', 'sc_show_license_notice' );
	}
}
add_action( 'admin_init', 'surbma_remove_sugar_calendar_admin_notice' );
