<?php

// Must be checked!
if ( defined( 'ICL_LANGUAGE_CODE' ) ) {}

// Checking language with WPML main check.
if ( defined( 'ICL_LANGUAGE_CODE' ) && ICL_LANGUAGE_CODE == 'en' ) {}

// Add language code in body class
function surbma_add_wpml_lang_body_class( $classes ) {
	if ( defined( 'ICL_LANGUAGE_CODE' ) )
		$classes[] = ICL_LANGUAGE_CODE;
	return $classes;
}
add_filter( 'body_class', 'surbma_add_wpml_lang_body_class' );
