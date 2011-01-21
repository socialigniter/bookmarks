<?php
class Home extends Dashboard_Controller
{
    function __construct()
    {
        parent::__construct();

		$this->data['page_title'] = 'Module Name';
	}
	
	function index()
	{
	
		$this->render();
	}
	
	function shortened()
	{
	
		$this->render();
	}
	
}