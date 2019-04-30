<?php

function surbma_set_admin_locale( $locale ) {
	if ( is_admin() )
		$locale = 'en_US';
	return $locale;
}
add_filter( 'locale', 'surbma_set_admin_locale' );
