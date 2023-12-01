<?php
/**
 * @package Thenewplugin
 */
/*
Plugin Name: Thenewplugin
Plugin URI: https://Thenewplugin.com/
Description:  Thenewplugin Settings page to set up your API key.
Version: 5.3
Requires at least: 5.8
Requires PHP: 5.6.20
Author: Automattic - Anti-spam Team
Author URI: https://automattic.com/wordpress-plugins/
License: GPLv2 or later
Text Domain: Thenewplugin
*/

/*
Copyright 2005-2023 Automattic, Inc.
*/

// // Make sure we don't expose any info if called directly
// if ( !function_exists( 'add_action' ) ) {
// 	echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
// 	exit;
// }

// define( 'Thenewplugin_VERSION', '5.3' );
// define( 'Thenewplugin__MINIMUM_WP_VERSION', '5.8' );
// define( 'Thenewplugin__PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
// define( 'Thenewplugin_DELETE_LIMIT', 10000 );

// register_activation_hook( __FILE__, array( 'Thenewplugin', 'plugin_activation' ) );
// register_deactivation_hook( __FILE__, array( 'Thenewplugin', 'plugin_deactivation' ) );

// // require_once( Thenewplugin__PLUGIN_DIR . 'class.Thenewplugin.php' );
// // require_once( Thenewplugin__PLUGIN_DIR . 'class.Thenewplugin-widget.php' );
// // require_once( Thenewplugin__PLUGIN_DIR . 'class.Thenewplugin-rest-api.php' );

// add_action( 'init', array( 'Thenewplugin', 'init' ) );

// add_action( 'rest_api_init', array( 'Thenewplugin_REST_API', 'init' ) );

// // if ( is_admin() || ( defined( 'WP_CLI' ) && WP_CLI ) ) {
// // 	require_once( Thenewplugin__PLUGIN_DIR . 'class.Thenewplugin-admin.php' );
// // 	add_action( 'init', array( 'Thenewplugin_Admin', 'init' ) );
// // }

// // //add wrapper class around deprecated Thenewplugin functions that are referenced elsewhere
// // require_once( Thenewplugin__PLUGIN_DIR . 'wrapper.php' );

// // if ( defined( 'WP_CLI' ) && WP_CLI ) {
// // 	require_once( Thenewplugin__PLUGIN_DIR . 'class.Thenewplugin-cli.php' );
// // }

function thenewplugin_custom_post_type() {
	register_post_type('thenewplugin',
		array(
			'labels'      => array(
				'name'          => __( 'thenewplugin', 'textdomain' ),
				'singular_name' => __( 'thenewplugin', 'textdomain' ),
			),
			'public'      => true,
			'has_archive' => true,
			'rewrite'     => array( 'slug' => 'thenewplugin' ), // my custom slug
			'show_in_rest'       => true,
			'rest_base'          => 'thenewplugin',
			'rest_controller_class' => 'WP_REST_Posts_Controller',
		)
	);
}
add_action('init', 'thenewplugin_custom_post_type');


// function my_plugin_rest_route_for_post( $route, $post ) {
//     if ( $post->post_type === 'thenewplugin' ) {
//         $route = '/wp/v2/thenewplugin/' . $post->ID;
//     }

//     return $route;
// }
// add_filter( 'rest_route_for_post', 'my_plugin_rest_route_for_post', 10, 2 );