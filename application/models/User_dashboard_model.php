<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class User_dashboard_model extends CI_Model{
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
 

    public function get_users($id) 
    {
        $this->db->select('*');
        $this->db->from('frontend_users');/*
        $this->db->order_by("name", "asc");*/
         $this->db->where('id',$id);
        $this->db->limit(1);
        $query = $this->db->get();
        return $query->result();
    }
    public function get_users_account($id) 
    {
        $this->db->select('*');
        $this->db->from('frontend_users');/*
        $this->db->order_by("name", "asc");*/
        $this->db->where('id',$id);
       $this->db->limit(1);
        $query = $this->db->get();
        return $query->result();
    }

    public function get_contact() 
    {
        $this->db->select('*');
        $this->db->from('contact');/*
        $this->db->order_by("name", "asc");*/
        $query = $this->db->get();
        return $query->result();
    }
    
    public function delete_user($id)
    {
        $this->db->delete('frontend_users',array('id'=>$id));
    }
    public function contact_post_m($data) 
    {
        $this->db->insert('contact', $data);
    }
    
    
}
?>