<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Customer_login_model extends CI_Model{
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }


public function login_customer($data)
    {
        $condition = "email =" . "'" . $data['email'] . "' AND " . "password =" . "'" . $data['password'] . "'";
        $this->db->select('users.id, users.email');
        $this->db->from('users');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();
        return $query;
    }   
}
?>
    
 