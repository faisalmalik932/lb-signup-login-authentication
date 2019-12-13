<?php
 class Crud_custom extends CI_Model{

	public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    function password_encript($password)
	{
	    $encription_1 = "w:r@%y_rgp";
	    $password = $encription_1 . $password;
	    for($i = 0; $i < 10; $i++)
	    {
	        $password = md5($password);
	    }
	    // Some time has passed, and you have added to your md5 function
	    $encription_2 = "#5%tz@6Blk;!";
	    $password = $encription_2 . $password;
	    for($i = 0; $i < 10; $i++)
	    {
	        $password = md5($password);
	    }
	    return $password;
	}

    public function delete_data($id,$table)
    {
        $this->db->set('status',0);
        $this->db->where('id',$id);
        $this->db->update($table,array('id'=>$id));
    }
     public function update_data($data, $id,$table)
    {
        $this->db->where('id',$id);
        $this->db->update($table,$data);
    }
   
}