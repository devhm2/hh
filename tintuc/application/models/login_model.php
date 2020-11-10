<?php
	 // defined('BASEPATH') OR exit('No direct script access allowed');
	 // /**
	 //  * 
	 //  */
	 // class Login_model extends CI_Model
	 // {
	 	
	 // 	function __construct()
	 // 	{
	 // 		parent :: __construct();
	 // 	}
	 // 	public function validate(){
	 // 		$username = $this->security->xss_clean ($this->input->post('username'));
	 // 		$password = $this->security->xss_clean ($this->input->post('password'));

	 // 		   // Prep the query
	 // 		$this->db->select('idlogin,username,password');
	 //        $this->db->where('username', $username);
	 //        $this->db->where('password', $password);
	 //        $query = $this->db->get('users');

	 //        if($query->num_rows == 1)
  //       	{
  //           // If there is a user, then create session data
	 //            $row = $query->row();
	 //            $data = array(
	 //                    'idlogin' => $row->idlogin,
	 //                    'username' => $row->username,
	 //                    'password' => $row->password,
	 //                    'validated' => true
	 //                    );
	 //            $this->session->set_userdata($data);
	 //            return true;
  //       	}
  //       	return false;
	 // 	}
	 // }


 ?> 
   <?php
		Class Login_model extends CI_Model
		{
		 function login($username, $password)
		 {
		   $this -> db -> select('idlogin, username, password');
		   $this -> db -> from('users');
		   $this -> db -> where('username', $username);
		   $this -> db -> where('password', MD5($password));
		   $this -> db -> limit(1);

		   $query = $this -> db -> get();

		   if($query -> num_rows() == 1)
		   {
		     return $query->result();
		   }
		   else
		   {
		     return false;
		   }
		 }
		}
?>