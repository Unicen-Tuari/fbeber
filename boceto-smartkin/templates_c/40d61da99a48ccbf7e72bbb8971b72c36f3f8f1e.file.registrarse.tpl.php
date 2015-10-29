<?php /* Smarty version Smarty-3.1.14, created on 2015-10-22 16:00:57
         compiled from "./templates/registrarse.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5178351575627fe190c3d62-23539791%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '40d61da99a48ccbf7e72bbb8971b72c36f3f8f1e' => 
    array (
      0 => './templates/registrarse.tpl',
      1 => 1445522456,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5178351575627fe190c3d62-23539791',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5627fe190c6995_95691018',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5627fe190c6995_95691018')) {function content_5627fe190c6995_95691018($_smarty_tpl) {?><div class="page-header"id="registrarse"></div>

    <h1>Registrarse</h1>

	<form id="formComments" class="appnitro"  method="post" action="">
	    <input id="name_user" name= "new_name_user" class="element text" maxlength="20" size="20" value=""/>
	    <input id="pass_user" name= "new_pass_user" class="element" type="password" maxlength="20" size="20" value=""/>
	    <input id="email" name= "new_email" class="element text" maxlength="20" size="20" value=""/>
	    <br>
	    <input id="saveForm" class="button_text" type="submit" name="saveForm" value="Listo!" />
	</form> 
<?php }} ?>