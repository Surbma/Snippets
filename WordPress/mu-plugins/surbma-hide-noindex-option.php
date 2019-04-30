<?php

function surbma_hide_noindex_option() {
	if ( is_multisite() && !is_super_admin() ) {
?>
<style>.options-reading-php .option-site-visibility{display:none;}</style>
<?php
	}
}
add_action( 'admin_head', 'surbma_hide_noindex_option' );
