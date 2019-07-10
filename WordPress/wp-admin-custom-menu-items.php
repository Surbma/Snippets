<?php

function surbma_beacon_support_menu() {
    global $menu;
    $url = '#';
    $menu[-995432] = array( 'Ügyfélszolgálat', 'manage_options', $url, 'Prémium WordPress ügyfélszolgálat', 'menu-top beacon', 'menu-pwp-support', 'dashicons-editor-help' );
}
// add_action( 'admin_menu', 'surbma_beacon_support_menu' );

function custom_toolbar_link( $wp_admin_bar ) {
	$args = array(
		'id' => 'ab-pwp-support',
		'title' => '<span class="dashicons dashicons-editor-help ab-icon" style="padding-top: 6px;"></span> Prémium WordPress ügyfélszolgálat',
		'meta' => array(
			'class' => 'beacon',
			'title' => 'Prémium WordPress ügyfélszolgálat'
		)
	);
	$wp_admin_bar->add_node( $args );
}
// add_action('admin_bar_menu', 'custom_toolbar_link', 999);
