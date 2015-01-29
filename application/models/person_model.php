<?php
class Person_model extends CI_Model {

	var $db = NULL;
	public function __construct(){
		parent::__construct();
		$this->db = $this->load->database("", TRUE);
	}
	public function getAll(){
		$sql="select * from person";
		$query = $this->db->query($sql);
		return $query->result_array();
		//return $query->row_array();
	}
}
?>