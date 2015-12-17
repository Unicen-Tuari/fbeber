<?php /* Smarty version Smarty-3.1.14, created on 2015-12-13 22:35:40
         compiled from "./templates/admin_usuarios.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19551420485638beb880d054-51900266%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d858028c2a921554ba84d77684c5e1ec900f907' => 
    array (
      0 => './templates/admin_usuarios.tpl',
      1 => 1450042539,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19551420485638beb880d054-51900266',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5638beb8853c49_76601109',
  'variables' => 
  array (
    'usuarios' => 0,
    'usuario' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5638beb8853c49_76601109')) {function content_5638beb8853c49_76601109($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php if (isset($_smarty_tpl->tpl_vars['usuarios']->value)){?>	
	
	<div class="col-md-12 panel">
<h3 class="text-center">Listado de Usuarios</h3>
<br>

<div class="col-md-6 text-left">
	<h4 class=" text-center">Usuarios Activos</h4>			
	    <?php  $_smarty_tpl->tpl_vars['usuario'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['usuario']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['usuarios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['usuario']->key => $_smarty_tpl->tpl_vars['usuario']->value){
$_smarty_tpl->tpl_vars['usuario']->_loop = true;
?>
	    <?php if (!$_smarty_tpl->tpl_vars['usuario']->value['bloqueado']){?>
	      	<a href="admin_usuarios.php?action=no_habilitar_usuario&id_user=<?php echo $_smarty_tpl->tpl_vars['usuario']->value['id_user'];?>
"><button type="submit" class="btn btn-danger">Bloquear</button></a>
	      	<img src=".<?php echo $_smarty_tpl->tpl_vars['usuario']->value['img_user'];?>
" class="icon_user" width="50px;">
	      	<?php echo $_smarty_tpl->tpl_vars['usuario']->value['email_user'];?>

	        <br>
	    <?php }?>
	<?php } ?>
</div>   
	<div class="col-md-6 text-left">
	<h4 class="text-center">Usuarios Bloqueados</h4>
	<?php  $_smarty_tpl->tpl_vars['usuario'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['usuario']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['usuarios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['usuario']->key => $_smarty_tpl->tpl_vars['usuario']->value){
$_smarty_tpl->tpl_vars['usuario']->_loop = true;
?>			
    	<?php if ($_smarty_tpl->tpl_vars['usuario']->value['bloqueado']){?> 		
    	<a href="admin_usuarios.php?action=habilitar_usuario&id_user=<?php echo $_smarty_tpl->tpl_vars['usuario']->value['id_user'];?>
"><button type="submit" class="btn btn-success">Desbloquear</button></a>
    	<img src=".<?php echo $_smarty_tpl->tpl_vars['usuario']->value['img_user'];?>
" class="icon_user" width="50px">
		<?php echo $_smarty_tpl->tpl_vars['usuario']->value['email_user'];?>

         <br>
        <?php }?>
	<?php } ?>
	</div>
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>