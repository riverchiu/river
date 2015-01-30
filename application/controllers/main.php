<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends River_Controller {
	public function __construct()
	{
		parent::__construct();
	}
	
	public function index() {
		echo date("");
		$this->smarty->assign("base_url",base_url());
		$this->smarty->assign("sfunc",$this->uri->segment(1));
		$this->smarty->assign("saction",$this->uri->segment(2));	
		$this->smarty->assign("bodyTpl",$this->smarty->fetch("desc.htm"));;
		$this->smarty->assign("gUserName",$_SESSION['name']);
		$this->smarty->display('main.htm');
	}

}