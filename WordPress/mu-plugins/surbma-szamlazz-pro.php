<?php

function surbma_szamlazz_pro() {
	if ( is_plugin_active( 'integration-for-szamlazzhu-woocommerce/index.php' ) ) {
		update_option( '_wc_szamlazz_pro_enabled', true );
	}
}
add_action( 'admin_init', 'surbma_szamlazz_pro' );
