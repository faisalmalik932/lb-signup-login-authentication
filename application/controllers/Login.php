<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
		{
			  parent::__construct();
			  $this->load->Model('Customer_login_model');
			  //$this->load->library('session');
			  
		}
	public function index()
	{
		$this->load->view('customer/login');
		
	}
	public function customer_login()
	{
		
		$data['email']=$this->input->post('email');
		$data['password']=md5($this->input->post('password'));

		$query =$this->Customer_login_model->login_customer($data);
		/*print_r($result);
		exit();*/
		//$this->session->set_flashdata('message', 'Please login');
		if ($query->num_rows() == 1) 
        {
            
			
			$result = $query->result();
		 	$session_data = array( 'email' => $result->email,"userid"=>$result->id);
			$this->session->set_userdata('user_logged_in_fintech', $session_data);

			redirect(base_url('admin'));
		}
     	else 
     	{
     		// echo "Wrong";
     		$this->session->set_flashdata('user_wrong_email_password', 'Wrong email or password');     
     		redirect(base_url()."login");
     	}
		
	}
}