<?php
/**
 * Krank Custom Shortcodes
 * @package Krank
*/

function krank_options_loop($opt_id) {
	global $krank;
	// Krank option array
	$krank_opt = $krank[$option_id];
	
}

// Address shortcode [address title="Test Title"]
function krank_address( $atts ) {
	// Extract title variable	
	extract(shortcode_atts(array(
	   'title' => '',
	), $atts));
   	
	// Assign Address variable for output
	$address = krank_options_loop('address');

	return $address;
}
add_shortcode('address', 'krank_address');