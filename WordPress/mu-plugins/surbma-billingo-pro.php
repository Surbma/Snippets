<?php

add_action( 'admin_init', function() {
	if ( is_plugin_active( 'woo-billingo-plus/index.php' ) ) {
		update_option( '_wc_billingo_pro_enabled', true );
		delete_option( '_wc_billingo_pro_expiration_date' );
	}
} );
