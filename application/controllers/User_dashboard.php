<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_dashboard extends CI_Controller {

	function __construct()
		{
			  parent::__construct();
			  $this->load->Model('User_dashboard_model'); 
			  $this->load->library('Crud_custom');
			  $this->load->library('form_validation');
			  if ( ! $this->session->userdata('frontuser_logged_in'))
        		{ 
            		redirect(base_url('frontuser_login'));
        		}
		}
	public function index()
	{
		
		$this->load->view('user/common/header');
		$id = $this->session->userdata['frontuser_logged_in']['userid'];
		
		$data['users'] = $this->User_dashboard_model->get_users($id);
		$this->load->view('user/dashboard', $data);
		
	}
	public function account()
	{
		$this->load->view('user/common/header');
		$id = $this->session->userdata['frontuser_logged_in']['userid'];
          
		$data['dashboard_users'] = $this->User_dashboard_model->get_users_account($id);

		$this->load->view('user/user_account', $data);
		
	}
	public function contact()
	{
		$this->load->view('user/common/header');
		$id = $this->session->userdata['frontuser_logged_in']['userid'];
          
		//$data['dashboard_users'] = $this->User_dashboard_model->users_contact($id);

		$this->load->view('user/contact'/*, $data*/);
		
	}
	public function contact_send()
	{
		
		$data['name'] = $this->input->post('name');
		$data['email'] = $this->input->post('email');
	
		$data['message'] = $this->input->post('message');
		
		$data['created'] =date('Y-m-d H:i:s');

		$this->User_dashboard_model->contact_post_m($data);
		//echo "Thank you";
            redirect($_SERVER['HTTP_REFERER']);
	}
	public function edit()
      {
          $data['id']=$this->input->post('id');
          $id=$data['id'];
          $data['first_name']=$this->input->post('first_name');
          $data['last_name']=$this->input->post('last_name');
          $data['email']=$this->input->post('email');
          $table="frontend_users";
     
          $this->crud_custom->update_data($data,$id,$table);
          redirect(base_url()."user_dashboard");
      }

	public function logout()
    {
        $sess_array = array('email' => '','userid'=>'');
        $this->session->unset_userdata('frontuser_logged_in', $sess_array);
        redirect(base_url()."frontuser_login");
	}

	public function delete_row($id) 
	{   
	    $id=$this->uri->segment(3);
	    $this->User_dashboard_model->delete_user($id);

	    $sess_array = array('email' => '','userid'=>'');
        $this->session->unset_userdata('frontuser_logged_in', $sess_array);

	    redirect(base_url('frontuser_register'));
	}
	
}