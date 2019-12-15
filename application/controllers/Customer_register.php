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
 		$this->load->library('session');
		$this->form_validation->set_rules('first_name', 'FirstName', 'required|trim|alpha');
		$this->form_validation->set_rules('last_name', 'LastName', 'required|trim|alpha');
		$this->form_validation->set_rules('email', 'Email Address', 'required|trim|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|max_length[25]');
	  	if($this->form_validation->run())
	  		{
			   $verification_key = md5(rand());
			   $encrypted_password = $this->input->post('password');
			   $code = $this->input->post('code');
			   $set = '123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
			   $code = substr(str_shuffle($set), 0, 12);
			   $data = array(
			   'first_name'  => $this->input->post('first_name'),
			   'last_name'  => $this->input->post('last_name'),
			   'email'  => $this->input->post('email'),
			   'updated_at' => $this->input->post('updated_at'),        
        		'created_at' => date('Y-m-d H:i:s'),
			   'password' => $encrypted_password,
			   'code' => $code,
			   'confirmation_code' => $verification_key,
			
			   'active'	=>  '0'
	   			);
			   	$id = $this->Customer_register_model->insert($data);

			   	/*Email code goes here*/
			   	$this->load->library('email');

			   	$config['protocol'] = 'mail';
			   	$config['smtp_host'] = 'ssl://smtp.gmail.com';
			   	$config['smtp_port'] = '465';
			   	$config['smtp_user'] = 'fassi932@gmail.com';
				$config['smtp_pass'] = 'lowlight932';
				$config['charset'] = 'utf-8';
				//$config['mailpath'] = '/usr/sbin/sendmail';
				
				
				
				
				$config['mailtype'] = 'html';
				$config['wordwrap'] = TRUE;

				$this->email->initialize($config);


				$this->email->from('fassi932@gmail.com', 'Faisal Malik');
				$this->email->to($this->input->post('email'));
				

				$this->email->subject('User Registration Email');

				//$id  = $this->uri->segment(3);

    			$verificationLink = base_url() . 'customer_register/verify/' . $id ;


				$message = "<a href='".$verificationLink."' target='_blank'>VERIFY EMAIL</a><br /><br /><br />"
							. $this->input->post('email')
							. "And Your Password is: "
							. $this->input->post('password')
							. "And Your Code is: " . $code
							;


				$this->email->message($message);

				if($this->email->send())
			     {
			     	//redirect(base_url()."frontuser_login/");
			     $this->session->set_flashdata('msg', 'A confirmation email has been sent to ' . $this->input->post('email') .'. Please activate your account using the link provided.');
			      /*redirect(base_url() . 'customer_register/verify/'.$id);*/
			     }
			     else
			    {
			     show_error($this->email->print_debugger());
			    }

			     echo $this->session->flashdata('msg');
				//redirect(base_url()."customer_login");
 			}
			else
			  {
			  	$this->index();
			  }
 	}
 	public function verify($id) 
 	{
    if($this->Customer_register_model->verifyEmail($id))
    {
    redirect(base_url('customer_login')); 
    } 
    else 
    {
        redirect(base_url('customer_register'));    
    }

}
 	
}

	

