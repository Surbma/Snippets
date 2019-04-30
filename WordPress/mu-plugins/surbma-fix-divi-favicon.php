<?php

function update_icon() {
	et_update_option( 'divi_favicon', '' );
}
add_action('wp_footer','update_icon');