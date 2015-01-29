<?php /* Smarty version Smarty-3.1.18, created on 2015-01-29 08:19:51
         compiled from "application\views\menu.htm" */ ?>
<?php /*%%SmartyHeaderCode:1094154c9df1761a543-48972098%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d2116ab22b9f1a7af0f360ad07f19224a632a9c' => 
    array (
      0 => 'application\\views\\menu.htm',
      1 => 1422510876,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1094154c9df1761a543-48972098',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'gUserName' => 0,
    'sfunc' => 0,
    'saction' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54c9df17666bd9_25854565',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c9df17666bd9_25854565')) {function content_54c9df17666bd9_25854565($_smarty_tpl) {?><a class="menu-toggler" id="menu-toggler" href="#">
	<span class="menu-text"></span>
</a>

<div id="sidebar" class="sidebar">
	<ul class="nav nav-list">
	<li class="light-blue">
					<a data-toggle=""  class="">
						<i class="icon-warning-sign"></i>
						
						<span class="user-info">
							<small>歡迎光臨</small>
							<?php echo $_smarty_tpl->tpl_vars['gUserName']->value;?>

						</span>
					</a>

					<ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
						<li>
							<a href="logout">
								<i class="icon-off"></i>
								登出
							</a>
						</li>
					</ul>
				</li>
		<li <?php if ((!$_smarty_tpl->tpl_vars['sfunc']->value&&!$_smarty_tpl->tpl_vars['saction']->value)) {?>class="active" <?php }?>>
			<a href="./">
				<i class="icon-gittip"></i>
				<span class="menu-text">首頁</span>
			</a>
		</li>

		<li <?php if ($_smarty_tpl->tpl_vars['sfunc']->value=='member') {?>class="active "<?php }?>>
			<a href="member/lists" >
				<i class="icon-gittip"></i>
				<span class="menu-text">使用者管理</span>
			</a>


		</li>	
		<li <?php if ($_smarty_tpl->tpl_vars['sfunc']->value=='membergroup') {?>class="active "<?php }?>>
			<a href="membergroup/lists" >
				<i class="icon-gittip"></i>
				<span class="menu-text">權限管理</span>
			</a>


		</li>
		<li <?php if ($_smarty_tpl->tpl_vars['sfunc']->value=='person') {?>class="active "<?php }?>>
			<a href="person/lists" >
				<i class="icon-gittip"></i>
				<span class="menu-text">資料管理</span>
			</a>
		</li>	
		<li <?php if ($_smarty_tpl->tpl_vars['sfunc']->value=='active_log') {?>class="active "<?php }?>>
			<a href="active_log/lists" >
				<i class="icon-gittip"></i>
				<span class="menu-text">操作記錄</span>
			</a>
		</li>	
		<li <?php if ($_smarty_tpl->tpl_vars['sfunc']->value=='login_log') {?>class="active "<?php }?>>
			<a href="login_log/lists" >
				<i class="icon-gittip"></i>
				<span class="menu-text">登入記錄</span>
			</a>
		</li>	
		<li>
			<a href="logout" >
				<i class="icon-gittip"></i>
				<span class="menu-text">登出系統</span>
			</a>
		</li>	
	</ul>

	
	
	<script type="text/javascript">
		
		try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
		
	</script>
</div><?php }} ?>
