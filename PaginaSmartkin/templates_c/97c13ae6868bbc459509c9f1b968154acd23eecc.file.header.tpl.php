<?php /* Smarty version Smarty-3.1.14, created on 2014-11-26 15:56:51
         compiled from "./templates/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2686783665475ea33616760-72556293%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97c13ae6868bbc459509c9f1b968154acd23eecc' => 
    array (
      0 => './templates/header.tpl',
      1 => 1416998697,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2686783665475ea33616760-72556293',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'categorias' => 0,
    'nombre' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5475ea33677a24_18996909',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5475ea33677a24_18996909')) {function content_5475ea33677a24_18996909($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="">
		<title>Smartkin</title>
	    <link href="css/bootstrap.min.css" rel="stylesheet">
	    <link href="css/style.css" rel="stylesheet">
	</head>

  	<div class="row">
		
			<nav class="navbar navbar-inverse" role="navigation">
	  			<div class="container-fluid">
				    <!-- Brand and toggle get grouped for better mobile display -->
				    <div class="navbar-header">
				      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				        <span class="sr-only"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>
				      <a class="navbar-brand" href="#">Icono Smartkin</a>
				    </div>

				    <!-- Collect the nav links, forms, and other content for toggling -->
				    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">   
				    	<ul class="nav navbar-nav navbar-right">
				        	<li><a href="./index.php">Inicio</a></li>
				        	<li><a href="./portfolio.php">Portfolio</a></li>
                         	<li class="dropdown">
                            	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Categor&iacute;as <span class="caret"></span></a>
                            	<ul class="dropdown-menu navbar-inverse" role="menu">
                              		<?php  $_smarty_tpl->tpl_vars['nombre'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nombre']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categorias']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nombre']->key => $_smarty_tpl->tpl_vars['nombre']->value){
$_smarty_tpl->tpl_vars['nombre']->_loop = true;
?>
                                  	<li>
                                      <a onClick = "getDataColecciones(<?php echo $_smarty_tpl->tpl_vars['nombre']->value['id_categoria'];?>
);"><?php echo $_smarty_tpl->tpl_vars['nombre']->value['nombre_categoria'];?>
</a>
                                  	</li>
                              		<?php } ?>
                            	</ul>
                          	</li>
                          	<li><a href="contacto.php">Contacto</a></li>
                      	</ul>
				    </div><!-- /.navbar-collapse -->
	  			</div><!-- /.container-fluid -->
			</nav>
			<div class="col-md-1">
				<button type="button" class="btn btn-success" onclick="location.href='./admin3/login.php'">Entrar!</button>
				<br><br>
				<button type="button" class="btn btn-success" onclick="location.href='./agregarUser.php'">Registrarse</button>
			</div>
			<div class="col-md-1">
			</div>
			<div class="col-md-8">
			
<?php }} ?>