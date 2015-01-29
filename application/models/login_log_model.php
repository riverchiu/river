<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_log_model extends CI_Model {

	public function __construct() {
        parent::__construct();
		$this->db = $this->load->database('default', TRUE);
    }
	
	

	function GetAll() 
	{
		$sql = "SELECT * FROM `login_log` order by `login_time` DESC";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	function insert($ac,$ti,$su)
	{
		$sql="INSERT INTO login_log SET `account` = '$ac',`login_time` = '$ti',`is_success`='$su'";
		$query = $this->db->query($sql);
		return;
	}
	
}

?>