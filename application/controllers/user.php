<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends River_Controller {

	public function __construct() {
		parent::__construct();
	}
	public function index()
	{
	}
	public function lists()
	{
		$this->load->model('user_model', 'user');
		$user=$this->user->getAll();
		$this->smarty->assign("data",$user);
		$this->smarty->assign("base_url",base_url());
		$this->smarty->assign("sfunc",$this->uri->segment(1));
		$this->smarty->assign("saction",$this->uri->segment(2));
		$this->smarty->assign("bodyTpl",$this->smarty->fetch("user_lists.htm"));
		$this->smarty->assign("gUserName",$_SESSION['name']);
		$this->smarty->view('main.htm');
	}
}