<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_login extends CI_Controller {

	function __construct()
		{
			  parent::__construct();
			  $this->load->Model('Customer_login_model'); 
		}
	public function index()
	{
		$this->load->view('customer/login');
		
	}
	public function login()
	{
		
		
		$data['email']=$this->input->post('email');
		$data['password']=$this->input->post('password');

		$query =$this->Customer_login_model->login_customer($data);
		
		if ($query->num_rows() == 1) 
        {
            
			
			$result = $query->result();
			/*print_r($result);
			exit();*/
		 	$session_data = array( 'email' => $result->email,"userid"=>$result->id);
			$this->session->set_userdata('user_logged_in_fintech', $session_data);

			redirect(base_url('admin'));
		}
     	else 
     	{
     		$this->session->set_flashdata('user_wrong_email_password', 'Wrong email or password');     
     		redirect(base_url()."customer_login");
     	}
		
	}
}