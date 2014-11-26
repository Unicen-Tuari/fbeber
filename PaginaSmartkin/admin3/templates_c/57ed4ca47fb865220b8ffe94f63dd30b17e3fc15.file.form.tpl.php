<?php /* Smarty version Smarty-3.1.14, created on 2014-11-26 06:19:09
         compiled from "./templates/form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1174435002547559ebb70fa3-02487992%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '57ed4ca47fb865220b8ffe94f63dd30b17e3fc15' => 
    array (
      0 => './templates/form.tpl',
      1 => 1416979147,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1174435002547559ebb70fa3-02487992',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_547559ebb74874_58714108',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547559ebb74874_58714108')) {function content_547559ebb74874_58714108($_smarty_tpl) {?>
	<img id="top" src="./img/top.png" alt="">
	<div id="form_container">
	
		<form id="formComments" class="appnitro"  method="post" action="">
			<ul >
				<li id="li_1" >
					<label class="description" for="element_1">Nombre Categoria</label>
					<span>
						<input id="nombre_categoria" name= "nombre_categoria" class="element text" maxlength="20" size="20" value=""/>
					</span>
				</li>

				<li class="buttons">
					<input id="saveForm" class="button_text" type="submit" name="saveForm" value="Agregar" />
				</li>
			</ul>
		</form>	
<?php }} ?>