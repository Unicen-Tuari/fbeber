<?php /* Smarty version Smarty-3.1.14, created on 2014-10-22 02:16:07
         compiled from "./templates/modelos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:257265545446eaede063a7-28779577%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd719aa9fb344b4cf2ad0c258af48cb04bc2df4c' => 
    array (
      0 => './templates/modelos.tpl',
      1 => 1413936960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '257265545446eaede063a7-28779577',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5446eaee042616_20496374',
  'variables' => 
  array (
    'modelos' => 0,
    'dato' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5446eaee042616_20496374')) {function content_5446eaee042616_20496374($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['dato'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dato']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['modelos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dato']->key => $_smarty_tpl->tpl_vars['dato']->value){
$_smarty_tpl->tpl_vars['dato']->_loop = true;
?>
    <button data-toggle="modal" data-target="#myModal" >
  <img src="./images/catalogo/<?php echo $_smarty_tpl->tpl_vars['dato']->value['img_modelo'];?>
" width="100px">
</button>
    
<?php } ?>


<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
      </div>
      <div class="modal-body">
        <?php  $_smarty_tpl->tpl_vars['dato'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dato']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['modelos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dato']->key => $_smarty_tpl->tpl_vars['dato']->value){
$_smarty_tpl->tpl_vars['dato']->_loop = true;
?>
  			<button data-toggle="modal" data-target="#myModal">
  				<img src="./images/catalogo/<?php echo $_smarty_tpl->tpl_vars['dato']->value['img_dispositivo'];?>
" width="100px">
			</button>
		<?php } ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div><?php }} ?>