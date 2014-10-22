<<<<<<< HEAD
<?php /* Smarty version Smarty-3.1.14, created on 2014-10-22 02:16:07
         compiled from "./templates/modelos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:257265545446eaede063a7-28779577%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
=======
<?php /* Smarty version Smarty-3.1.14, created on 2014-10-17 21:07:13
         compiled from "./templates/modelos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2951918265440b45e7c7010-83004636%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
>>>>>>> 74beeb35f7ee36a93d45a7fdbe3933dc4e888ced
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd719aa9fb344b4cf2ad0c258af48cb04bc2df4c' => 
    array (
      0 => './templates/modelos.tpl',
<<<<<<< HEAD
      1 => 1413936960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '257265545446eaede063a7-28779577',
=======
      1 => 1413572828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2951918265440b45e7c7010-83004636',
>>>>>>> 74beeb35f7ee36a93d45a7fdbe3933dc4e888ced
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
<<<<<<< HEAD
  'unifunc' => 'content_5446eaee042616_20496374',
=======
  'unifunc' => 'content_5440b45e8b0d65_48359217',
>>>>>>> 74beeb35f7ee36a93d45a7fdbe3933dc4e888ced
  'variables' => 
  array (
    'modelos' => 0,
    'dato' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<<<<<<< HEAD
<?php if ($_valid && !is_callable('content_5446eaee042616_20496374')) {function content_5446eaee042616_20496374($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['dato'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dato']->_loop = false;
=======
<?php if ($_valid && !is_callable('content_5440b45e8b0d65_48359217')) {function content_5440b45e8b0d65_48359217($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['dato'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dato']->_loop = false;
>>>>>>> 74beeb35f7ee36a93d45a7fdbe3933dc4e888ced
 $_from = $_smarty_tpl->tpl_vars['modelos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dato']->key => $_smarty_tpl->tpl_vars['dato']->value){
$_smarty_tpl->tpl_vars['dato']->_loop = true;
?>
<<<<<<< HEAD
    <button data-toggle="modal" data-target="#myModal" >
  <img src="./images/catalogo/<?php echo $_smarty_tpl->tpl_vars['dato']->value['img_modelo'];?>
" width="100px">
</button>
    
=======
  <?php echo $_smarty_tpl->tpl_vars['dato']->value['nombre_modelo'];?>

  <button onClick = "getDataModelos(<?php echo $_smarty_tpl->tpl_vars['dato']->value['id_modelo'];?>
);"><?php echo $_smarty_tpl->tpl_vars['dato']->value['nombre_modelo'];?>
</button>
  <button data-toggle="modal" data-target="#myModal">
    <img class="img-hover" src="./images/catalogo/<?php echo $_smarty_tpl->tpl_vars['dato']->value['img_modelo'];?>
" onClick = "getDataModelos(<?php echo $_smarty_tpl->tpl_vars['dato']->value['id_modelo'];?>
);" alt="<?php echo $_smarty_tpl->tpl_vars['dato']->value['nombre_modelo'];?>
">
  </button>
>>>>>>> 74beeb35f7ee36a93d45a7fdbe3933dc4e888ced
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