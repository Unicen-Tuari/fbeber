<?php /* Smarty version Smarty-3.1.14, created on 2015-12-17 13:09:54
         compiled from "./templates/admin_colecciones.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21431813875638beb87154b1-17067861%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db877e6792f6863026e714aa2a7a6b62b08b2887' => 
    array (
      0 => './templates/admin_colecciones.tpl',
      1 => 1450354193,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21431813875638beb87154b1-17067861',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5638beb87822e9_75948680',
  'variables' => 
  array (
    'colecciones' => 0,
    'coleccion' => 0,
    'imagen' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5638beb87822e9_75948680')) {function content_5638beb87822e9_75948680($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php if (isset($_smarty_tpl->tpl_vars['colecciones']->value)){?>
<br>

<div class="bordes col-md-12">
<!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModalColeccion">
  Agregar Colección
</button>
<h2>Listado de colecciones</h2>
<table class="table table-bordered">
		<thead>
			<tr class="active">
				<th class="text-center">Nombre</th>
				<th class="text-center">Borrar</th>
				<th class="text-center">Modelos</th>
			</tr>
		</thead>
    	<?php  $_smarty_tpl->tpl_vars['coleccion'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['coleccion']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['colecciones']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['coleccion']->key => $_smarty_tpl->tpl_vars['coleccion']->value){
$_smarty_tpl->tpl_vars['coleccion']->_loop = true;
?>

    	<tbody>	
			<tr>
					<td>
						<form action="admin_colecciones.php?action=modificar_name_col&id_col=<?php echo $_smarty_tpl->tpl_vars['coleccion']->value['id_col'];?>
" method="POST" enctype="multipart/form-data">
		            		<input type="text" class="form-control" id="upd_name_col" name="upd_name_col" value="<?php echo $_smarty_tpl->tpl_vars['coleccion']->value['name_col'];?>
">
	            
			        		<button type="submit" class="btn btn-success glyphicon glyphicon-ok">Modificar</button>    
	    				</form>
					</td>

					
					

                    <?php echo $_smarty_tpl->tpl_vars['coleccion']->value['name_col'];?>

                    


					<td><a class="glyphicon glyphicon-trash" href="admin_colecciones.php?action=borrar_coleccion&id_col=<?php echo $_smarty_tpl->tpl_vars['coleccion']->value['id_col'];?>
"></a></td>

				
					
				<td class="text-center	">
				<form action="admin_colecciones.php?action=agregar_modelos&id_col=<?php echo $_smarty_tpl->tpl_vars['coleccion']->value['id_col'];?>
" method="POST" enctype="multipart/form-data">
        
          <div class="bordes col-md-12">
        
                <input type="file" name="imagesToUpload[]" id="imagesToUpload" multiple/>
        
        
              <button type="submit" class="btn btn-default">Listo!</button>       
        
        
          </div>
    	              
	          </form>
				<?php  $_smarty_tpl->tpl_vars['imagen'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['imagen']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['coleccion']->value['imagenes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['imagen']->key => $_smarty_tpl->tpl_vars['imagen']->value){
$_smarty_tpl->tpl_vars['imagen']->_loop = true;
?>
                  
                  <img src="<?php echo $_smarty_tpl->tpl_vars['imagen']->value['img_mod'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['imagen']->value['id_mod'];?>
-<?php echo $_smarty_tpl->tpl_vars['coleccion']->value['id_col'];?>
" class="img-thumbnail" width="100px" id="<?php echo $_smarty_tpl->tpl_vars['imagen']->value['id_mod'];?>
" />
                  <a class="glyphicon glyphicon-trash" href="admin_colecciones.php?action=borrar_modelo&id_mod=<?php echo $_smarty_tpl->tpl_vars['imagen']->value['id_mod'];?>
"></a>

                <?php } ?>
				</td>
		</tr>
	</tbody>
	<?php } ?>             

</table>
                 
</div>               


<!-- Modal -->
<div class="modal fade" id="myModalColeccion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Nueva Colección</h4>
      </div>
      <div class="modal-body">
        <form action="admin_colecciones.php?action=agregar_coleccion" method="POST" enctype="multipart/form-data">
			<div class="bordes col-md-12">
	    	<input type="text" class="form-control" id="col" name="col" placeholder="Nombre de la nueva coleccion">	
	   		<input type="file" name="imagesToUpload[]" id="imagesToUpload" multiple/>
      		</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>

    </div>
  </div>
</div>
</div>
<?php }?>               
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>