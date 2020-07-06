<?php
/**
 *
Plugin Name: Everyone's the Admin
Description: Never log in again. Anyone visits the site is an administrator. Only use in isolated development.
Version: 0.1
 */
// add_filter(
// 	'determine_current_user',
// 	function($user){
// 		return 1;
// 	},
// 	100
// );
if( ! function_exists('wp_get_current_user')){

	function wp_get_current_user(){
		wp_set_current_user( 1 );
		global $current_user;
		//var_dump($current_user);
		return $current_user;
	}
}


if( ! function_exists('wp_validate_auth_cookie')){
	function wp_validate_auth_cookie(){
		return 1;
	}
}