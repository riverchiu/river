<?php

class Login extends CI_Controller {
		public function index() 
		{
			if(isset($_SESSION['account']))
					redirect(base_url());
			else
			{
				if(isset($_POST['account']) && isset($_POST['password']))
				{
					$this->load->model('user_model','user');
					$userData=$this->user->GetUserByAccount($_POST['account']);
					if(count($userData)==0)
						$this->ShowLogin();
					else
					{
						if($userData['password']!=md5($_POST['password']))
								$this->ShowLogin();
						else
						{
							$_SESSION['u_guid']=$userData['u_guid'];
							$_SESSION['account']=$userData['account'];
							$_SESSION['name']=$userData['name'];
							redirect(base_url());
						}
					}
				}
				else
					$this->ShowLogin();
					
			}
		}
		public function ShowLogin()
		{
			$this->smarty->assign("base_url",base_url());
			$this->smarty->assign("sAlert",'');
			$this->smarty->assign('loginSubmitAction',"login");
			$this->smarty->view('login.htm');		
		}
}