<?php /* Smarty version Smarty-3.1.14, created on 2014-11-26 15:56:57
         compiled from "./templates/coleccion.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9758344225475ea391657a7-17960335%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2bf921cf82d2b65980ab8c747462926fd39f434b' => 
    array (
      0 => './templates/coleccion.tpl',
      1 => 1417010484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9758344225475ea391657a7-17960335',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'colecciones' => 0,
    'dato' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5475ea3928a888_55452052',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5475ea3928a888_55452052')) {function content_5475ea3928a888_55452052($_smarty_tpl) {?>
<div class="galeria">
	<?php  $_smarty_tpl->tpl_vars['dato'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dato']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['colecciones']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dato']->key => $_smarty_tpl->tpl_vars['dato']->value){
$_smarty_tpl->tpl_vars['dato']->_loop = true;
?>
		<img class="lista" src="./images/catalogo/<?php echo $_smarty_tpl->tpl_vars['dato']->value['img_coleccion'];?>
" onClick = "getDataModelos(<?php echo $_smarty_tpl->tpl_vars['dato']->value['id_coleccion'];?>
);" alt="<?php echo $_smarty_tpl->tpl_vars['dato']->value['img_coleccion'];?>
" width="140px" height="140px">
		<div id="modelos" class="modelo"></div>
	<?php } ?>

</div>


<?php }} ?>