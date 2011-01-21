<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* Blog Library
*
* @package		Content Igniter
* @subpackage	Events Igniter Library
* @author		Brennan Novak
* @link			http://brennannovak.com
*
* Contains basic blog information
*/
 
class Bookmarks_igniter
{

	function __construct()
	{
		$this->ci =& get_instance();
		
		// Load Configs
		$this->ci->load->config('bookmarks');

		// Define Congfig Variables
		$this->site_id					= $this->ci->config->item('site_id');

	}

}