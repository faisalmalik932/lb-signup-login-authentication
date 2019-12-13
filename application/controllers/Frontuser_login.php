<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontuser_login extends CI_Controller {

	function __construct()
		{
			  parent::__construct();
			  $this->load->Model('Frontuser_login_model'); 
		}
	public function index()
	{
		$this->load->view('user/frontuser_login');
		
	}
	public function login()
	{
		
		
		$data['email']=$this->input->post('email');
		$data['password']=md5($this->input->post('password'));

		$query =$this->Frontuser_login_model->login_frontuser($data);
		
		if ($query->num_rows() == 1) 
        {
            
			
			$result = $query->result();
			/*print_r($result);
			exit();*/
		 	$session_data = array('email' => $result[0]->email,"userid"=>$result[0]->id);
			$this->session->set_userdata('frontuser_logged_in', $session_data);

			redirect(base_url('user_dashboard'));
		}
     	else 
     	{
     		$this->session->set_flashdata('user_wrong_email_password', 'Wrong email or password');     
     		redirect(base_url()."frontuser_login");
     	}
		
	}
}