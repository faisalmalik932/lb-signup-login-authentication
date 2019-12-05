<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends Auth_Controller {

	function __construct()
		{
			  parent::__construct();
			  //$this->load->Model('Admin_panel_model');
			
			
		}

	public function index() 
	{
    	 echo "string";
	}
}