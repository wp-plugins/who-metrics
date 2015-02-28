<?php
/**
 * Plugin Name: Who Metrics
 * Description: The Who Metrics tag and widget
 * Version: 1.02
 * Author: WhoMetrics.com
 * Author URI: http://www.whometrics.com
 * 
 */
 
function my_wm_scripts_method() {
	
	wp_enqueue_script(
		'custom-script-2',
		'http://whometrics.net/ajax/script.js');
}

add_action( 'wp_enqueue_scripts', 'my_wm_scripts_method' );


?>