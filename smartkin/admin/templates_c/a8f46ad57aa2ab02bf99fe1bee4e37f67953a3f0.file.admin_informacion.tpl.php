<?php /* Smarty version Smarty-3.1.14, created on 2015-11-24 00:34:57
         compiled from "./templates/admin_informacion.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2301521465638beb87d4d69-82745472%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a8f46ad57aa2ab02bf99fe1bee4e37f67953a3f0' => 
    array (
      0 => './templates/admin_informacion.tpl',
      1 => 1448321695,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2301521465638beb87d4d69-82745472',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5638beb88045a0_28053687',
  'variables' => 
  array (
    'informacion' => 0,
    'info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5638beb88045a0_28053687')) {function content_5638beb88045a0_28053687($_smarty_tpl) {?><br>
<br>
<p class="text-center">Esta información se publicará en la sección "Contacto" del sitio web Smartkin.<br>

Para modificar, borrar o agregar información solo haz click en el icono correspondiente</p>
	<table class="table table-bordered table-hover">
		<thead>
			<tr class="active">
				<th>Borrar</th>
				<th class="text-center">Dirección</th>
				<th class="text-center">Correo Electrónico</th>
				<th class="text-center">Telefono</th>
				<th class="text-center">Whatsapp</th>
				<th class="text-center">Facebook</th>
				<th class="text-center">Twitter</th>
				<th class="text-center">Google Plus</th>
				<th class="text-center">Mercado Libre</th>
				<th class="text-center">olx</th>
				<th>guardar</th>
			</tr>
		</thead>
		<tbody>
			<?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['informacion']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value){
$_smarty_tpl->tpl_vars['info']->_loop = true;
?>
			<tr>
			<form action="index.php?action=modificar_info&id_info=<?php echo $_smarty_tpl->tpl_vars['info']->value['id_info'];?>
" method="POST" enctype="multipart/form-data">
		             
			        
				<td><a class="glyphicon glyphicon-trash" href="index.php?action=borrar_info&id_info=<?php echo $_smarty_tpl->tpl_vars['info']->value['id_info'];?>
"></a></td>
				<td><?php echo $_smarty_tpl->tpl_vars['info']->value['dir_info'];?>

				<input type="text" class="form-control" id="upd_dir" name="upd_dir" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['dir_info'];?>
"></td>
				<td><?php echo $_smarty_tpl->tpl_vars['info']->value['email_info'];?>

				<input type="text" class="form-control" id="upd_email" name="upd_email" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['email_info'];?>
"> </td>	
				<td><?php echo $_smarty_tpl->tpl_vars['info']->value['tel_info'];?>

				<input type="text" class="form-control" id="upd_tel" name="upd_tel" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['tel_info'];?>
"> </td>	
				<td><?php echo $_smarty_tpl->tpl_vars['info']->value['wh_info'];?>

				<input type="text" class="form-control" id="upd_wh" name="upd_wh" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['wh_info'];?>
"> </td>	
				<td><?php echo $_smarty_tpl->tpl_vars['info']->value['fb_info'];?>

				<input type="text" class="form-control" id="upd_fb" name="upd_fb" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['fb_info'];?>
"> </td>	
				<td><?php echo $_smarty_tpl->tpl_vars['info']->value['tw_info'];?>

				<input type="text" class="form-control" id="upd_tw" name="upd_tw" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['tw_info'];?>
"> </td>	
				<td><?php echo $_smarty_tpl->tpl_vars['info']->value['g_info'];?>

				<input type="text" class="form-control" id="upd_g" name="upd_g" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['g_info'];?>
"> </td>
				<td><?php echo $_smarty_tpl->tpl_vars['info']->value['mercado_info'];?>

				<input type="text" class="form-control" id="upd_mercado" name="upd_mercado" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['mercado_info'];?>
"> </td>
				<td><?php echo $_smarty_tpl->tpl_vars['info']->value['olx_info'];?>

				<input type="text" class="form-control" id="upd_olx" name="upd_olx" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['olx_info'];?>
"> </td>
				<td><button type="submit" class="btn btn-success glyphicon glyphicon-ok">Guardar</button></td>    
	    			</form>
			</tr>
			<?php } ?>
		</tbody>
	</table>

<h2>agregar info</h2>
 <form action="index.php?action=agregar_info" method="POST" enctype="multipart/form-data">
      
            <input type="text" class="form-control" id="new_email" name="new_email" placeholder="Correo Electrónico"> 
            <input type="text" class="form-control" id="new_tel" name="new_tel" placeholder="Telefono"> 
            <input type="text" class="form-control" id="new_wh" name="new_wh" placeholder="Whatsapp"> 
            <input type="text" class="form-control" id="new_dir" name="new_dir" placeholder="Direccion"> 
            <input type="text" class="form-control" id="new_fb" name="new_fb" placeholder="Facebook"> 
            <input type="text" class="form-control" id="new_tw" name="new_tw" placeholder="Twitter"> 
            <input type="text" class="form-control" id="new_g" name="new_g" placeholder="Google Plus"> 
            <input type="text" class="form-control" id="new_mercado" name="new_mercado" placeholder="Mercado Libre"> 
            <input type="text" class="form-control" id="new_olx" name="new_olx" placeholder="Olx"> 
            
          <button type="submit" class="btn btn-default">Listo!</button>       
              
      </form><?php }} ?>