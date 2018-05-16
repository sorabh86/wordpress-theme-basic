<?php 
/*
	Plugin Name: SOS Twitter Shortcode
	Plugin URI: http://expertcodedesign.com
	Description: Simple Shortcode
	Author: Sorabh
	Author URI: http://sorabh86.github.com
	Version: 1.0
*/

//  simple shortcode ex.
// add_shortcode( 'sos_twitter', function(){
// 	return '<a href="http://twitter.com/sorabh86">Follow Me on Twitter</a>';
// });

// adding $atts argument for access shortcode attributes for ex. [sos_twitter user="sorabh86"]
// add_shortcode( 'sos_twitter', function($atts){
// 	$atts['user']?$atts['user']:'sorabh86';
// 	return '<a href="http://twitter.com/'.$atts['user'].'">Follow Me on Twitter</a>';
// });

// specify content of shortcode, for ex. [sos_twitter] The content [/sos_twitter]
// add_shortcode( 'sos_twitter', function($atts, $content){
// 	$atts['user'] = isset($atts['user']) ? $atts['user'] : 'sorabh86';
// 	$content = empty(!$content) ? $content : 'Follow Me on Twitter';
// 	return '<a href="http://twitter.com/'.$atts['user'].'">'.$content.'</a>';
// });

// cleanup best practise
add_shortcode( 'sos_twitter', function($atts, $content){
	// wordpress function that gives you easy to manage default values and re-assign to $atts variable
	$atts = shortcode_atts( array(
			'user' 		=> 'sorabh86',
			'content'	=>	!empty($content)?$content:'Follow Me on Twitter'
		), $atts
	);

	// php function that extract array key value to local variables
	extract($atts);

	return "<a href='http://twitter.com/$user.'>$content</a>";
});