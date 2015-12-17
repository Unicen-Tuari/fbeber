<?php /* Smarty version Smarty-3.1.14, created on 2015-12-13 21:17:42
         compiled from "./templates/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18560076665659b743f2dbb0-39406979%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5f63cf8bf5077cbe9e40e023158dd20352e878a' => 
    array (
      0 => './templates/login.tpl',
      1 => 1450037861,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18560076665659b743f2dbb0-39406979',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5659b7440a30a7_04482263',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5659b7440a30a7_04482263')) {function content_5659b7440a30a7_04482263($_smarty_tpl) {?>

      <form id="formlogin" class="form-signin" method="post" >
        <h2 class="form-signin-heading">Iniciar Sesión</h2>
        <input id="email_admin" name="email_admin" type="text" class="form-control" placeholder="Email address" autofocus="">
        <input id="pass_admin" name="pass_admin" type="password" class="form-control" placeholder="Password">
        <div id="error" class="alert alert-danger" style="display: none;"></div>
        <button id="signin" class="btn btn-lg btn-primary btn-block" type="submit">Iniciar Sesión</button>
      </form>
<?php }} ?>