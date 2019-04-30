<?php

function surbma_mwc_override_checkout_fields( $fields ) {
    $tmppriority = $fields['billing']['billing_last_name']['priority'];
    $fields['billing']['billing_last_name']['priority'] = $fields['billing']['billing_first_name']['priority'];
    $fields['billing']['billing_first_name']['priority'] = $tmppriority;
    // $tmpclass = $fields['billing']['billing_last_name']['class'];
    // $fields['billing']['billing_last_name']['class'] = $fields['billing']['billing_first_name']['class'];
    // $fields['billing']['billing_first_name']['class'] = $tmpclass;
    return $fields;
}
// add_filter( 'woocommerce_checkout_fields' , 'surbma_mwc_override_checkout_fields', 0 );

function custom_override_default_address_fields( $fields ) {
	$tmpPriority = $fields['last_name']['priority'];
	$fields['last_name']['priority'] = $fields['first_name']['priority'];
	$fields['first_name']['priority'] = $tmpPriority;
	return $fields;
}
// add_filter( 'woocommerce_default_address_fields' , 'custom_override_default_address_fields', 0 );

function woocommerce_custom_address_format( $formats ) {
    $formats['HU'] = "{company}\n{name}\n{address_1}\n{address_2}\n{city}, {state_code} {postcode}\n{country}";
    return $formats;
}
// add_filter( 'woocommerce_localisation_address_formats', 'woocommerce_custom_address_format', 20 );

function woocommerce_billing_fields_custom( $fields ) {
	$tmpPriority = $fields['billing_last_name']['priority'];
	$fields['billing_last_name']['priority'] = $fields['billing_first_name']['priority'];
	$fields['billing_first_name']['priority'] = $tmpPriority;
	return $fields;
}
// add_filter( 'woocommerce_billing_fields' , 'woocommerce_billing_fields_custom' );
