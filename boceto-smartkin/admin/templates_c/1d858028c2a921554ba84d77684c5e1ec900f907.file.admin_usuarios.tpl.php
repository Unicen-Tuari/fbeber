<?php /* Smarty version Smarty-3.1.14, created on 2015-10-23 02:30:47
         compiled from "./templates/admin_usuarios.tpl" */ ?>
<?php /*%%SmartyHeaderCode:170972284856290def3d0a73-19897609%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d858028c2a921554ba84d77684c5e1ec900f907' => 
    array (
      0 => './templates/admin_usuarios.tpl',
      1 => 1445560244,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '170972284856290def3d0a73-19897609',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_56290def3f7681_67545004',
  'variables' => 
  array (
    'usuarios' => 0,
    'usuario' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56290def3f7681_67545004')) {function content_56290def3f7681_67545004($_smarty_tpl) {?><br><br>
<p>Listado de usuarios registrados, en esta sección se podrá habilitar o deshabilitar aquellos usuarios que se desee.</p>
	<table class="table table-bordered table-hover">
		<thead>
			<tr class="active">
				<th class="text-center">Foto</th>
				<th class="text-center">Nombre</th>
				<th class="text-center">Mail</th>
        <th class="text-center">Habilitar/Deshabilitar</th>
			</tr>
		</thead>
		<tbody>
			<?php  $_smarty_tpl->tpl_vars['usuario'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['usuario']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['usuarios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['usuario']->key => $_smarty_tpl->tpl_vars['usuario']->value){
$_smarty_tpl->tpl_vars['usuario']->_loop = true;
?>
			<tr>
        <?php if ($_smarty_tpl->tpl_vars['usuario']->value['habilitado']){?>
            <td><?php echo $_smarty_tpl->tpl_vars['usuario']->value['img_user'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['usuario']->value['name_user'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['usuario']->value['email'];?>
</td>
            <td> <a class="glyphicon glyphicon-ok" href="index.php?action=no_habilitar_usuario&id_user=<?php echo $_smarty_tpl->tpl_vars['usuario']->value['id_user'];?>
"><button type="submit" class="btn btn-default">Deshabilitar</button></a></td>
          <?php }else{ ?>
            <td><?php echo $_smarty_tpl->tpl_vars['usuario']->value['img_user'];?>
</td>
          <td><s><?php echo $_smarty_tpl->tpl_vars['usuario']->value['name_user'];?>
</s></td>
          <td><s><?php echo $_smarty_tpl->tpl_vars['usuario']->value['email'];?>
<s></td>
          <td><a class="glyphicon glyphicon-ok" href="index.php?action=habilitar_usuario&id_user=<?php echo $_smarty_tpl->tpl_vars['usuario']->value['id_user'];?>
"><button type="submit" class="btn btn-default">Habilitar</button></a></td>
          <?php }?>
				
			</tr>
			<?php } ?>
		</tbody>
	</table><?php }} ?>