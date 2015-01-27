<?php /* Smarty version Smarty-3.1.14, created on 2015-01-25 22:47:12
         compiled from "./templates/data.tpl" */ ?>
<?php /*%%SmartyHeaderCode:141294946954c39de75a7815-97944271%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd39c5dce238daf4e54f8f8c4b8daadbbaadba35b' => 
    array (
      0 => './templates/data.tpl',
      1 => 1422222425,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '141294946954c39de75a7815-97944271',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54c39de768f648_74216829',
  'variables' => 
  array (
    'Colecciones' => 0,
    'dato' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c39de768f648_74216829')) {function content_54c39de768f648_74216829($_smarty_tpl) {?><h4>Musica</h4>
<?php  $_smarty_tpl->tpl_vars['dato'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dato']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Colecciones']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dato']->key => $_smarty_tpl->tpl_vars['dato']->value){
$_smarty_tpl->tpl_vars['dato']->_loop = true;
?> 

  <div class="div-coleccion" >  
    <h4 class="text-left"><?php echo $_smarty_tpl->tpl_vars['dato']->value['name_col'];?>
</h4>
    <img src="images/<?php echo $_smarty_tpl->tpl_vars['dato']->value['img_col'];?>
.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['dato']->value['img_col'];?>
" class="coleccion"><!--galeria-->
    <button type="button" class="btn btn-default btn-sm">
      <span class="glyphicon glyphicon-star" aria-hidden="true"></span> Agregar a Favoritos
    </button>
  </div>
<?php } ?>
	<?php }} ?>