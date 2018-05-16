<?php

error_reporting(EP_ALL);

/*
	Plugin Name: Sos Twitter Widget
	Plugin URI: http://expertcodedesign.com
	Description: This is simple widget for Twitter feeds
	Version: 1.0.0
	Author: Sorabh
	Author URI: http://sorabh86.github.com
*/

class SOS_Twitter_Widget extends WP_Widget {

	function __construct() {
		$arg = array(
			'name' 	=> 'SOS Twitter Widget',
			'description' => 'Widget for Twitter feeds build by sorabh'
		);
		parent::__construct('SOS_Twitter_Widget', '', $arg);
	}

	public function form() {

	}

	public function widget() {

	}
}

add_action( 'widgets_init', 'sos_twitter_widget_register' );
function sos_twitter_widget_register() {
	register_widget( 'SOS_Twitter_Widget' );
}
