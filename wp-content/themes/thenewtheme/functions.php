<?php
/**
 * Thenewtheme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Thenewtheme
 * @since Thenewtheme 1.0
 */

 function Thenewtheme_custom_post_type() {
	register_post_type('Thenewtheme',
		array(
			'labels'      => array(
				'name'          => __('Thenewtheme', 'textdomain'),
				'singular_name' => __('Thenewtheme', 'textdomain'),
			),
				'public'      => true,
				'has_archive' => true,
		)
	);
}
add_action('init', 'Thenewtheme_custom_post_type');

function wporg_custom_post_type() {
	register_post_type('wporg_product',
		array(
			'labels'      => array(
				'name'          => __('Products', 'textdomain'),
				'singular_name' => __('Product', 'textdomain'),
			),
				'public'      => true,
				'has_archive' => true,
		)
	);
}
add_action('init', 'wporg_custom_post_type');

