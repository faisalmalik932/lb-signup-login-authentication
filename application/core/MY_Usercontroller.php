<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class User_Controller extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        if ( ! $this->session->userdata('frontuser_logged_in'))
        { 
            redirect(base_url('frontuser_login'));
        }
    }
}