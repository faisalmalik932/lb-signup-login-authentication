<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Customer_users_model extends CI_Model{
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
 

    public function get_users() 
    {
        $this->db->select('*');
        $this->db->from('users');/*
        $this->db->order_by("name", "asc");*/
        $query = $this->db->get();
        return $query->result();
    }
    public function get_user($id) 
    {
        $this->db->select('*');
        $this->db->from('users');/*
        $this->db->order_by("name", "asc");*/
        $this->db->where('id' ,$id);
        $query = $this->db->get();
        return $query->result();
    }
    public function delete_user($id)
    {
        $this->db->delete('users',array('id'=>$id));
    }
    
}
?>