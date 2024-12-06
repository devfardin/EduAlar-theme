<?php

function wc_remove_checkout_fields( $fields ) {

    // Remove billing fields
    unset( $fields['billing']['billing_company'] );
    unset( $fields['billing']['billing_email'] );
    unset( $fields['billing']['billing_address_2'] );
    unset( $fields['billing']['billing_city'] );
    unset( $fields['billing']['billing_postcode'] );

    // Remove order fields
    unset( $fields['order']['order_comments'] );
    return $fields;
}
add_filter( 'woocommerce_checkout_fields', 'wc_remove_checkout_fields', 20 );


add_filter( 'woocommerce_billing_fields', 'wc_unrequire_wc_phone_field');
function wc_unrequire_wc_phone_field( $fields ) {
$fields['billing_email']['required'] = false;
return $fields;
}


add_filter('woocommerce_checkout_fields', 'custom_override_checkout_fields');
function custom_override_checkout_fields($fields)
 {
 unset($fields['billing']['billing_address_2']);
 $fields['billing']['billing_company']['placeholder'] = 'Business Name';
 $fields['billing']['billing_company']['label'] = 'Business Name';
 $fields['billing']['billing_first_name']['placeholder'] = 'Enter First Name'; 
 $fields['billing']['billing_last_name']['placeholder'] = 'Enter Last Name';
 $fields['billing']['billing_phone']['placeholder'] = 'Enter Phone Number';
 return $fields;
 }