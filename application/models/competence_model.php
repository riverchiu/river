<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Competence_model extends CI_Model {

	public function __construct() {
        parent::__construct();
		$this->db = $this->load->database('default', TRUE);
    }
	
	
	function getAll()
	{
		$sql = "SELECT * FROM `user_group`";
		$query = $this->db->query($sql);
		return	$query->result_array();
	}
	function getGroupById($id)
	{
		$sql = "SELECT * FROM `user_group` where `g_guid`='$id'";
		$query = $this->db->query($sql);
		return	$query->row_array();
		
	}
	function updateGroupAccess($id,$co)
	{
		$sql = "UPDATE `user_group` SET `competence`='$co' WHERE `g_guid`='$id'";
		$query = $this->db->query($sql);
	}
}

?>