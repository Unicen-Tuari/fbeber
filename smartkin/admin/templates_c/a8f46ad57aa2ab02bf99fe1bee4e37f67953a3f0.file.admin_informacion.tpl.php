<?php /* Smarty version Smarty-3.1.14, created on 2015-12-13 22:39:01
         compiled from "./templates/admin_informacion.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2301521465638beb87d4d69-82745472%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a8f46ad57aa2ab02bf99fe1bee4e37f67953a3f0' => 
    array (
      0 => './templates/admin_informacion.tpl',
      1 => 1450042741,
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
<?php if ($_valid && !is_callable('content_5638beb88045a0_28053687')) {function content_5638beb88045a0_28053687($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			
<?php if (isset($_smarty_tpl->tpl_vars['informacion']->value)){?>

<h2>Información</h2>

<!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModalInfo">Agregar Info</button>

	<table class="table table-bordered table-hover">
		<thead>
			<tr class="active">
				<th>Borrar</th>
				<th class="text-center">Datos</th>
				<th>Guardar Cambios</th>
			</tr>
		</thead>
		<?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['informacion']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value){
$_smarty_tpl->tpl_vars['info']->_loop = true;
?>
		<tbody>
			<tr>
			<form action="admin_info.php?action=modificar_info&id_info=<?php echo $_smarty_tpl->tpl_vars['info']->value['id_info'];?>
" method="POST" enctype="multipart/form-data">
		             
			        
				<td><a class="glyphicon glyphicon-trash" href="admin_info.php?action=borrar_info&id_info=<?php echo $_smarty_tpl->tpl_vars['info']->value['id_info'];?>
"></a></td>
				<td>
				<input type="text" class="form-control" id="upd_dir" name="upd_dir" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['dir_info'];?>
">
				
				<input type="text" class="form-control" id="upd_email" name="upd_email" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['email_info'];?>
"> 
				
				<input type="text" class="form-control" id="upd_tel" name="upd_tel" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['tel_info'];?>
"> 
				
				<input type="text" class="form-control" id="upd_wh" name="upd_wh" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['wh_info'];?>
"> 
				
				<input type="text" class="form-control" id="upd_fb" name="upd_fb" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['fb_info'];?>
"> 	
				
				<input type="text" class="form-control" id="upd_tw" name="upd_tw" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['tw_info'];?>
"> 
				
				<input type="text" class="form-control" id="upd_g" name="upd_g" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['g_info'];?>
"> 
			
				<input type="text" class="form-control" id="upd_mercado" name="upd_mercado" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['mercado_info'];?>
"> 
			
				<input type="text" class="form-control" id="upd_olx" name="upd_olx" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['olx_info'];?>
"> 

				</td>
				
				<td><button type="submit" class="btn btn-success">Guardar cambios</button></td>    
	    			</form>
			</tr>
		</tbody>
			<?php } ?>

	</table>



<!-- Modal -->
<div class="modal fade" id="myModalInfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        <form action="admin_info.php?action=agregar_info" method="POST" enctype="multipart/form-data">
      
            <input type="text" class="form-control" id="new_email" name="new_email" placeholder="Correo Electrónico"> 
            <input type="text" class="form-control" id="new_tel" name="new_tel" placeholder="Telefono"> 
            <input type="text" class="form-control" id="new_wh" name="new_wh" placeholder="Whatsapp"> 
            <input type="text" class="form-control" id="new_dir" name="new_dir" placeholder="Direccion"> 
            <input type="text" class="form-control" id="new_fb" name="new_fb" placeholder="Facebook"> 
            <input type="text" class="form-control" id="new_tw" name="new_tw" placeholder="Twitter"> 
            <input type="text" class="form-control" id="new_instagram" name="new_instagram" placeholder="Instagram"> 
            <input type="text" class="form-control" id="new_mercado" name="new_mercado" placeholder="Mercado Libre"> 
            
              
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
            </form>

    </div>
  </div>
</div></div>
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>