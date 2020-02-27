<?php

function surbma_hide_divi_settings() {
	if ( is_multisite() && !is_super_admin() ) {
?>
<style>.toplevel_page_et_divi_options #general-1 .epanel-box:last-child,#wrap-integration,#wrap-updates{display:none !important;}</style>
<?php
	}
}
add_action( 'admin_head', 'surbma_hide_divi_settings' );
