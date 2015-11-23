<?php /* Smarty version Smarty-3.1.14, created on 2015-11-22 14:13:05
         compiled from "./templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1179966125563612d9bdefc3-48537508%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0360d049dff10f364dfc53ba2cc3958abf6ee6d' => 
    array (
      0 => './templates/index.tpl',
      1 => 1448197984,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1179966125563612d9bdefc3-48537508',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_563612d9c70292_91481228',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_563612d9c70292_91481228')) {function content_563612d9c70292_91481228($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="col-md-3 panel">
    <img src="./images/images_sys/smartkinlogo.png" width="100%">
   <div class="col-md-12"></div>
   
   <div class="col-md-12 text-center">
   	<h3>Panel de Control</h3>
   	<h4>Inicio</h4>
   	<h4>Secciones</h4>
   	Portfolios<br>
   	Colecciones<br>
   	Comentarios<br>
   	Usuarios<br>
   	Informacion
   	
   	<h4>Redes Sociales y mas..</h4>
   	<h4>Publicidades</h4>
   	<p>Ir a Smartkin</p>
   </div>
   

</div>


<div class="col-md-9 menu">
    <div class="col-md-10 text-left">
		<img src="./images/images_sys/anonimo.jpg" class="icon-user" width="50px;">
		nombre
	</div>
    <div class="col-md-2 text-right">
		<p>salir</p>
		
	</div>

</div>

<div class="col-md-9 pagina bordes">
	<div class="col-md-8 bordes text-center">
		<div class="col-md-4 bordes">
			usuarios
		</div>
		<div class="col-md-4 bordes">
			comentarios
		</div>
		<div class="col-md-4 bordes">
			favoritos
		</div>
		<div class="col-md-12 bordes">
			<iframe src="./usuarios.php"></iframe>
		</div>
	</div>
	<div class="col-md-4 bordes text-center">
		
		<div class="col-md-8 bordes">
			facebook
		</div>
		<div class="col-md-8 bordes">
			gmail
		</div>
		<div class="col-md-8 bordes">
			twitter
		</div>

		
	</div>


</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>