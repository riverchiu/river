<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Person extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}
	public function index()
	{
	}
	public function lists()
	{
		$this->load->model('person_model', 'person');
		$person=$this->person->getAll();
		$this->smarty->assign("data",$person);
		$this->smarty->assign("base_url",base_url());
		$this->smarty->assign("sfunc",$this->uri->segment(1));
		$this->smarty->assign("saction",$this->uri->segment(2));
		$this->smarty->assign("bodyTpl",$this->smarty->fetch("person_lists.htm"));
		$this->smarty->assign("gUserName",$_SESSION['name']);
		$this->smarty->view('main.htm');
	}
	public function new_person()
	{
		$this->smarty->assign("base_url",base_url());
		$this->smarty->assign("sfunc",$this->uri->segment(1));
		$this->smarty->assign("saction",$this->uri->segment(2));
		$this->smarty->assign("bodyTpl",$this->smarty->fetch("person_new.htm"));
		$this->smarty->assign("gUserName",$_SESSION['name']);
		$this->smarty->view('main.htm');
	}
	public function edit()
	{
		/*$img_url="";
		$this->load->model('data_model', 'data');
		if(isset($_FILES['userfile']['name']) && $_FILES['userfile']['name']!=null)
		{
			$new_filename = md5(time()*rand(1,9999));
			$upload_path = "../dataimg";
			$config['upload_path'] 		= $upload_path;
			$config['allowed_types'] 	= 'jpg';
			$config['max_size']			= '99999'; //KB單位
			$config['max_width']  		= '2048';
			$config['max_height']  		= '2048';
						
			$config['file_name']        = $new_filename."_src.jpg";
						
			$this->load->library('upload');

			$this->upload->initialize($config);
			
			if ( ! $this->upload->do_upload("userfile")) {
				$error = array('error' => $this->upload->display_errors());
				show_error("上傳檔案錯誤!" . " path:  " . $upload_path . "|" . print_r($error, true)); exit;
			}
			else 
			{

				$img_url=$upload_path."/".$new_filename.".jpg";
						
				$gd_config['image_library'] 	= 'gd2';
				$gd_config['source_image']		= $upload_path."/".$new_filename."_src.jpg";
				$gd_config['maintain_ratio'] 	= TRUE ;
				$gd_config['width']	 			= 324;
				$gd_config['height']			= 258;	
				$gd_config['master_dim']		= 'auto';	
				$gd_config['new_image'] 		= $upload_path."/".$new_filename.".jpg";
				
				$this->load->library('image_lib');
				$this->image_lib->initialize($gd_config); 
							
				if($this->image_lib->resize()) {
					} else 
					{
						echo $this->image_lib->display_errors();
						show_error('error rander image .'); exit;
					}
						
					$this->image_lib->clear();

					@unlink($upload_path."/".$new_filename."_src.jpg");
				}
		}
		if(count($_POST)>0)
		{
			if(isset($_GET['name']))
			{
				
				$data['name'] 	= isset($_POST['name'])?$_POST['name']:"";
				if($img_url!="")
				$data['img_url'] 	= $img_url;
				if(isset($_POST['file_temp']) && $_POST['file_temp']=="Y")
					$this->data->insertTemp($data, $_GET['name']);
				else
					$this->data->update($data, $_GET['name']);

			}
		}	
		if(isset($_GET['name']))
		{
			if(isset($_POST['file_temp']) && $_POST['file_temp']=="Y")
				$data=$this->data->getTempData($_POST['name']);
			else
			{
				if( isset($_POST['name']))
					$data=$this->data->getData($_POST['name']);
				else
				$data=$this->data->getData($_GET['name']);
			}
		}
		$this->smarty->assign("data",$data);
		$this->smarty->assign("base_url",base_url());
		$this->smarty->assign("sfunc",$this->uri->segment(1));
		$this->smarty->assign("saction",$this->uri->segment(2));
		$this->smarty->assign("bodyTpl",$this->smarty->fetch("data_edit.htm"));
		$this->smarty->assign("gUserName",$this->mysession->get('gUserAccount'));
		$this->smarty->view('admin_main.htm');*/
	}
}