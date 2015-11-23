<?php /* Smarty version Smarty-3.1.14, created on 2015-11-22 12:52:35
         compiled from "./templates/user.tpl" */ ?>
<?php /*%%SmartyHeaderCode:935249554563bcb4c0ab008-77412157%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20b6e8dc8f83b739dc720c8897bd298bcda1ab31' => 
    array (
      0 => './templates/user.tpl',
      1 => 1448193153,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '935249554563bcb4c0ab008-77412157',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_563bcb4c1050b3_29848128',
  'variables' => 
  array (
    'usuario' => 0,
    'user' => 0,
    'likes' => 0,
    'like' => 0,
    'imagen' => 0,
    'comentariosUser' => 0,
    'comentario' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_563bcb4c1050b3_29848128')) {function content_563bcb4c1050b3_29848128($_smarty_tpl) {?>
		<div class="col-md-12">
			<div class="col-md-6 text-center">
			<?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['usuario']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value){
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
				<div class="text-center icon-user" style="background:url('./images/images_sys/<?php echo $_smarty_tpl->tpl_vars['user']->value['img_user'];?>
');"><br><br>
					<h3 class="h3-user"><?php echo $_smarty_tpl->tpl_vars['user']->value['name_user'];?>
</h3>
	        	</div>
	        <?php } ?>
	        </div>
	         <div class="col-md-6 text-right">
	        	<br>
	        	<button id="logout" class="glyphicon glyphicon-off btn btn-danger"></button>
	        </div>
	    </div>
	        	
			

<div class="panel-group text-left" id="accordion" role="tablist" aria-multiselectable="true">
 <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="head-conf-user">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#conf-user" aria-expanded="false" aria-controls="collapseTwo">
          <span class="glyphicon glyphicon-user" aria-hidden="true"> Cuenta</span>
        </a>
      </h4>
    </div>
    <div id="conf-user" class="panel-collapse collapse" role="tabpanel" aria-labelledby="head-conf-user">
      <div class="panel-body">
        <?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['usuario']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value){
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
        	Nombre de Usuario: <?php echo $_smarty_tpl->tpl_vars['user']->value['name_user'];?>

   			
   			<button name="mostrar" onclick="mostrar('name_user')" type="button" class="btn btn-default" aria-label="Left Align">
  				<span class="glyphicon glyphicon-pencil" aria-hidden="true">
				</span>
			</button>        	
		
				<div id="name_user" style="display:none;"><br>
					<form action="index.php?action=modificar_name_user&id_user=<?php echo $_smarty_tpl->tpl_vars['user']->value['id_user'];?>
" method="POST" enctype="multipart/form-data">
		            <input type="text" class="form-control" id="upd_name" name="upd_name" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['name_user'];?>
"> 
	            
			        <button type="submit" class="btn btn-success glyphicon glyphicon-ok">Guardar</button>    
	    			</form>
				</div>

				<button name="mostrar" onclick="mostrar('pass_user')" type="button" class="btn btn-default" aria-label="Left Align" onclick="mostrar('pass_user')">
  				<span class="glyphicon glyphicon-pencil" aria-hidden="true">
				</span>Contraseña
			</button> 
		
			
				<div id="pass_user" style="display:none;" class="col-md-12 text-center"><br>
					<form action="index.php?action=modificar_pass_user&id_user=<?php echo $_smarty_tpl->tpl_vars['user']->value['id_user'];?>
" method="POST" enctype="multipart/form-data">
					<div class="col-md-8">
		            <input type="password" class="form-control" id="upd_pass" name="upd_pass" value=""> 
	            	</div>
	            	<div class="col-md-1">
			        <button id="logout" type="submit" class="btn btn-success">Guardar</button>    
			        </div>
	    			</form>
				</div>

	        	
		<?php } ?>
      </div>
    </div>
<!--Favorito<-->    
 <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="head-fav-user">
      <h4 class="panel-title">
         <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#fav-user" aria-expanded="false" aria-controls="fav-user">
         <span class="glyphicon glyphicon-star" aria-hidden="true"> Favoritos</span>
        </a>
        
      </h4>
    </div>
    <div id="fav-user" class="panel-collapse collapse" role="tabpanel" aria-labelledby="head-fav-user">
      <div class="panel-body">
        <?php  $_smarty_tpl->tpl_vars['like'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['like']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['likes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['like']->key => $_smarty_tpl->tpl_vars['like']->value){
$_smarty_tpl->tpl_vars['like']->_loop = true;
?>
        	
	            <a class="" href="index.php?action=borrar_like&id_like=<?php echo $_smarty_tpl->tpl_vars['like']->value['id_fav'];?>
">
	            	<img src="./images/<?php echo $_smarty_tpl->tpl_vars['like']->value['img_mod'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['imagen']->value['id_mod'];?>
" class="img-thumbnail" width="80px;"/>
	            </a>
			<?php } ?>
      </div>
    </div>
<!--Comentarios-->  
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="head-com-user">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#com-user" aria-expanded="false" aria-controls="collapseTwo">
        <span class="glyphicon glyphicon-list-alt" aria-hidden="true">  Comentarios</span>
        </a>
      </h4>
    </div>
    <div id="com-user" class="panel-collapse collapse" role="tabpanel" aria-labelledby="head-com-user">
    			<?php  $_smarty_tpl->tpl_vars['comentario'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comentario']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comentariosUser']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comentario']->key => $_smarty_tpl->tpl_vars['comentario']->value){
$_smarty_tpl->tpl_vars['comentario']->_loop = true;
?>

      <div class="panel-body coment-user">
        

			<a class="glyphicon glyphicon-trash text-right" href="index.php?action=borrar_comentario&id_com=<?php echo $_smarty_tpl->tpl_vars['comentario']->value['id_com'];?>
"></a>
			
			|<?php echo $_smarty_tpl->tpl_vars['comentario']->value['fecha_com'];?>
|
			<?php echo $_smarty_tpl->tpl_vars['comentario']->value['comentario'];?>

			
	
    </div>			<?php } ?>

    </div>
    
</div></div></div></div>
	
		
	<?php }} ?>