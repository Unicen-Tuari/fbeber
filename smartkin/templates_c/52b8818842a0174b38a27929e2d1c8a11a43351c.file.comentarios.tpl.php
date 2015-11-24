<?php /* Smarty version Smarty-3.1.14, created on 2015-11-24 13:14:27
         compiled from "./templates/comentarios.tpl" */ ?>
<?php /*%%SmartyHeaderCode:130929762556544375cec362-06026722%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '52b8818842a0174b38a27929e2d1c8a11a43351c' => 
    array (
      0 => './templates/comentarios.tpl',
      1 => 1448367248,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '130929762556544375cec362-06026722',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_56544375d3ff11_91232995',
  'variables' => 
  array (
    'usuario' => 0,
    'user' => 0,
    'comentarios' => 0,
    'comentario' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56544375d3ff11_91232995')) {function content_56544375d3ff11_91232995($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="css/smartkin.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="body-sm">
<div class="col-md-12">
    <?php if (isset($_smarty_tpl->tpl_vars['usuario']->value)){?>
    <?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['usuario']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value){
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
    <?php if (!$_smarty_tpl->tpl_vars['user']->value['bloqueado']){?>
                   
    <form action="comentarios.php?action=agregar_comentario" method="POST" enctype="multipart/form-data"> 
        <div class="col-md-6"> 
            <input id="<?php echo $_smarty_tpl->tpl_vars['user']->value['id_user'];?>
" name= "new_fk_user" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['id_user'];?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['user']->value['name_user'];?>
" hidden/>
            <div class="form-group has-success">
            <input id="new_com" name="new_com"  class="form-control" type="text" maxlength="500" value=""/ placeholder="Comente aqui...">
        </div>
        <div class="col-md-4">
            <input class="btn btn-default btn-md te" type="submit" name="saveForm" value="Comentar" />
        </div>            
    </form>
    <?php }?>
    <?php } ?>
    <div class="col-md-12 text-center">   
    <?php }else{ ?>

        <p class="text-center">Para comentar, por favor <a href="index.php" >ingrese</a> a su cuenta.
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
                    
                    <img src="<?php echo $_smarty_tpl->tpl_vars['comentario']->value['img_user'];?>
" class="icon-coment" width="60px">
                    |<?php echo $_smarty_tpl->tpl_vars['comentario']->value['fecha_com'];?>
|
                    <?php echo $_smarty_tpl->tpl_vars['comentario']->value['name_user'];?>

                    <?php echo $_smarty_tpl->tpl_vars['comentario']->value['comentario'];?>

                </div>
            
            <?php } ?>

        </div>
    </div>
</body>
</html>  
<?php }} ?>