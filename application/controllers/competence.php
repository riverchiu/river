<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Competence extends River_Controller {

	public function __construct() {
		parent::__construct();
		parent::check_Competence($_SERVER['PHP_SELF']);
	}
	public function index()
	{
	}
	public function lists()
	{
		$this->load->model('competence_model', 'competence');
		$data=$this->competence->getAll();
		$this->smarty->assign("data",$data);
		$this->smarty->assign("base_url",base_url());
		$this->smarty->assign("sfunc",$this->uri->segment(1));
		$this->smarty->assign("saction",$this->uri->segment(2));
		$this->smarty->assign("bodyTpl",$this->smarty->fetch("competence_lists.htm"));
		$this->smarty->assign("gUserName",$_SESSION['name']);
		$this->smarty->view('main.htm');
	}
	public function competenceedit()
	{
		//權限陣列匯入
		include_once("/../ini/system_tw.php");		
		
		$this->load->model('competence_model', 'competence');
		
		//判斷是否為儲存
		if(isset($_POST['Submit']))
		{	
			//POST=1 表示只有post Submit 沒勾選任何值
			if(count($_POST)==1)
			{
				//直接update GroupAccess為空值
				$this->competence->updateGroupAccess($_GET['id'],"");
				//show 更新成功
				$this->myjavascript->vAlert("儲存成功");
				//重導頁面
				$this->myjavascript->vBack();
				exit;
			}

			$aRow=array();
			//抓取post所有資料
			foreach($_POST as $key=>$value)
			{
				//post 'Submit' 不是權限值 直接跳過
				if($key=="Submit")
					continue;
				//拆解回傳之name值 頁面_動作
				$key_arr=explode("_",$key);
				//計算拆解後個數 如=>2 ex:頁面_動作
				//計算拆解後個數 如=>2以上 ex:頁面_頁面_頁面....._動作 合併成 (頁面*N)_動作
				if(count($key_arr)<=2)
					$aRow[$key_arr[0]][$key_arr[1]]=1;
				else
				{
					$key_fun="";
					//i=(0~count-2)為 頁面
					//i=(count-1)為 動作
					for($i=0;$i<count($key_arr)-1;$i++)
					{
					//合併所有頁面
						if($i==0)
							$key_fun=$key_arr[$i];
						else
							$key_fun=$key_fun."_".$key_arr[$i];
					}
					//存成  (頁面*N)_動作形式
					$aRow[$key_fun][$key_arr[count($key_arr)-1]]=1;
				}
			}
			//陣列使用serialize轉成字串
			$RowString=serialize($aRow);
			//更新GroupAccess資料庫
		    $this->competence->updateGroupAccess($_GET['id'],$RowString);
			//顯示'更新成功'
			$this->myjavascript->vAlert("儲存成功");
			//重導頁面
			$this->myjavascript->vBack();
			exit;
		}
		
		//取得使用者群組權限資料		
		$data = $this->competence->getGroupById($_GET['id']);

		$member_ar=unserialize($data['competence']);
		$groupName=$data['name'];
		$groupDesc=$data['desc'];
		
		/**
		 *  @DESC 抓取system_tw 權限陣列
		 */
		$system_ar=array();
		$i=0;
		foreach ($_gFunction as $key => $value){
			$system_ar[$i]['key'] = $key;
			$system_ar[$i]['name'] = $value;
			$j=0;
			foreach ($_gAction[$key] as $key2 => $value2){
				$system_ar[$i]['action'][$j]['name'] = $value2;
				$system_ar[$i]['action'][$j]['key'] = $key2;
				$system_ar[$i]['action'][$j]['access']=0;
				if(isset($member_ar[$key][$key2]))$system_ar[$i]['action'][$j]['access'] = 1;
				$j++;
			}
		
			$i++;
		}

		$this->smarty->assign("competenceData",$system_ar);
		$this->smarty->assign("groupName",$groupName);
		$this->smarty->assign("groupDesc",$groupDesc);
		
		$this->smarty->assign("id",$_GET['id']);
		$this->smarty->assign("sfunc",$this->uri->segment(1));
		$this->smarty->assign("saction",$this->uri->segment(2));
		$this->smarty->assign("gUserName",$_SESSION['name']);
		$this->smarty->assign("base_url", 	base_url() );
		$this->smarty->assign("bodyTpl",	$this->smarty->fetch("competence_editCompetence.htm") );
		$this->smarty->view('main.htm');
	}
}