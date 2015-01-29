<?php /* Smarty version Smarty-3.1.18, created on 2015-01-29 10:50:39
         compiled from "application\views\person_lists.htm" */ ?>
<?php /*%%SmartyHeaderCode:2387954ca026ff03b63-76674818%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '54fd4e3d90d5b943c6cc90dffbc5fb7258814017' => 
    array (
      0 => 'application\\views\\person_lists.htm',
      1 => 1422504021,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2387954ca026ff03b63-76674818',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'id' => 0,
    'pageBar' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54ca027000e825_43352790',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ca027000e825_43352790')) {function content_54ca027000e825_43352790($_smarty_tpl) {?><div id="breadcrumbs" class="breadcrumbs">
	<ul class="breadcrumb">
		<li>
			<i class="icon-home home-icon"></i>
			<a href="./">首頁</a>
		</li>
		<li>資料管理</li>
	</ul><!--.breadcrumb-->
</div>

<div class="page-content">
	<div class="row">
		<div class="col-xs-12">
			<!--PAGE CONTENT BEGINS HERE-->
			<form class="form-inline" name="myForm" id="myForm" ENCTYPE="multipart/form-data" method="post" action="store/lists" >
			<a href="person/new_person" class="btn btn-app btn-primary ">
				<i class="icon-plus bigger-160"></i>
				新增
			</a>
			
			<button name="btn_name" value="reset" type="submit"  class="btn btn-app btn-primary ">
							<i class="icon-refresh icon-on-right bigger-110"></i>重置
			</button>
				
			<div style="padding-top:5px;" class="dataTables_length">
				<div class="col-xs-6" style="margin-bottom:5px;float:left;padding-left:0;">
					
					</form>
				</div>
			
				<div style="clear:both;"></div>
			</div>
			
			<table class="table table-striped table-bordered table-hover dataTable" id="table_report">
			  <thead>
			  <tr>
				<th>姓名</th>
				<th>身分證字號</th>
				<th>電話</th>
				<th>血型</th>
				<th>生日</th>
				<th>編輯</th>
			  </tr>
			  </thead>
			  <tfoot></tfoot>
			  <tbody>
				<?php  $_smarty_tpl->tpl_vars["id"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["id"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["id"]->key => $_smarty_tpl->tpl_vars["id"]->value) {
$_smarty_tpl->tpl_vars["id"]->_loop = true;
?>  
				  <tr> 
					<td align="center"><?php echo $_smarty_tpl->tpl_vars['id']->value['name'];?>
</td>
					<td align="center"><?php echo $_smarty_tpl->tpl_vars['id']->value['identity'];?>
</td>
					<td align="center"><?php echo $_smarty_tpl->tpl_vars['id']->value['phone_number'];?>
</td>
					<td align="center"><?php echo $_smarty_tpl->tpl_vars['id']->value['blood_type'];?>
</td>
					<td align="center"><?php echo $_smarty_tpl->tpl_vars['id']->value['birthday'];?>
</td>
					<td align="center"> 
						<div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
							<a href="data/edit?name=<?php echo $_smarty_tpl->tpl_vars['id']->value['name'];?>
">修改</a>
							<a href="" onclick="return confirm('使否確定要執行這個動作？')">刪除</a>
						</div>
					</td>
				  </tr>
				<?php } ?>
			</tbody>
			</table>
		
			<div class="row">
				<!--<div align="center"><?php echo $_smarty_tpl->tpl_vars['pageBar']->value;?>
</div>-->
			</div>
		<!-- PAGE CONTENT ENDS HERE-->
		</div>
	</div><!-- /row-->
</div><!-- /#page-content-->

<script type="text/javascript">
</script>	<?php }} ?>
