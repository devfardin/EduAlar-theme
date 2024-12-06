<?php

function wc_remove_checkout_fields( $fields ) {
    // Log to ensure the function is running
    error_log( 'Removing WooCommerce checkout fields.' );

    // Remove billing fields
    unset( $fields['billing']['billing_company'] );
    unset( $fields['billing']['billing_email'] );
    // unset( $fields['billing']['billing_phone'] );
    // unset( $fields['billing']['billing_state'] );
    // unset( $fields['billing']['billing_first_name'] );
    // unset( $fields['billing']['billing_last_name'] );
    unset( $fields['billing']['billing_address_1'] );
    // unset( $fields['billing']['billing_address_2'] );
    // unset( $fields['billing']['billing_city'] );
    // unset( $fields['billing']['billing_postcode'] );



    // Remove order fields
    unset( $fields['order']['order_comments'] );

    error_log( print_r( $fields, true ) ); // Log the current fields to debug
    return $fields;
}
add_filter( 'woocommerce_checkout_fields', 'wc_remove_checkout_fields', 20 );



