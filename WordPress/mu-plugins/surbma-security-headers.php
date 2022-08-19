<?php

/*
Plugin Name: Surbma - Security Headers
Plugin URI: https://surbma.com/wordpress-plugins/
Description: Adding the necessary security headers.
Version: 2.0
Author: Surbma
Author URI: https://surbma.com/
License: GPL2
*/

// Check security headers: https://securityheaders.com/
function surbma_security_headers_insert() {
	if ( headers_sent() ) {
		error_log( 'Headers already sent HTTP Headers modules unable to function' );
	}

	// Strict-Transport-Security (HSTS) - Informs browsers that the site should only be accessed using HTTPS, and any attempts to access it using HTTP should redirected to HTTPS.
	// https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Strict-Transport-Security
	if( is_ssl() ) {
		header( "Strict-Transport-Security: max-age=2592000" ); // 30 days: this is the minimum.
		// Include all subdomains as well.
		// This is a mu-plugin, so it is not needed, because this code is running on all sites in a Multisite.
		// header( 'Strict-Transport-Security: max-age=2592000; includeSubDomains' );
		// header( 'Strict-Transport-Security: max-age=2592000; includeSubDomains; preload' );
	}

	// X-Content-Type-Options - CSS and JS files can be inserted only, when MIME is also set.
	// https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/X-Content-Type-Options
	header( "X-Content-Type-Options: nosniff" );

	// X-XSS-Protection - Stops pages from loading when they detect reflected cross-site scripting (XSS) attacks.
	// https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/X-XSS-Protection
	// Modern browsers deny it. CSP should be set instead.
	header( "X-XSS-Protection: 1; mode=block" );

	// X-Frame-Options - Prevent other websites to frame this website.
	// https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/X-Frame-Options
	// In modern browsers CSP should be set with the frame-ancestors directive.
	header( "X-Frame-Options: SAMEORIGIN" );

	// Referrer Policy - Controls how much referrer information should be included with requests.
	// https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Referrer-Policy
	// https://scotthelme.co.uk/a-new-security-header-referrer-policy/
	header( "Referrer-Policy: strict-origin" );

	// Feature Policy - Provides a mechanism to allow and deny the use of browser features.
	// https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Feature-Policy
	// https://scotthelme.co.uk/a-new-security-header-feature-policy/
	// header( "Feature-Policy: midi 'none';" );
	// Permissions Policy - Provides a mechanism to allow and deny the use of browser features.
	// Use this instead of Feature-Policy
	// https://scotthelme.co.uk/goodbye-feature-policy-and-hello-permissions-policy/
	header( "Permissions-Policy: geolocation=(self), microphone=(), midi=()" );

	// Content Security Policy
	// https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Content-Security-Policy
	// https://scotthelme.co.uk/content-security-policy-an-introduction/
	header( "Content-Security-Policy: default-src 'self' https:; script-src 'self' 'unsafe-inline' 'unsafe-eval' https:; style-src 'self' 'unsafe-inline' https:; img-src 'self' data: https:; font-src 'self' data: https:;" );
	// For testing
	// header( "Content-Security-Policy-Report-Only: default-src 'self' https:; script-src 'self' 'unsafe-inline' https:; style-src 'self' 'unsafe-inline' https:; img-src 'self' data: https:; font-src 'self' data: https:;" );
}
add_action( 'send_headers', 'surbma_security_headers_insert' );
// admin section doesn't have a send_headers action so we abuse init
// https://codex.wordpress.org/Plugin_API/Action_Reference
add_action( 'admin_init', 'surbma_security_headers_insert' );
// wp-login.php doesn't have a send_headers action so we abuse init
add_action( 'login_init', 'surbma_security_headers_insert' );
