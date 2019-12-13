<?php  
 defined('BASEPATH') OR exit('No direct script access allowed');  
 class Users extends Auth_Controller {  
      //functions  


  function __construct()
    {
        parent::__construct();
        $this->load->Model('Customer_users_model');
        $this->load->library('Crud_custom');
      
      
    }

    public function index() 
      {
        $this->load->view('customer/admin/common/header');
        $this->load->view('customer/admin/common/sidebar');

        $data['users'] = $this->Customer_users_model->get_users();

        $this->load->view('customer/admin/users',$data);
        $this->load->view('customer/admin/common/footer');
      }

    public function edit()
      {
          $data['id']=$this->input->post('id');
          $id=$data['id'];
          $data['first_name']=$this->input->post('first_name');
          $data['last_name']=$this->input->post('last_name');
          $table="users";
     
          $this->crud_custom->update_data($data,$id,$table);
          redirect(base_url()."users");
      }
  
    public function delete_row($id) 
      {   
        $id=$this->uri->segment(3);
        $this->Customer_users_model->delete_user($id); 
        redirect(base_url('users'));
      }

    public function profile()  
      {

        $this->load->view('customer/admin/common/header');
        $this->load->view('customer/admin/common/sidebar');

        $id=$this->uri->segment(3);
        $data['user_profile'] = $this->Customer_users_model->get_user($id);
/*print_r($data['user_profile']);
exit();*/

        $this->load->view('customer/admin/users/user_profile',$data);
        $this->load->view('customer/admin/common/footer');
      }  

    public function feature_row()
      {   
        $id=$this->uri->segment(3);
        $active=$this->uri->segment(4);
        $data['active']=$active;
        $table='users'; 
        $this->crud_custom->update_data($data,$id,$table);
        redirect(base_url('users'));

      }   
    
}  