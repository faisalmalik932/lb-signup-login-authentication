<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends Auth_Controller {

	function __construct()
		{
			  parent::__construct();
			  $this->load->Model('Admin_dashboard_model');
			  $this->load->library('session');
			
			
		}

	public function index() 
	{
		//$id =  $this->uri->segment(2);
		// $data['id']=$this->input->post('id');
  //       $id=$data['id'];
        // print_r($id);
        // exit();
        
        $id = $this->session->userdata['user_logged_in_fintech']['userid'];
        //echo $this->session->userid;
        /*print_r($id);
        exit();*/
		$data['users'] = $this->Admin_dashboard_model->get_user($id);
		$this->load->view('customer/admin/common/header',$data);
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