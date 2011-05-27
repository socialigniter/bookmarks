<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* Name:		Social Igniter : Bookmarks : Config
* Author: 	Brennan Novak
* 		  	brennan@reverseproductions.com
*         	@brennannovak
*          
* Project:	http://social-igniter.com
* Source: 	http://github.com/socialigniter/bookmarks
*
* Description: basic blog and admin functionality module for Social Igniter
*/

// Events Settings
$config['bookmarks_path']		= 'bookmarks/';
$config['url_style_links']		= array(
	'all'		=> '2010 / 01 / 01 / title-of-link',
	'month'		=> '2010 / 01 / title-of-link',
	'year'		=> '2010 / title-of-link',
);

$config['url_shortener']		= array(
	'bitly'		=> 'Bit.ly',
	'custom'	=> 'Custom'
);