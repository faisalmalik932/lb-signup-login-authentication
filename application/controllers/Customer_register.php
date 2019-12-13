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
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|max_length[25]');
	  	if($this->form_validation->run())
	  		{
			   $verification_key = md5(rand());
			   $encrypted_password = md5($this->input->post('password'));
			   $data = array(
			   'first_name'  => $this->input->post('first_name'),
			   'last_name'  => $this->input->post('last_name'),
			   'email'  => $this->input->post('email'),
			   'updated_at' => $this->input->post('updated_at'),        
        		'created_at' => date('Y-m-d H:i:s'),
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

	

