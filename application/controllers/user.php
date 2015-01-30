<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends River_Controller {

	public function __construct() {
		parent::__construct();
		parent::check_Competence($_SERVER['PHP_SELF']);
	}
	public function index()
	{
	}
	public function lists()
	{
		$this->load->model('user_model', 'user');
		$user=$this->user->user_list();
		
		$this->smarty->assign("data",$user);
		$this->smarty->assign("base_url",base_url());
		$this->smarty->assign("sfunc",$this->uri->segment(1));
		$this->smarty->assign("saction",$this->uri->segment(2));
		$this->smarty->assign("bodyTpl",$this->smarty->fetch("user_lists.htm"));
		$this->smarty->assign("gUserName",$_SESSION['name']);
		$this->smarty->view('main.htm');
	}
	public function edit()
	{
		if(count($_GET)>0)
		{
			if(count($_POST)>0)
			{
				$this->load->model('user_model', 'user');
				if($_POST['password']=="")
				{
					$this->user->updateNoPassword($_GET['id'],$_POST['name'],$_POST['g_id']);
					$this->myjavascript->vAlertRedirect("更新成功","lists");
				}
				else
				{
					$this->user->Update($_GET['id'],$_POST['name'],$_POST['password'],$_POST['g_id']);
					$this->myjavascript->vAlertRedirect("更新成功","lists");
				}
			}
			$this->load->model('user_model', 'user');
			$userData=$this->user->GetUserById($_GET['id']);
			$this->load->model('Competence_model', 'competence');
			$comData=$this->competence->getAll();
			$this->smarty->assign("userData",$userData);
			$this->smarty->assign("base_url",base_url());
			$this->smarty->assign("comData",$comData);
			$this->smarty->assign("sfunc",$this->uri->segment(1));
			$this->smarty->assign("saction",$this->uri->segment(2));
			$this->smarty->assign("bodyTpl",$this->smarty->fetch("user_edit.htm"));
			$this->smarty->assign("gUserName",$_SESSION['name']);
			$this->smarty->view('main.htm');
		}
		else
			$this->myjavascript->vRedirect("lists");
		
	}
	public function delete()
	{
		if(count($_GET)>0)
		{
			$this->load->model('user_model', 'user');
			$this->user->Delete($_GET['id']);
			$this->myjavascript->vAlertRedirect("資料已刪除","lists");
		}
		else
			$this->myjavascript->vRedirect("lists");
	}
	public function add()
	{
		if(count($_POST)>0)
		{
			$this->load->model('user_model', 'user');
			$userData=$this->user->GetUserByAccount($_POST['account']);
			if(count($userData)>0)
			{
				$this->myjavascript->vAlertRedirect("帳號已被申請","");
				exit;
			}
			$this->user->Insert($_POST['account'],$_POST['name'],$_POST['password'],$_POST['g_id']);
			$this->myjavascript->vAlertRedirect("帳號申請成功","lists");
			exit;
		}
		$this->load->model('Competence_model', 'competence');
		$comData=$this->competence->getAll();
		$this->smarty->assign("base_url",base_url());
		$this->smarty->assign("comData",$comData);
		$this->smarty->assign("sfunc",$this->uri->segment(1));
		$this->smarty->assign("saction",$this->uri->segment(2));
		$this->smarty->assign("bodyTpl",$this->smarty->fetch("user_add.htm"));
		$this->smarty->assign("gUserName",$_SESSION['name']);
		$this->smarty->view('main.htm');
	}
	
}