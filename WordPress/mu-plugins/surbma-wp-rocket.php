<?php

add_action( 'admin_head', 'surbma_wp_rocket_styles' );
function surbma_wp_rocket_styles() {
	if ( is_multisite() && !is_super_admin() ) {
?>
<style>.settings_page_wprocket a[href="#tab_database"],.settings_page_wprocket a[href="#tab_cdn"],.settings_page_wprocket a[href="#tab_varnish"],.settings_page_wprocket a[href="#tab_tools"],.settings_page_wprocket a[href="#tab_faq"],.settings_page_wprocket a[href="#tab_support"]{display:none !important;}</style>
<?php
	}
}
