<?php 
 
class M_data extends CI_Model{	
	function data_area($q){
		$query = $this->db->query("SELECT * FROM `coverage_tb` WHERE `province_name` = '$q' OR `city_name` = '$q' OR `district_name` = '$q' OR `subdistrict_name` = '$q' OR `zip_code` = '$q'");
		return $query;
    }


}