<?php 

error_reporting(EP_ALL);

/**
 * Plugin Name: Sos Messager Widget
 * Description: This Widget is part of practicing widget, Display any message.
 * Plugin URI: http://expertcodedesign.com
 * Author: Sorabh
 * Author URI: http://sorabh86.github.com
 * Version: 1.0.0
 */

class SOS_Messager extends WP_Widget {

	//  this function runs on instanciate
	function __construct() {
		$params = array(
			'description' 	=> 'This Widget is part of practicing widget, Display any message',
			'name'			=> 'SOS Messager'
		);

		parent::__construct('SOS_Messager', '', $params);
	}

	// responsible for display form in admin area
	public function form() {

	}

	// responsible for display widget on site level
	public function widget() {

	}
}

//  code for register your widget class
add_action( "widgets_init", 'sos_register_messager' );
function sos_register_messager () {
	register_widget( 'SOS_Messager' );
}