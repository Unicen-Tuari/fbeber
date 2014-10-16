<?php /* Smarty version Smarty-3.1.14, created on 2014-10-16 07:05:09
         compiled from "./templates/coleccion.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1376930157543f175db45927-35189922%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2bf921cf82d2b65980ab8c747462926fd39f434b' => 
    array (
      0 => './templates/coleccion.tpl',
      1 => 1413435898,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1376930157543f175db45927-35189922',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_543f175dbc4645_19629274',
  'variables' => 
  array (
    'colecciones' => 0,
    'dato' => 0,
    'nombre' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543f175dbc4645_19629274')) {function content_543f175dbc4645_19629274($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['dato'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dato']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['colecciones']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dato']->key => $_smarty_tpl->tpl_vars['dato']->value){
$_smarty_tpl->tpl_vars['dato']->_loop = true;
?>
	<img class="img-hover" src="./images/catalogo/<?php echo $_smarty_tpl->tpl_vars['dato']->value['img_coleccion'];?>
">
<?php } ?>
<select id="id_coleccion" onChange = "getMata();">
    <?php  $_smarty_tpl->tpl_vars['nombre'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nombre']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['colecciones']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nombre']->key => $_smarty_tpl->tpl_vars['nombre']->value){
$_smarty_tpl->tpl_vars['nombre']->_loop = true;
?>
      <option value="<?php echo $_smarty_tpl->tpl_vars['nombre']->value['id_coleccion'];?>
"><?php echo $_smarty_tpl->tpl_vars['nombre']->value['nombre_coleccion'];?>
</option>
    <?php } ?>
</select> 
	


	<?php }} ?>