<?php
/**
 * Plugin Name: Who Metrics
 * Description: The Who Metrics tag and widget
 * Version: 1.01
 * Author: WhoMetrics.com
 * Author URI: http://www.whometrics.com
 * 
 */
 
function my_scripts_method() {
	
	wp_enqueue_script(
		'custom-script-2',
		'http://whometrics.net/ajax/script.js');
}

add_action( 'wp_enqueue_scripts', 'my_scripts_method' );


?>