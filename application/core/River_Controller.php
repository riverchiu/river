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
		
		$this->lang->load('tw','TW');
		//使用者資料
		$user_id=$this->mysession->get('gUserId');
		
		$this->load->model('Member_model', 'member');
		//取得使用者資料
		$MemberData=$this->member->GetMember($user_id);
		//使用者種類=0 最高權限 無需判斷任何權限
		if($MemberData['user_type']==0)
			return;
		//取得此使用者之權限
		$user_competence= $this->member->GetGroupAccess($user_id);
		//if權限空值 無使用權限
		if($user_competence=="")
		{
			$this->myjavascript->vAlert($this->lang->line('_LANG_NOT_ACCESS'));
			$this->myjavascript->vBack();
			exit;
		}
		else
		{
			//使用unserialize 解字串
			$user_cArr=unserialize($user_competence);
			//因程式function及寫法沒統一,在此做修正判斷權限方式
			if($url_array[4]=="edit" && $url_array[6]=="0")											//編輯參數為0更改為新增
				$url_array[4]="add";
			if($url_array[4]=="editphoto")															//文章內容及封面縮圖 權限設定至文章'edit'
				$url_array[4]="edit";
			if($url_array[4]=="editcxt")
				$url_array[4]="edit";
			if($url_array[4]=="push" || $url_array[4]=="hide" || $url_array[4]=="changeFlag")		//更改狀態值 
				$url_array[4]="flag";
			if($url_array[4]=="edit_mark")
				$url_array[4]="mark";
			if($url_array[3]=="userlog" && $url_array[4]=="lists")									//登入紀錄
				$url_array[3]="log";
			if($url_array[3]=="userlog" && $url_array[4]=="export")
				$url_array[3]="log";
			if($url_array[3]=="userlog" && $url_array[4]=="delete")
				$url_array[3]="log";
			if($url_array[3]=="userlog" && $url_array[4]=="recordlists")							//操作紀錄
			{
				$url_array[3]="action";
				$url_array[4]="lists";
			}
			if($url_array[3]=="userlog" && $url_array[4]=="recordexport")
			{
				$url_array[3]="action";
				$url_array[4]="export";
			}
			if($url_array[3]=="userlog" && $url_array[4]=="recorddelete")
			{
				$url_array[3]="action";
				$url_array[4]="delete";
			}
			
			//無須判斷權限放此
			if($url_array[3]=="member_group" && $url_array[4]=="view")
				return;//view 無需權限
			else if(!isset($user_cArr[$url_array[3]][$url_array[4]]))								//如不存在代表無此權限
			{
				$this->myjavascript->vAlert($this->lang->line('_LANG_NOT_ACCESS'));
				$this->myjavascript->vBack();			
				exit;
			}
		}
	}

}	