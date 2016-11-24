<?php /* Smarty version Smarty-3.1.14, created on 2016-11-23 23:33:21
         compiled from ".\templates\include.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2177758358a66f1cbd5-18589299%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f0dc9e93580c78d5ac878024523e8be01b24f94f' => 
    array (
      0 => '.\\templates\\include.tpl',
      1 => 1479940400,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2177758358a66f1cbd5-18589299',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_58358a670bd112_04982306',
  'variables' => 
  array (
    'usuario' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58358a670bd112_04982306')) {function content_58358a670bd112_04982306($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="redes text-center">
      <a href=""><img  class="zoom" src="images/redes/fb-color.png" width="25px;"></a>
      <a href=""><img class="zoom" src="images/redes/tw-color.png" width="25px;"></a>
      <a href=""><img class="zoom" src="images/redes/google-color.png" width="25px;"></a>
      <a href=""><img class="zoom" src="images/redes/inst-color.png" width="25px;"></a>
      <?php if (isset($_smarty_tpl->tpl_vars['usuario']->value)){?>
        <b>Hola <?php echo $_smarty_tpl->tpl_vars['usuario']->value[0]['apyno'];?>
! </b><a id="logout" href="#"><span class="label label-info">Salir</span></a>
      <?php }else{ ?>    
        <a href="login.php"><span class="label label-warning">Iniciar Sesión / Registrarse</span></a><br>
      <?php }?> 
      
      
    </div>

  <div id="contenido">
  <?php echo $_smarty_tpl->getSubTemplate ('index.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

  </div>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>