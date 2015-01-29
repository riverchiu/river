<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {

	public function __construct() {
        parent::__construct();
		$this->db = $this->load->database('default', TRUE);
    }
	
	

	function GetUserByAccount($ac) 
	{
		$fe = array();
		$sql = "SELECT * FROM `user` WHERE `account` = '$ac'";
		$query = $this->db->query($sql);
		$fe = $query->row_array();
		return $fe;
	}
	
}

?>