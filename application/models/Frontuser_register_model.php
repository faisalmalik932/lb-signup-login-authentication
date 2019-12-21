<?php
class Frontuser_register_model extends CI_Model
{
 function insert($data)
 {
	  $this->db->insert('frontend_users', $data);
	  return $this->db->insert_id();
 }
 function verifyEmail($id) 
 {
    $data = array('status' => 1);
    $this->db->where('id', $id);
    return $this->db->update('frontend_users', $data);
 }

}