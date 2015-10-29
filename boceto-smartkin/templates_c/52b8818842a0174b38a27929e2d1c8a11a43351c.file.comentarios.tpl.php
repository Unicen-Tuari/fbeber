<?php /* Smarty version Smarty-3.1.14, created on 2015-10-23 18:44:31
         compiled from "./templates/comentarios.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3761375156210c3192f876-53029013%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '52b8818842a0174b38a27929e2d1c8a11a43351c' => 
    array (
      0 => './templates/comentarios.tpl',
      1 => 1445618670,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3761375156210c3192f876-53029013',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_56210c31967c65_04356629',
  'variables' => 
  array (
    'comentarios' => 0,
    'comentario' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56210c31967c65_04356629')) {function content_56210c31967c65_04356629($_smarty_tpl) {?><div class="page-header" id="comentarios"></div>

    <h1>Comentarios</h1>
    <br>

        <!--NUEVO COMENTARIO-->        <form id="formComments" class="appnitro"  method="post" action="">

        <input class="form-control" placeholder="Agregar Comentario" id="new_comentario" name= "new_comentario" class="element text" value=""/>
        <p>Para comentar, por favor <a href="#" data-toggle="modal" data-target="#loguearse">ingrese</a> a su cuenta.
        Si aún no se encuentra registrado, ingrese  <a href="#nada" rel="registrarse" data-content='' data-placement="">aquí</a></p> 
    
            <input id="saveForm" class="button_text" type="submit" name="saveForm" value="Comentar" />   
         
    </form>
<!--LISTA DE COMENTARIOS-->

    <?php  $_smarty_tpl->tpl_vars['comentario'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comentario']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comentarios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comentario']->key => $_smarty_tpl->tpl_vars['comentario']->value){
$_smarty_tpl->tpl_vars['comentario']->_loop = true;
?>
  <div class="text-left">
        <img src="./images/images_sys/anonimo.jpg" class="icon_user" width="70px"> <?php echo $_smarty_tpl->tpl_vars['comentario']->value['comentario'];?>

        <p class="text-left"><?php echo $_smarty_tpl->tpl_vars['comentario']->value['fk_id_user'];?>
</p>
        <p class="text-left"><?php echo $_smarty_tpl->tpl_vars['comentario']->value['date_com'];?>
</p>
        <br>    
  </div>
    <?php } ?>
  
<?php }} ?>