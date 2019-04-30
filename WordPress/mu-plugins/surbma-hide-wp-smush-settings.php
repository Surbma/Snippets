<?php

function surbma_hide_wp_smush_settings() {
	if ( is_multisite() && !is_super_admin() ) {
?>
<style>#wp-smush-settings-box{display:none;}</style>
<?php
	}
}
add_action( 'admin_head', 'surbma_hide_wp_smush_settings' );
