<?php

// Add cart button on Shop page after the Product title.
function surbma_wc_add_cart_button() {
	add_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_add_to_cart', 10 );
}
add_action( 'after_setup_theme', 'surbma_wc_add_cart_button' );
