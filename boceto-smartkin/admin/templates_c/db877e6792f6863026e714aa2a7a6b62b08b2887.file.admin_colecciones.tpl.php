<?php /* Smarty version Smarty-3.1.14, created on 2015-10-23 14:40:28
         compiled from "./templates/admin_colecciones.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14091975415629108f9f48b2-98145598%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db877e6792f6863026e714aa2a7a6b62b08b2887' => 
    array (
      0 => './templates/admin_colecciones.tpl',
      1 => 1445603615,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14091975415629108f9f48b2-98145598',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5629108fa63290_03922947',
  'variables' => 
  array (
    'colecciones' => 0,
    'coleccion' => 0,
    'imagen' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5629108fa63290_03922947')) {function content_5629108fa63290_03922947($_smarty_tpl) {?><p>Por defecto las Nuevas colecciones no se publicarán. Para poder visualizarlas en la sección "Colecciones" en el sitio web, haga click en el botón "Publicar".</p>

<form action="index.php?action=agregar_coleccion" method="POST" enctype="multipart/form-data">
<div class="bordes col-md-12">
<h2>Nueva Colección</h2>
<div class="bordes col-md-2"></div>
<div class="bordes col-md-3">
    	<h3>Paso 1</h3>
    	<input type="text" class="form-control" id="col" name="col" placeholder="Nombre de la nueva coleccion">	
</div>
<div class="bordes col-md-3">
  		<h3>Paso 2</h3>
   		<input type="file" name="imagesToUpload[]" id="imagesToUpload" multiple/>
</div>
<div class="bordes col-md-2">
    <h3>Paso 3</h3>
    <button type="submit" class="btn btn-default">Listo!</button>      	
</div>
<div class="bordes col-md-2"></div>
</div>
       	
</form>
<div class="bordes col-md-12">
<h2>Listado de colecciones</h2>
<table class="table table-bordered table-hover">
		<thead>
			<tr class="active">
				<th class="text-center">Nombre</th>
				<th class="text-center">Publicar / No Publicar</th>
				<th class="text-center">Borrar</th>
				<th class="text-center">Modelos</th>
			</tr>
		</thead>
    	
    	<tbody>
    		
			<?php  $_smarty_tpl->tpl_vars['coleccion'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['coleccion']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['colecciones']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['coleccion']->key => $_smarty_tpl->tpl_vars['coleccion']->value){
$_smarty_tpl->tpl_vars['coleccion']->_loop = true;
?>	
			<tr>
				<?php if ($_smarty_tpl->tpl_vars['coleccion']->value['public']){?>
					<td><s><?php echo $_smarty_tpl->tpl_vars['coleccion']->value['name_col'];?>
</s></td>
					<td><a class="glyphicon glyphicon-ok" href="index.php?action=no_publicar_coleccion&id_col=<?php echo $_smarty_tpl->tpl_vars['coleccion']->value['id_col'];?>
"><button type="submit" class="btn btn-default">Publicar</button></a></td>

				<?php }else{ ?>
                    <?php echo $_smarty_tpl->tpl_vars['coleccion']->value['name_col'];?>

                    <td><?php echo $_smarty_tpl->tpl_vars['coleccion']->value['name_col'];?>
</td>
					<td><a class="glyphicon glyphicon-ok" href="index.php?action=publicar_coleccion&id_col=<?php echo $_smarty_tpl->tpl_vars['coleccion']->value['id_col'];?>
"><button type="submit" class="btn btn-default">No Publicar</button></a></td>
				<?php }?>

					<td><a class="glyphicon glyphicon-trash" href="index.php?action=borrar_coleccion&id_col=<?php echo $_smarty_tpl->tpl_vars['coleccion']->value['id_col'];?>
"></a></td>

				
					
				<td class="text-left">
				<button type="submit" class="btn btn-default"> <a class="botonAgregarImagenes" href="index.php?action=agregar_modelos&id_col=<?php echo $_smarty_tpl->tpl_vars['coleccion']->value['id_col'];?>
">Agregar<br>Modelos</button></a>
				<?php  $_smarty_tpl->tpl_vars['imagen'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['imagen']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['coleccion']->value['imagenes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['imagen']->key => $_smarty_tpl->tpl_vars['imagen']->value){
$_smarty_tpl->tpl_vars['imagen']->_loop = true;
?>
                  
                  <img src="<?php echo $_smarty_tpl->tpl_vars['imagen']->value['path_mod'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['imagen']->value['id_mod'];?>
-<?php echo $_smarty_tpl->tpl_vars['coleccion']->value['id_col'];?>
" class="img-thumbnail" width="100px" id="<?php echo $_smarty_tpl->tpl_vars['imagen']->value['id_mod'];?>
" />
                  <a class="glyphicon glyphicon-trash" href="index.php?action=borrar_modelo&id_mod=<?php echo $_smarty_tpl->tpl_vars['imagen']->value['id_mod'];?>
"></a>

                <?php } ?>
				</td>
		</tr><?php } ?>
	</tbody>
</table>
                 
   </div>               
                  
                  
                  


	<?php }} ?>