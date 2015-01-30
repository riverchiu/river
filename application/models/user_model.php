<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {

	public function __construct() {
        parent::__construct();
		$this->db = $this->load->database('default', TRUE);
    }
	
	
	function getAll()
	{
		$sql = "SELECT * FROM `user`";
		$query = $this->db->query($sql);
		return	$query->result_array();
	}
	function GetUserByAccount($ac) 
	{
		$fe = array();
		$sql = "SELECT * FROM `user` WHERE `account` = '$ac'";
		$query = $this->db->query($sql);
		$fe = $query->row_array();
		return $fe;
	}
	function GetUserById($id) 
	{
		$fe = array();
		$sql = "SELECT * FROM `user` WHERE `u_guid` = '$id'";
		$query = $this->db->query($sql);
		$fe = $query->row_array();
		return $fe;
	}
	function UpdateNoPassword($ui,$na,$gi)
	{
		$sql = "UPDATE user SET name='$na', g_id='$gi' WHERE  u_guid= '$ui'";
		$query = $this->db->query($sql);
	}
	function Update($ui,$na,$pw,$gi)
	{
		$sql = "UPDATE user SET name='$na',password='".md5($pw)."', g_id='$gi' WHERE  u_guid= '$ui'";
		$query = $this->db->query($sql);
	}
	function Insert($ac,$na,$pw,$gi)
	{
		$sql = "INSERT INTO user SET account= '$ac' , name='$na' , password='".md5($pw)."' , g_id='$gi'";
		$query = $this->db->query($sql);
	}
	function user_list()
	{
		$sql = "SELECT `user`.*,`user_group`.name as group_name FROM `user` left join `user_group` on user_group.g_guid=user.g_id";
		$query = $this->db->query($sql);
		return	$query->result_array();
	}
	
}

?>