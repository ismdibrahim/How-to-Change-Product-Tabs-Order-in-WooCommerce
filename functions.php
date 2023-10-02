<?php

add_filter( 'woocommerce_product_tabs', 'woo_reorder_tabs', 98 );
function woo_reorder_tabs( $tabs ) {

	$tabs['reviews']['priority'] = 5;			// Reviews first
	$tabs['description']['priority'] = 10;			// Description second
	$tabs['additional_information']['priority'] = 15;	// Additional information third

	return $tabs;
}
