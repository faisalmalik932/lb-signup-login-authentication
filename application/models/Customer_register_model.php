<?php
class Customer_register_model extends CI_Model
{
 function insert($data)
 {
	  $this->db->insert('users', $data);
	  return $this->db->insert_id();
 }
 function verifyEmail($id) 
 {
    $data = array('active' => 1);
    $this->db->where('id', $id);
    return $this->db->update('users', $data);
}

}