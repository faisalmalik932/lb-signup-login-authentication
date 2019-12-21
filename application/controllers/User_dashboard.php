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
          
		$data['dashboard_users_info'] = $this->User_dashboard_model->dashboard_users_info_m($id);
		/*print_r($data['dashboard_users_info']);
		exit();
*/
		$this->load->view('user/contact', $data);
		
	}
	public function contact_send()
	{
		
		$data['name'] = strtolower($this->input->post('name'));
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
          $data['first_name'] = strtolower($this->input->post('first_name'));
          $data['last_name']= strtolower($this->input->post('last_name'));
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
	public function img_upload()
	{
		
		$this->load->view('user/common/header');
		$this->load->view('user/img_upload');
	}
		
		
	public function upload()
	{
		
		$this->load->view('user/common/header');
		$this->load->view('user/img_upload');

		$data['pic'] = $this->input->post('pic');

		if ($_FILES['pic']['error'] != 4 ) 
                { 
                    $config['upload_path'] = './frontend/users/';
                    $config['allowed_types'] = 'gif|jpg|png|jpeg';
                    $config['max_size'] = '20000';
                    $config['max_width']  = '20240';
                    $config['max_height']  = '17680';
                    $config['encrypt_name'] = TRUE;
                    $config['file_ext_tolower'] = TRUE;
                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);

                        if(!$this->upload->do_upload('pic'))
                        {
                             echo $this->upload->display_errors();
                        }
                        else
                        {   

                            $this->load->library('image_lib');
                            $image_data=$this->upload->data();

                            $configer =  array(
                              'image_library'   => 'gd2',
                              'maintain_ratio'   => TRUE,
                              'quality'   => '100%',
                              'source_image'    =>  $image_data['full_path'],
                              'maintain_ratio'  =>  FALSE,
                              'width'           =>  301, 
                              'height'          =>  254,
                            );
                            $this->image_lib->clear();
                            $this->image_lib->initialize($configer);
                            $this->image_lib->resize();

                            $abc = array('upload_data' => $this->upload->data());
                            $Path=$abc['upload_data']['file_name'];
                            $data['pic']=$Path;
                            
                        }
                }
		$id = $this->session->userdata['frontuser_logged_in']['userid'];
		
		$this->User_dashboard_model->upload_m($data, $id);
        redirect(base_url()."user_dashboard");
	}
	
	
}