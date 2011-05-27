<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
* Name:			Social Igniter : Bookmark : Install
* Author: 		Brennan Novak
* 		  		contact@social-igniter.com
*         		@brennannovak
*          
* Created: 		Brennan Novak
*
* Project:		http://social-igniter.com/
* Source: 		http://github.com/socialigniter/bookmark
*
* Description: 	Install values for Bookmark App for Social Igniter 
*/
/* Settings */
$config['bookmark_settings']['widgets'] 			= 'TRUE';
$config['bookmark_settings']['categories'] 			= 'TRUE';
$config['bookmark_settings']['enabled']				= 'TRUE';
$config['bookmark_settings']['date_style'] 			= 'DIGITS';
$config['bookmark_settings']['categories_display']	= 'yes';
$config['bookmark_settings']['shorten_url']			= 'yes';
$config['bookmark_settings']['url_shortener']		= 'bitly';
$config['bookmark_settings']['comments_per_page']	= '5';
$config['bookmark_settings']['comments_allow']		= 'no';