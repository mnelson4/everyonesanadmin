<?php
/**
 *
Plugin Name: I am user 1
Description:
Version: 0.1
 */
// add_filter(
// 	'determine_current_user',
// 	function($user){
// 		return 1;
// 	},
// 	100
// );

function wp_get_current_user(){
	wp_set_current_user( 1 );
	global $current_user;
	//var_dump($current_user);
	return $current_user;
}

function wp_validate_auth_cookie(){
	return 1;
}