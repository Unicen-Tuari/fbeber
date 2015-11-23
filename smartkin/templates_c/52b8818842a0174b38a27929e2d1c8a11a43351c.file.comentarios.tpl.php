<?php /* Smarty version Smarty-3.1.14, created on 2015-11-22 12:54:01
         compiled from "./templates/comentarios.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3445947575640ac6e330d03-81458591%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '52b8818842a0174b38a27929e2d1c8a11a43351c' => 
    array (
      0 => './templates/comentarios.tpl',
      1 => 1448193240,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3445947575640ac6e330d03-81458591',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5640ac6e3323a9_54472081',
  'variables' => 
  array (
    'usuario' => 0,
    'user' => 0,
    'comentarios' => 0,
    'comentario' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5640ac6e3323a9_54472081')) {function content_5640ac6e3323a9_54472081($_smarty_tpl) {?><div class="col-md-12" id="comentarios">
<div class="page-header"></div>  
    <h1>Comentarios</h1>
    <br>
                    
        <!--NUEVO COMENTARIO-->
    <div class="col-md-12">
        <?php if (isset($_smarty_tpl->tpl_vars['usuario']->value)){?>
            <?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['usuario']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value){
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
                <?php if (!$_smarty_tpl->tpl_vars['user']->value['bloqueado']){?>
                   <form action="index.php?action=agregar_comentario" method="POST" enctype="multipart/form-data"> 
                                <div class="col-md-8"> 
  
                    <input id="<?php echo $_smarty_tpl->tpl_vars['user']->value['id_user'];?>
" name= "new_fk_user" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['id_user'];?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['user']->value['name_user'];?>
"hidden/>
                     <div class="form-group has-success">
                    <input id="new_com" name="new_com"  class="form-control" type="text" maxlength="500" value=""/ placeholder="Comentario...">
                </div>
                <div class="col-md-4 text-center">
                    <input class="btn btn-default btn-md te" type="submit" name="saveForm" value="Comentar" /></div>    
                </div>
                                    </form>   

                <?php }?>
            <?php } ?>
        <?php }else{ ?>

            <p>Para comentar, por favor <a href="index.php" >ingrese</a> a su cuenta.
            Si aún no se encuentra registrado, ingrese  <a href="#registrarse" rel="registrarse" data-content='' data-placement="">aquí</a></p>
        <?php }?>
    </div>
    
        
        <!--LISTA DE COMENTARIOS-->
       <?php  $_smarty_tpl->tpl_vars['comentario'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comentario']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comentarios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comentario']->key => $_smarty_tpl->tpl_vars['comentario']->value){
$_smarty_tpl->tpl_vars['comentario']->_loop = true;
?>
            
                <div class="col-md-12 text-left coment">    
                    
                    <img src="./images/<?php echo $_smarty_tpl->tpl_vars['comentario']->value['img_user'];?>
" class="icon-coment" width="60px">
                    |<?php echo $_smarty_tpl->tpl_vars['comentario']->value['fecha_com'];?>
|
                    <?php echo $_smarty_tpl->tpl_vars['comentario']->value['comentario'];?>

                </div>
            
            <?php } ?>

        </div>
  
<?php }} ?>