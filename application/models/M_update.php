<?php 
 
class M_update extends CI_Model{	
	function data_claim($claim_no_ref){
		$query = $this->db->query("SELECT * FROM `claim_tb` WHERE `claim_no_ref` = '$claim_no_ref'");
		return $query;
    }

    function update_data_onprocess($claim_user,$date_now,$claim_no_ref){
		$query = $this->db->query("UPDATE `claim_tb` SET `claim_accept` = 'Y', `claim_accept_user` = '$claim_user', `claim_accept_date` = '$date_now' WHERE `claim_no_ref` = '$claim_no_ref'");
		return $query;
    }

    function update_data_reject($claim_user,$date_now,$claim_no_ref){
		$query = $this->db->query("UPDATE `claim_tb` SET `claim_reject` = 'Y', `claim_reject_user` = '$claim_user', `claim_reject_date` = '$date_now' WHERE `claim_no_ref` = '$claim_no_ref'");
		return $query;
    }

	function update_data_done($claim_user,$date_now,$claim_no_ref){
		$query = $this->db->query("UPDATE `claim_tb` SET `claim_close` = 'Y', `claim_close_user` = '$claim_user', `claim_close_date` = '$date_now' WHERE `claim_no_ref` = '$claim_no_ref'");
		return $query;
    }

}