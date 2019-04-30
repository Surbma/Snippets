<?php

/*
Plugin Name: Surbma | Email Return Path Fix
Author: Surbma
*/

class Surbma_email_return_path {
  	function __construct() {
		add_action( 'phpmailer_init', array( $this, 'fix' ) );
  	}

	function fix( $phpmailer ) {
		$adminemail = get_bloginfo( 'admin_email' );
		// $phpmailer->Sender = $phpmailer->From;
		$phpmailer->Sender = $adminemail;
	}
}

new Surbma_email_return_path();