<?php 
 
class M_login extends CI_Model{	
	function check_user_db($username,$password){
		$query = $this->db->query("SELECT * FROM `web_user` WHERE `id` = '$username' AND `user` = '$password'");
		return $query;
    }
}