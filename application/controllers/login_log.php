<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_log extends River_Controller {

	public function __construct() {
		parent::__construct();
	}
	public function index()
	{
	}
	public function lists()
	{
		$this->load->model('login_log_model', 'login_log');
		$log_data=$this->login_log->getAll();
		$this->smarty->assign("data",$log_data);
		$this->smarty->assign("base_url",base_url());
		$this->smarty->assign("sfunc",$this->uri->segment(1));
		$this->smarty->assign("saction",$this->uri->segment(2));
		$this->smarty->assign("bodyTpl",$this->smarty->fetch("login_log.htm"));
		$this->smarty->assign("gUserName",$_SESSION['name']);
		$this->smarty->view('main.htm');
	}
}