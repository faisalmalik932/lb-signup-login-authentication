<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Auth_Controller extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        if ( ! $this->session->userdata('user_logged_in_fintech'))
        { 
            redirect(base_url('login'));
        }
    }
}