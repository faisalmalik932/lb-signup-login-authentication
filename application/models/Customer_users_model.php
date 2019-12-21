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
        $this->db->from('frontend_users');/*
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
    public function get_front_user($id) 
    {
        $this->db->select('*');
        $this->db->from('frontend_users');/*
        $this->db->order_by("name", "asc");*/
        $this->db->where('id' ,$id);
        $query = $this->db->get();
        return $query->result();
    }
    public function delete_user($id)
    {
        $this->db->delete('frontend_users',array('id'=>$id));
    }
                        


                        /*For Joins*/


    /*public function get_users() 
    {
        $this->db->select('frontend_users.id,frontend_users.first_name');
        $this->db->from('frontend_users');
        $this->db->join('users','frontend_users.id = users.frontend_users_id');
        $this->db->select('users.*');
        $query = $this->db->get();
        return $query->result();
    }*/
    
}
?>