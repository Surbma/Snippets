<?php

// Check security headers: https://securityheaders.com/
function surbma_security_headers_insert() {
	if ( headers_sent() ) {
		error_log( 'Headers already sent HTTP Headers modules unable to function' );
	}

	// HSTS
	if( is_ssl() ) {
		header( "Strict-Transport-Security: max-age=2592000" ); // 30 days: this is the minimum.
		// Include all subdomains as well.
		// This is a mu-plugin, so it is not needed, because this code is running on all sites in a Multisite.
		// header( 'Strict-Transport-Security: max-age=2592000; includeSubDomains' );
		// header( 'Strict-Transport-Security: max-age=2592000; includeSubDomains; preload' );
	}

	// No Sniff
	send_nosniff_header();

	// XSS
	header( "X-XSS-Protection: 1; mode=block" );

	// Frame Options
	send_frame_options_header();

	// Referrer Policy
	// https://scotthelme.co.uk/a-new-security-header-referrer-policy/
	//
	// Possible values:
	// no-referrer
	// no-referrer-when-downgrade
	// same-origin
	// origin
	// strict-origin
	// origin-when-cross-origin
	// strict-origin-when-cross-origin
	// unsafe-url
	header( "Referrer-Policy: strict-origin" );

	// Content Security Policy
	// https://scotthelme.co.uk/content-security-policy-an-introduction/
	header( "Content-Security-Policy: default-src 'self' https:; script-src 'self' 'unsafe-inline' https:; style-src 'self' 'unsafe-inline' https:; img-src 'self' data: https:; font-src 'self' data: https:;" );
	// For testing
	// header( "Content-Security-Policy-Report-Only: default-src 'self' https:; script-src 'self' 'unsafe-inline' https:; style-src 'self' 'unsafe-inline' https:; img-src 'self' data: https:; font-src 'self' data: https:;" );

	// Feature Policy
	// https://scotthelme.co.uk/a-new-security-header-feature-policy/
	//
	// Possible features:
	// geolocation
	// midi
	// notifications
	// push
	// sync-xhr
	// microphone
	// camera
	// magnetometer
	// gyroscope
	// speaker
	// vibrate
	// fullscreen
	// payment
	//
	// Possible options:
	// *
	// 'self'
	// 'none'
	// <origin(s)>
	header( "Feature-Policy: midi 'none';" );
}
add_action( 'send_headers', 'surbma_security_headers_insert' );
// admin section doesn't have a send_headers action so we abuse init
// https://codex.wordpress.org/Plugin_API/Action_Reference
add_action( 'admin_init', 'surbma_security_headers_insert' );
// wp-login.php doesn't have a send_headers action so we abuse init
add_action( 'login_init', 'surbma_security_headers_insert' );
