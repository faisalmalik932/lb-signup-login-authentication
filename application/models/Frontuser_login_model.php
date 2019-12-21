<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Frontuser_login_model extends CI_Model{
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }


public function login_frontuser($data)
    {
        $condition = "email =" . "'" . $data['email'] . "' AND " . "password =" . "'" . $data['password'] . "'";
        $this->db->select('frontend_users.id, frontend_users.email, frontend_users.status');
        $this->db->from('frontend_users');
        $this->db->where($condition);
        $this->db->where('status', 1);
        $this->db->limit(1);
        $query = $this->db->get();
        return $query;
    }   
}
?>
    
 