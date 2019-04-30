<?php

add_action( 'wp_head', 'surbma_check_site', 0 );
function surbma_check_site() {
	echo '<meta name="surbma-check-site" content="rikarda" />';
}
