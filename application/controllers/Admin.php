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
		$this->load->view('customer/admin/common/header');
		$this->load->view('customer/admin/common/sidebar');
    	$this->load->view('customer/admin/index');
    	$this->load->view('customer/admin/common/footer');
	}
	public function logout()
    {
        // Removing session data
        $sess_array = array('email' => '','userid'=>'','username'=>'');
        $this->session->unset_userdata('user_logged_in_fintech', $sess_array);
        redirect(base_url()."customer_login");
	}
}