<?php /* Smarty version Smarty-3.1.14, created on 2015-12-02 12:37:04
         compiled from "./templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1179966125563612d9bdefc3-48537508%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0360d049dff10f364dfc53ba2cc3958abf6ee6d' => 
    array (
      0 => './templates/index.tpl',
      1 => 1449056187,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1179966125563612d9bdefc3-48537508',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_563612d9c70292_91481228',
  'variables' => 
  array (
    'name_admin' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_563612d9c70292_91481228')) {function content_563612d9c70292_91481228($_smarty_tpl) {?><!DOCTYPE html>
<!-- saved from url=(0040)http://getbootstrap.com/examples/signin/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login - Programacion Web II</title>

    <!-- Bootstrap core CSS -->
    <link href="css\bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css\signin.css" rel="stylesheet">

  <style type="text/css"></style><style>[touch-action="none"]{ -ms-touch-action: none; touch-action: none; }[touch-action="pan-x"]{ -ms-touch-action: pan-x; touch-action: pan-x; }[touch-action="pan-y"]{ -ms-touch-action: pan-y; touch-action: pan-y; }[touch-action="scroll"],[touch-action="pan-x pan-y"],[touch-action="pan-y pan-x"]{ -ms-touch-action: pan-x pan-y; touch-action: pan-x pan-y; }</style></head>

  <body>

    <div class="container">
<?php if (isset($_smarty_tpl->tpl_vars['name_admin']->value)){?>
		<h1>Logged in as:<p class="text-success"><?php echo $_smarty_tpl->tpl_vars['name_admin']->value;?>
</p></h1>
        <button id="logout" class="btn btn-lg btn-primary btn-block">Logout</button>
        <a href="./admin_usuarios.php">Usuarios</a>
        <a href="./admin_info.php">Información</a>
        <a href="./admin_colecciones.php">Colecciones</a>
        <a href="./admin_portfolios.php">Portfolios</a>
        <a href="./admin_comentarios.php">Comentarios</a>
        
<?php }else{ ?>		
	<h1>Please Login</h1>
    <button id="login" class="btn btn-lg btn-primary btn-block" onClick="window.location = 'login.php';">Login</button>
<?php }?>     

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery-1.10.0.min.js"></script>
<script type="text/javascript" src="js/index.js"></script>


</body></html><?php }} ?>