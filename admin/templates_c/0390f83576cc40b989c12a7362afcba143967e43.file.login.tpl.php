<?php /* Smarty version Smarty-3.1.14, created on 2016-11-21 21:09:55
         compiled from ".\templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2105833549359b991-09881391%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0390f83576cc40b989c12a7362afcba143967e43' => 
    array (
      0 => '.\\templates\\login.tpl',
      1 => 1479758621,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2105833549359b991-09881391',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_583354937511f3_87764353',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583354937511f3_87764353')) {function content_583354937511f3_87764353($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="../images/icono2.png"/> 
    <title>Gimnasio | Panel de Control</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/styles.css" rel="stylesheet">
    <link href="../css/signin.css" rel="stylesheet">

  <style type="text/css"></style><style>[touch-action="none"]{ -ms-touch-action: none; touch-action: none; }[touch-action="pan-x"]{ -ms-touch-action: pan-x; touch-action: pan-x; }[touch-action="pan-y"]{ -ms-touch-action: pan-y; touch-action: pan-y; }[touch-action="scroll"],[touch-action="pan-x pan-y"],[touch-action="pan-y pan-x"]{ -ms-touch-action: pan-x pan-y; touch-action: pan-x pan-y; }</style></head>

  <body class="text-center">
   
      

    <h1>PANEL DE CONTROL</h1><br>
    <img src="../images/icono2.png" width="130px;">

    <div class="col-md-12 text-center">
    <div class="col-md-4 text-center"></div>
    <div class="col-md-4 text-center">
      <form id="formlogin" class="form-signin" method="post" >
        <h2 class="form-signin-heading">Por favor complete sus datos</h2>
        <input id="email" name="email" type="text" class="form-control" placeholder="Email address" autofocus=""><br>
        <input id="pass" name="pass" type="password" class="form-control" placeholder="Password"><br>
        <div id="error" class="alert alert-danger" style="display: none;"></div>
        <button id="signin" class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>
      </div>

      <div class="col-md-4"></div>
    </div> <!-- /container -->


<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>