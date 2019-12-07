<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_register extends CI_Controller {

	function __construct()
		{
			  parent::__construct();
			  $this->load->library('form_validation');
			  $this->load->library('Encrypt');
			  $this->load->Model('Customer_register_model');
		}
	public function index()
	{
		$this->load->view('customer/register');
	}
	function validation()
 	{
		$this->form_validation->set_rules('first_name', 'FirstName', 'required|trim');
		$this->form_validation->set_rules('last_name', 'LastName', 'required|trim');
		$this->form_validation->set_rules('email', 'Email Address', 'required|trim|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('password', 'Password', 'required');
	  	if($this->form_validation->run())
	  		{
			   $verification_key = md5(rand());
			   $encrypted_password = md5($this->input->post('password'));
			   $data = array(
			   'first_name'  => $this->input->post('first_name'),
			   'last_name'  => $this->input->post('last_name'),
			   'email'  => $this->input->post('email'),
			   'password' => $encrypted_password,
			   'confirmation_code' => $verification_key,
			   'active'	=>  '1'
	   			);
			   	$this->Customer_register_model->insert($data);
				redirect(base_url()."customer_login");
 			}
			else
			  {
			  	$this->index();
			  }
 	}



}


	/*public function login()
	{
		$data['first_name'] = $this->input->post('first_name');
		$data['last_name'] = $this->input->post('last_name');
	
		$data['email'] = $this->input->post('email');
		$data['password'] = $this->input->post('password');
		$data['password_confirmation'] = $this->input->post('password_confirmation');
		
		$data['created'] =date('Y-m-d H:i:s');

		$this->Register_model->contact_post_m($data);
		//echo "Thank you";
            redirect(base_url()."login");
	}*/

	

