<?php /* Smarty version Smarty-3.1.18, created on 2015-01-29 10:24:47
         compiled from "application\views\login.htm" */ ?>
<?php /*%%SmartyHeaderCode:625754c9fa0c0d0d04-64019960%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e0fcca248117042ccd57428098cb8f7f6fb57459' => 
    array (
      0 => 'application\\views\\login.htm',
      1 => 1422523394,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '625754c9fa0c0d0d04-64019960',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54c9fa0c12fbb4_59400860',
  'variables' => 
  array (
    'base_url' => 0,
    'loginSubmitAction' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c9fa0c12fbb4_59400860')) {function content_54c9fa0c12fbb4_59400860($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
	<head>
		<base href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link rel="shortcut icon" href="../favicon.gif">
		<title>後台登入 - 台灣好東西</title>
		<meta name="description" content="User login page">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="assets/css/bootstrap-responsive.min.css" rel="stylesheet">
		<link href="assets/css/font-awesome.min.css" rel="stylesheet">
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300">

		<link rel="stylesheet" href="assets/css/ace.min.css">
		<link rel="stylesheet" href="assets/css/ace-responsive.min.css">
		<link rel="stylesheet" href="assets/css/ace-skins.min.css">

	</head>

	<body class="login-layout" style="">
		<div class="main-container container-fluid">
			<div class="main-content">
				<div class="row-fluid">
					<div class="span12">
						<div class="login-container">
							<div class="row-fluid">
								<div class="center">
									<h1>
										<i class="icon-leaf green"></i>
										<span class="red">測試用後台管理</span>
										
									</h1>
									<h4 class="blue">© River</h4>
								</div>
							</div>
							<div class="space-6"></div>
							<div class="row-fluid">
								<div class="position-relative">
									<div id="login-box" class="login-box visible widget-box no-border">
										<div class="widget-body">
											<div class="widget-main">
											
												<h4 class="header blue lighter bigger">
													<i class="icon-coffee green"></i>
													請輸入您的帳號與密碼
												</h4>												
												<div class="space-6"></div>
												
												
												
												
												
												
												
												<form name="myForm2" id="myForm2" ENCTYPE="multipart/form-data" method="post" action="<?php echo $_smarty_tpl->tpl_vars['loginSubmitAction']->value;?>
">
													
													<fieldset>
														<!-- 警示訊息 start -->
														<div class="error alert alert-danger" style="display:none;">
															<i class="icon-remove"></i>
															<span></span>
														</div>
														<!-- 警示訊息 ended -->
														<div class="form-group">
															<span class="input-icon input-icon-right">
																<input class="input-xlarge" type="text" name="account" id="sUserName" placeholder="帳號" maxlength="30">
																<i class="icon-user"></i>
															</span>
														</div>

														<div class="form-group">
															<span class="input-icon input-icon-right">
																<input class="input-xlarge" type="password" name="password" id="sUserPassword" placeholder="密碼" maxlength="25">
																<i class="icon-lock"></i>
															</span>
														</div>

														<div class="space"></div>

														<div class="form-group">
															

															<!-- onclick="javascript: submitform();"-->
															<button type="submit" class="width-35 pull-right btn btn-sm btn-primary">
																<i class="icon-key"></i>
																登入
															</button>															
														</div>
														<div class="space-4"></div>
													</fieldset>
												</form>
												<form>
												
												</form>
									
											</div><!--/widget-main-->

											<div class="toolbar clearfix">
												<div style="height:40px">&nbsp;
													
												</div>
												<div style="height:20px">
													
												</div>
											</div>
											
										</div><!--/widget-body-->
									</div><!--/login-box-->

									<div id="forgot-box" class="forgot-box widget-box no-border">
										<div class="widget-body">
											<div class="widget-main">
												<h4 class="header red lighter bigger">
													<i class="icon-key"></i>
													Retrieve Password
												</h4>

												<div class="space-6"></div>
												<p>Enter your email and to receive instructions</p>
												<form>
													<fieldset>
														<label>
															<span class="block input-icon input-icon-right">
																<input type="email" class="span12" placeholder="Email">
																<i class="icon-envelope"></i>
															</span>
														</label>

														<div class="clearfix">
															<button onclick="return false;" class="width-35 pull-right btn btn-small btn-danger">
																<i class="icon-lightbulb"></i>
																Send Me!
															</button>
														</div>
													</fieldset>
												</form>
											</div><!--/widget-main-->
											<div class="toolbar center">
												<a href="javascript:void(0);" onclick="show_box(&#39;login-box&#39;); return false;" class="back-to-login-link">
													Back to login
													<i class="icon-arrow-right"></i>
												</a>
											</div>
										</div><!--/widget-body-->
									</div><!--/forgot-box-->

									<div id="signup-box" class="signup-box widget-box no-border">
										<div class="widget-body">
											<div class="widget-main">
												<h4 class="header green lighter bigger">
													<i class="icon-group blue"></i>
													New User Registration
												</h4>

												<div class="space-6"></div>
												<p>Enter your details to begin:</p>
												<form>
													<fieldset>
														<label>
															<span class="block input-icon input-icon-right">
																<input type="email" class="span12" placeholder="Email">
																<i class="icon-envelope"></i>
															</span>
														</label>

														<label>
															<span class="block input-icon input-icon-right">
																<input type="text" class="span12" placeholder="Username">
																<i class="icon-user"></i>
															</span>
														</label>

														<label>
															<span class="block input-icon input-icon-right">
																<input type="password" class="span12" placeholder="Password">
																<i class="icon-lock"></i>
															</span>
														</label>

														<label>
															<span class="block input-icon input-icon-right">
																<input type="password" class="span12" placeholder="Repeat password">
																<i class="icon-retweet"></i>
															</span>
														</label>

														<label>
															<input type="checkbox">
															<span class="lbl">
																I accept the
																<a href="javascript:void(0);">User Agreement</a>
															</span>
														</label>

														<div class="space-24"></div>

														<div class="clearfix">
															<button type="reset" class="width-30 pull-left btn btn-small">
																<i class="icon-refresh"></i>
																Reset
															</button>

															<button onclick="return false;" class="width-65 pull-right btn btn-small btn-success">
																Register
																<i class="icon-arrow-right icon-on-right"></i>
															</button>
														</div>
													</fieldset>
												</form>
											</div>
											<div class="toolbar center">
												<a href="javascript:void(0);" onclick="show_box(&#39;login-box&#39;); return false;" class="back-to-login-link">
													<i class="icon-arrow-left"></i>
													Back to login
												</a>
											</div>
										</div><!--/widget-body-->
									</div><!--/signup-box-->
								</div><!--/position-relative-->
							</div>
						</div>
					</div><!--/.span-->
				</div><!--/.row-fluid-->
			</div>
		</div><!--/.main-container-->


		<!--[if !IE]>-->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

		<script src="assets/js/bootstrap.min.js"></script>


		<script type="text/javascript">
			if ("ontouchend" in document) document.write("<script src='assets/js/jquery.mobile-1.3.2.js'>"+"<"+"/script>");
		</script>
		
		
		<script type="text/javascript" src="assets/js/jquery.validate.min.js"></script>
		<style type="text/css">
		
		.error {color: #d16e6c;}
		
		</style>
		
		<script type="text/javascript">
		
		function show_box(id) {
			$('.widget-box.visible').removeClass('visible');
			$('#'+id).addClass('visible');
		}
		
		function submitform() {
			document.myForm.submit();
		}
		$(function() {
			document.getElementById('sUserName').focus(); // 對焦
			$('#myForm2').validate({
				
				focusInvalid: false,
				rules: {
					sUserName: 'required',
					sUserPassword: 'required',
					
				},

				messages: {
					sUserName: '請填入帳號',
					sUserPassword: '請填入密碼',
				},


				highlight: function (e) {
					$(e).closest('.form-group').removeClass('has-info').addClass('has-error');
				},

				success: function (e) {
					$(e).closest('.form-group').removeClass('has-error').addClass('has-info');
					$(e).remove();
				}
			});
		});
		
		</script>	
	</body>
</html><?php }} ?>
