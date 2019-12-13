<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	function __construct()
		{
			  parent::__construct();
			  $this->load->Model('User_dashboard_model');
			  //$this->header->head();
		}
	public function index()
	{
		$this->load->view('customer/admin/common/header');
        $this->load->view('customer/admin/common/sidebar');

        $data['contacts'] = $this->User_dashboard_model->get_contact();

        $this->load->view('customer/admin/contact',$data);
        $this->load->view('customer/admin/common/footer');
	}
}