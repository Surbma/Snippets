<?php

// Delete Divi favicon option.
function divi_fix_update_icon() {
	et_update_option( 'divi_favicon', '' );
}
add_action( 'wp_footer', 'divi_fix_update_icon' );
