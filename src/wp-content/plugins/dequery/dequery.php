<?php 
/**
 * Plugin Name: Dequery
 * Plugin URI: http://frasaleksander.github.io
 * Description: Deregister new jquery and use the old one + migrate
 * Version: 0.0.1
 * Author: Aleksander Fras
 * Author URI: http://frasaleksander.github.io
 * License: GPL2
 */
if(!function_exists('dequery_scripts')) {

	function dequery_scripts() {
		wp_deregister_script('jquery');
		wp_register_script('jquery', plugin_dir_url( __FILE__ ) . 'jquery-1.11.3.js', array());
		wp_deregister_script('jquery-migrate');
		wp_register_script('jquery-migrate', plugin_dir_url( __FILE__ ) . 'jquery-migrate-1.2.1.min.js', array('jquery'));
		wp_enqueue_script('jquery-migrate');
		wp_enqueue_script('jquery');
	}
	add_action( 'wp_enqueue_scripts', 'dequery_scripts' );

}