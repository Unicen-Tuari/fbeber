<?php /* Smarty version Smarty-3.1.14, created on 2014-11-26 05:49:39
         compiled from "./templates/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26959536254755be3b786d9-39345489%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5f63cf8bf5077cbe9e40e023158dd20352e878a' => 
    array (
      0 => './templates/login.tpl',
      1 => 1416947237,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26959536254755be3b786d9-39345489',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54755be3be4456_31830933',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54755be3be4456_31830933')) {function content_54755be3be4456_31830933($_smarty_tpl) {?><!DOCTYPE html>	
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Smartkin</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="../css/admin.css" rel="stylesheet" media="screen">	
</head>
<body>
	<div class="container">
	<img src="../images/smartkinlogo.png" width="100%">
		<form class="col-lg-4 col-lg-offset-4" method="POST" id="form_login" action="">
			<br></br>
			<div class="form-group input-group">
				<span class="input-group-addon glyphicon glyphicon-user"></span>
				<input type="text" name="username" placeholder="Usuario" class="form-control" autofocus required>
			</div>
			<div class="form-group input-group">
				<span class="input-group-addon glyphicon glyphicon-lock"></span>
				<input type="password" name="contrasenia" placeholder="Contraseña" class="form-control" required>
			</div>
			<div class="form-group text-center">
				<button type="submit" class="btn btn-block"><span class="glyphicon glyphicon-ok"></span></button>
			</div>
		</form>
	</div> 
	<a href="../index.php">Ir al sitio</a>
	<script type="text/javascript" src="../js/jquery-1.10.0.min.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	<script type="text/javascript" src="./js/admin.js"></script>
</body>
</html><?php }} ?>