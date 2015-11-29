<?php /* Smarty version Smarty-3.1.14, created on 2015-11-25 12:59:45
         compiled from "./templates/colecciones.tpl" */ ?>
<?php /*%%SmartyHeaderCode:52049411256544375bc53e5-01675341%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a55d257e897b17782b5c03fd65792a52ceee0fa' => 
    array (
      0 => './templates/colecciones.tpl',
      1 => 1448452782,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '52049411256544375bc53e5-01675341',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_56544375c605c6_75728516',
  'variables' => 
  array (
    'colecciones' => 0,
    'coleccion' => 0,
    'imagen' => 0,
    'usuario' => 0,
    'user' => 0,
    'favoritos' => 0,
    'fav' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56544375c605c6_75728516')) {function content_56544375c605c6_75728516($_smarty_tpl) {?><!DOCTYPE html>
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

 <?php  $_smarty_tpl->tpl_vars['coleccion'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['coleccion']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['colecciones']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['coleccion']->key => $_smarty_tpl->tpl_vars['coleccion']->value){
$_smarty_tpl->tpl_vars['coleccion']->_loop = true;
?>
          <div class="col-md-6">

  <?php if ($_smarty_tpl->tpl_vars['coleccion']->value['publico']){?>
  <h4><?php echo $_smarty_tpl->tpl_vars['coleccion']->value['name_col'];?>
</h4>
      
        <?php  $_smarty_tpl->tpl_vars['imagen'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['imagen']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['coleccion']->value['imagenes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['imagen']->key => $_smarty_tpl->tpl_vars['imagen']->value){
$_smarty_tpl->tpl_vars['imagen']->_loop = true;
?>


          <div class="col-md-2">
            <div class="mod" style="background:url('./images/<?php echo $_smarty_tpl->tpl_vars['imagen']->value['img_mod'];?>
'); background-size:cover">

              <?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['usuario']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value){
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>

                <?php if (!$_smarty_tpl->tpl_vars['user']->value['bloqueado']){?>
                  <form action="colecciones.php?action=agregar_favorito" method="POST" enctype="multipart/form-data" class="text-right">   
                    <input id="<?php echo $_smarty_tpl->tpl_vars['user']->value['id_user'];?>
" name= "new_fk_user" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['id_user'];?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['user']->value['name_user'];?>
"hidden/>
                    <input id="<?php echo $_smarty_tpl->tpl_vars['imagen']->value['id_mod'];?>
" name= "new_fk_mod" value="<?php echo $_smarty_tpl->tpl_vars['imagen']->value['id_mod'];?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['imagen']->value['id_mod'];?>
"hidden/>
                    
                    <button type="submit" name="saveForm" class="btn btn-success"><span class="glyphicon glyphicon-hand-up" aria-hidden="true"></span></button>   
                  </form>
                <?php }?>
              <?php } ?>
                  <?php  $_smarty_tpl->tpl_vars['fav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['fav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['favoritos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['fav']->key => $_smarty_tpl->tpl_vars['fav']->value){
$_smarty_tpl->tpl_vars['fav']->_loop = true;
?>
                    <?php if ($_smarty_tpl->tpl_vars['fav']->value['id_mod']==$_smarty_tpl->tpl_vars['imagen']->value['id_mod']){?>
                      <h1><?php echo $_smarty_tpl->tpl_vars['fav']->value['cantidad'];?>
 </h1>
                    <?php }?>
                  <?php } ?>
                    
              </div>  
          </div>
            <?php } ?>
          <?php }?>
        
        </div>

<?php } ?>
</body></html><?php }} ?>