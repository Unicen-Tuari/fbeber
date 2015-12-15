<?php /* Smarty version Smarty-3.1.14, created on 2015-12-13 22:26:49
         compiled from "./templates/admin_slides.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2910969425641d4553c2ec9-54446121%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df96d3b01da208eaafee80796e303160ae5e45f8' => 
    array (
      0 => './templates/admin_slides.tpl',
      1 => 1450042008,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2910969425641d4553c2ec9-54446121',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5641d4553e2078_91832532',
  'variables' => 
  array (
    'slides' => 0,
    'slide' => 0,
    'imagen' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5641d4553e2078_91832532')) {function content_5641d4553e2078_91832532($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php if (isset($_smarty_tpl->tpl_vars['slides']->value)){?>
<!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Agregar Slides</button>
<div class="bordes col-md-12">
<h2>Listado de Slides</h2>
<table class="table table-bordered table-hover">
		<thead>
			<tr class="active">
				<th class="text-center">Nombre</th>
				<th class="text-center">Publicar / No Publicar</th>
				<th class="text-center">Borrar</th>
				<th class="text-center">Modelos</th>
			</tr>
		</thead>
    				<?php  $_smarty_tpl->tpl_vars['slide'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slide']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['slides']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slide']->key => $_smarty_tpl->tpl_vars['slide']->value){
$_smarty_tpl->tpl_vars['slide']->_loop = true;
?>	

    	<tbody>
    		
			<tr>
				<?php if (!$_smarty_tpl->tpl_vars['slide']->value['publico']){?>
					<td><s><?php echo $_smarty_tpl->tpl_vars['slide']->value['name_slide'];?>
</s>
						<form action="admin_slides.php?action=modificar_name_col&id_col=<?php echo $_smarty_tpl->tpl_vars['slide']->value['id_slide'];?>
" method="POST" enctype="multipart/form-data">
		            <input type="text" class="form-control" id="upd_name_slide" name="upd_name_slide" value="<?php echo $_smarty_tpl->tpl_vars['slide']->value['name_slide'];?>
"> 
	            
			        <button type="submit" class="btn btn-success glyphicon glyphicon-ok">Guardar</button>    
	    			</form>
					</td>
					<td><a class="glyphicon glyphicon-ok" href="admin_slides.php?action=no_publicar_slide&id_col=<?php echo $_smarty_tpl->tpl_vars['slide']->value['id_slide'];?>
"><button type="submit" class="btn btn-default">Publicar</button></a></td>
					

				<?php }else{ ?>
                    <?php echo $_smarty_tpl->tpl_vars['slide']->value['name_slide'];?>

                    <td><?php echo $_smarty_tpl->tpl_vars['slide']->value['name_slide'];?>

                    <form action="admin_slides.php?action=modificar_name_slide&id_slide=<?php echo $_smarty_tpl->tpl_vars['slide']->value['id_slide'];?>
" method="POST" enctype="multipart/form-data">
		            <input type="text" class="form-control" id="upd_name_slide" name="upd_name_slide" value="<?php echo $_smarty_tpl->tpl_vars['slide']->value['name_slide'];?>
"> 
	            
			        <button type="submit" class="btn btn-success glyphicon glyphicon-ok">Guardar</button>    
	    			</form>
	    			</td>
					<td><a class="glyphicon glyphicon-ok" href="admin_slides.php?action=publicar_slide&id_slide=<?php echo $_smarty_tpl->tpl_vars['slide']->value['id_slide'];?>
"><button type="submit" class="btn btn-default">No Publicar</button></a></td>

				<?php }?>

					<td><a class="glyphicon glyphicon-trash" href="admin_slides.php?action=borrar_slides&id_slide=<?php echo $_smarty_tpl->tpl_vars['slide']->value['id_slide'];?>
"></a></td>

				
					
				<td class="text-left">
				<form action="admin_slides.php?action=agregar_img_slide&id_slide=<?php echo $_smarty_tpl->tpl_vars['slide']->value['id_slide'];?>
" method="POST" enctype="multipart/form-data">
        
          <div class="bordes col-md-3">
        
                <input type="file" name="imagesToUpload[]" id="imagesToUpload" multiple/>
        
        
              <button type="submit" class="btn btn-default">Listo!</button>       
        
        
          </div>
                  
          </form>
				<?php  $_smarty_tpl->tpl_vars['imagen'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['imagen']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['slide']->value['imagenes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['imagen']->key => $_smarty_tpl->tpl_vars['imagen']->value){
$_smarty_tpl->tpl_vars['imagen']->_loop = true;
?>
                  
                  <img src="<?php echo $_smarty_tpl->tpl_vars['imagen']->value['img_slide'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['imagen']->value['id_img_slide'];?>
-<?php echo $_smarty_tpl->tpl_vars['slide']->value['id_slide'];?>
" class="img-thumbnail" width="100px" id="<?php echo $_smarty_tpl->tpl_vars['imagen']->value['id_img_slide'];?>
" />
                  <a class="glyphicon glyphicon-trash" href="admin_slides.php?action=borrar_img_slide&id_img_slide=<?php echo $_smarty_tpl->tpl_vars['imagen']->value['id_img_slide'];?>
"></a>

                <?php } ?>
				</td>
		</tr>
	</tbody><?php } ?>

</table>
                 
</div>               


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Nuevos slides</h4>
      </div>
      <div class="modal-body">
        <form action="admin_slides.php?action=agregar_slides" method="POST" enctype="multipart/form-data">

    	<input type="text" class="form-control" id="slide" name="slide" placeholder="Nombre del nuevo slides">	

   		<input type="file" name="imagesToUpload[]" id="imagesToUpload" multiple/>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
        </form>
      </div>
    </div>
  </div>
</div>
                  
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
                  


	<?php }} ?>