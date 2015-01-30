<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class River_Controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!isset($_SESSION['account']))
			redirect(base_url()."login");
	}
	public function check_Competence($url="")
	{
		//網址解析
		if(!$url) return;
		$url_array=explode("/",$url);
		
		$this->load->model('User_model', 'user');
		$this->load->model('Competence_model', 'competence');//
		//取得使用者資料
		$UserData=$this->user->GetUserById($_SESSION['u_guid']);
		//使用者種類=99 最高權限 無需判斷任何權限
		if($UserData['g_id']==99)
			return;
		//取得此使用者之權限
		$user_competence= $this->competence->getGroupById($UserData['g_id']);

		//if權限空值 無使用權限
		if(count($user_competence)==0)
		{
			$this->myjavascript->vAlert("沒有權限");
			$this->myjavascript->vBack();
			exit;
		}
		else
		{
			
			//使用unserialize 解字串
			$user_cArr=unserialize($user_competence['competence']);
			if(isset($user_cArr[$url_array[3]][$url_array[4]]))
				return;
			//無須判斷權限放此
			if($url_array[3]=="member_group" && $url_array[4]=="view")
				return;//view 無需權限
			else if(!isset($user_cArr[$url_array[3]][$url_array[4]]))								//如不存在代表無此權限
			{
				$this->myjavascript->vAlert("沒有權限");
				$this->myjavascript->vBack();			
				exit;
			}
		}
	}

}	