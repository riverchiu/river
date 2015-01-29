<?php /* Smarty version Smarty-3.1.18, created on 2015-01-29 10:54:45
         compiled from "application\views\main.htm" */ ?>
<?php /*%%SmartyHeaderCode:2160754c9defab7c441-68748154%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc3328489b21e9392d77a71733adac1185c8192d' => 
    array (
      0 => 'application\\views\\main.htm',
      1 => 1422525283,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2160754c9defab7c441-68748154',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54c9defabd9049_52655511',
  'variables' => 
  array (
    'base_url' => 0,
    'bodyTpl' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c9defabd9049_52655511')) {function content_54c9defabd9049_52655511($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
	<head>
		<base href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>測試用狀態</title>

		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="shortcut icon" href="../favicon.gif">

		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/css/font-awesome.min.css" />
		
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />

		<link rel="stylesheet" href="assets/css/ace.min.css" />
		<link rel="stylesheet" href="assets/css/ace-responsive.min.css" />
		<link rel="stylesheet" href="assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />
		<link rel="stylesheet" href="assets/css/jquery.gritter.css" />



		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

		<script type="text/javascript">
		
	
		
		</script>
		

		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/typeahead-bs2.min.js"></script>
		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>

	</head> 

	<body style>
		<?php echo $_smarty_tpl->getSubTemplate ("top.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<div class="main-container" id="main-container">
			<div class="main-container-inner">
				<?php echo $_smarty_tpl->getSubTemplate ("menu.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				<div class="main-content">
					<?php echo $_smarty_tpl->tpl_vars['bodyTpl']->value;?>

				</div>
			</div>
			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="icon-double-angle-up icon-only bigger-110"></i>
			</a>
      	</div>
 	</body>
</html><?php }} ?>
