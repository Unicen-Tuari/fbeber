<?php /* Smarty version Smarty-3.1.14, created on 2014-11-26 05:10:53
         compiled from "./templates/alerta.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1768437212547552cd7fdae8-44008416%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb4f8cafc616bd0935f2f898523f2f4519150461' => 
    array (
      0 => './templates/alerta.tpl',
      1 => 1416599756,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1768437212547552cd7fdae8-44008416',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mensaje' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_547552cd8daf93_99412446',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547552cd8daf93_99412446')) {function content_547552cd8daf93_99412446($_smarty_tpl) {?><div class="container">
	<div class="row">
		<div class="color col-lg-12 alert alert-success fade in margenb" id="alerta">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			<?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>

		</div>
	</div>
</div> 
<?php }} ?>