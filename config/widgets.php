<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* Name:		Social Igniter : Bookmarks : Widgets
* Author: 	Brennan Novak
* 		  	contact@social-igniter.com
*         	@brennannovak
*
* Project:	http://social-igniter.com
* Source: 	http://github.com/socialigniter/bookmarks
*          
* Description: Widgets for the Bookmarks App for Social Igniter
*/

$config['bookmarks_widgets'][] = array(
	'regions'	=> array('sidebar'),
	'widget'	=> array(
		'module'	=> 'bookmarks',
		'name'		=> 'Recent Bookmarks',
		'method'	=> 'run',
		'path'		=> 'widgets_recent',
		'multiple'	=> 'FALSE',
		'order'		=> '1',
		'content'	=> ''
	)
);