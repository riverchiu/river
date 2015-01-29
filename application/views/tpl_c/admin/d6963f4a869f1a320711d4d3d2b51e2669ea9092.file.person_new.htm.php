<?php /* Smarty version Smarty-3.1.18, created on 2015-01-29 10:54:50
         compiled from "application\views\person_new.htm" */ ?>
<?php /*%%SmartyHeaderCode:274854ca036a80b936-92606816%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd6963f4a869f1a320711d4d3d2b51e2669ea9092' => 
    array (
      0 => 'application\\views\\person_new.htm',
      1 => 1422511527,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '274854ca036a80b936-92606816',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54ca036a8609a8_99527241',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ca036a8609a8_99527241')) {function content_54ca036a8609a8_99527241($_smarty_tpl) {?><link rel="stylesheet" href="assets/css/datepicker.css" />
<script src="assets/js/bootstrap-datepicker.js"></script>

<link rel="stylesheet" href="assets/jcrop/css/jquery.Jcrop.css" type="text/css" />
<script src="assets/jcrop/js/jquery.Jcrop.min.js"></script>

<link rel="stylesheet" href="assets/jcrop/css/jquery.Jcrop.custom.css" type="text/css" />
<script src="assets/jcrop/js/jquery.Jcrop.multiple.js"></script>


<div id="breadcrumbs" class="breadcrumbs">
	<ul class="breadcrumb">
		<li>
			<i class="icon-home home-icon"></i>
			<a href="./" title="Go to Home">首頁</a>
		</li>
		<li>
			<a href="person/lists">資料管理</a>
		</li>
		<li class="active">新增</li>

	</ul><!--.breadcrumb-->
</div>

<div class="page-content">
	<div class="page-header">
	
	</div><!--/.page-header-->
	
	<div class="row">
		<div class="col-xs-12">
			<!--PAGE CONTENT BEGINS HERE-->
			<!-- 提示訊息 start -->
			<div class="alert alert-info">
				<i class="icon-heart red"></i> 有標記此符號，請勿必填寫，感謝您。
				<button class="close" data-dismiss="alert">
					<i class="icon-remove"></i>
				</button>
			</div>
			<!-- 提示訊息 ended -->
		
			<!-- 警示訊息 start -->
			<div id="msg_warn" class="error alert alert-danger" style="display:none;">
				<i class="icon-remove-sign icon-large"></i>
				<span></span>
				<button class="close" data-dismiss="alert">
					<i class="icon-remove"></i>
				</button>
			</div>
			<!-- 警示訊息 ended -->
			
			<form name="myForm2" id="myForm2" class="form-horizontal" ENCTYPE="multipart/form-data" method="post" action="data/edit?name={}" >
				<input type='hidden' id='file_temp' name='file_temp' value=''>
				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="tag_name"><i class="icon-heart red"></i>姓名</label>
					<div class="col-sm-9">
						<input type="text" name="name" id="name" style="width:50%;" value="" required />
					</div>
					<BR><BR>
					<label class="col-sm-3 control-label no-padding-right" for="tag_name"><i class="icon-heart red"></i>身分證字號</label>
					<div class="col-sm-9">
						<input type="text" name="name" id="name" style="width:50%;" value="" required />
					</div>
					<BR><BR>
					<label class="col-sm-3 control-label no-padding-right" for="tag_name"><i class="icon-heart red"></i>血型</label>
					<div class="col-sm-9">
						<input type="text" name="name" id="name" style="width:50%;" value="" required />
					</div>
					<BR><BR>
					<label class="col-sm-3 control-label no-padding-right" for="tag_name">聯絡電話</label>
					<div class="col-sm-9">
						<input type="text" name="name" id="name" style="width:50%;" value="" />
					</div>
					<BR><BR>
					<label class="col-sm-3 control-label no-padding-right" for="tag_name"></i>地址</label>
					<div class="col-sm-9">
						<input type="text" name="name" id="name" style="width:50%;" value="" />
					</div>
					<BR><BR>
				
				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right"></label>
					<div class="col-sm-9">
						<div class="jcrop-item">
							<img src="" id="imgs"  style="width:400; height:300;" />
						</div>
					</div>
				</div>
				<div class="clearfix form-actions">
					<div class="col-md-offset-3 col-md-9">
						<button class="btn btn-success" id="btn_save" type="submit">
							<i class="icon-ok bigger-110"></i>
							儲存
						</button>
						
						<button class="btn btn-primary" type="submit" onclick="javascript:history.go(0);">
							<i class="icon-undo bigger-110"></i>
							重設
						</button>
						
						<button class="btn btn-danger" type="button" onclick="javascript:history.go(-1);">
							<i class="icon-remove bigger-110"></i>
							取消
						</button>
					</div>
				</div>
			</form>
		<!--PAGE CONTENT ENDS HERE-->
		</div>
	</div><!--/row-->
</div><!--/#page-content-->

<script type="text/javascript">
function show()
{
	document.getElementById("file_temp").value="Y";
	document.getElementById("btn_save").click();
}
</script><?php }} ?>
