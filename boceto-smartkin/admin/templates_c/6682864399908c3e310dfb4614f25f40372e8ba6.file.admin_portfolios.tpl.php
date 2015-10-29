<?php /* Smarty version Smarty-3.1.14, created on 2015-10-23 14:46:07
         compiled from "./templates/admin_portfolios.tpl" */ ?>
<?php /*%%SmartyHeaderCode:65900252356278030324c54-41432469%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6682864399908c3e310dfb4614f25f40372e8ba6' => 
    array (
      0 => './templates/admin_portfolios.tpl',
      1 => 1445604367,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '65900252356278030324c54-41432469',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_562780303a09a6_44905391',
  'variables' => 
  array (
    'portfolios' => 0,
    'portfolio' => 0,
    'imagen' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_562780303a09a6_44905391')) {function content_562780303a09a6_44905391($_smarty_tpl) {?><p>Por defecto los Nuevo Portfolios no se publicarán. Para poder visualizarlas en la sección "Portfolios" en el sitio web, haga click en el botón "Publicar".</p>

<form action="index.php?action=agregar_portfolio" method="POST" enctype="multipart/form-data">
<div class="bordes col-md-12">
<h2>Nueva Portfolio</h2>
<div class="bordes col-md-2"></div>
<div class="bordes col-md-3">
      <h3>Paso 1</h3>
      <input type="text" class="form-control" id="port" name="port" placeholder="Nombre del nuevo portfolio"> 
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
        <th class="text-center">Descripcion</th>
        <th class="text-center">Borrar</th>
        <th class="text-center">Portfolios</th>
      </tr>
    </thead>
      
      <tbody>
        
      <?php  $_smarty_tpl->tpl_vars['portfolio'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['portfolio']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['portfolios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['portfolio']->key => $_smarty_tpl->tpl_vars['portfolio']->value){
$_smarty_tpl->tpl_vars['portfolio']->_loop = true;
?>  
      <tr>
          <td><?php echo $_smarty_tpl->tpl_vars['portfolio']->value['name_port'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['portfolio']->value['descrip_port'];?>
</td>
          <td><a class="glyphicon glyphicon-trash" href="index.php?action=borrar_portfolio&id_port=<?php echo $_smarty_tpl->tpl_vars['portfolio']->value['id_port'];?>
"></a></td>
          
        <td class="text-left">
        <button type="submit" class="btn btn-default"> <a class="botonAgregarImagenes" href="index.php?action=agregar_img_portfolio&id_port=<?php echo $_smarty_tpl->tpl_vars['portfolio']->value['id_port'];?>
">Agregar<br>Portfolios</button></a>
        <?php  $_smarty_tpl->tpl_vars['imagen'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['imagen']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['portfolios']->value['imagenes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['imagen']->key => $_smarty_tpl->tpl_vars['imagen']->value){
$_smarty_tpl->tpl_vars['imagen']->_loop = true;
?>
                  
                  <img src="<?php echo $_smarty_tpl->tpl_vars['imagen']->value['path_mod'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['imagen']->value['id_img_port'];?>
-<?php echo $_smarty_tpl->tpl_vars['portfolio']->value['id_img_port'];?>
" class="img-thumbnail" width="100px" id="<?php echo $_smarty_tpl->tpl_vars['imagen']->value['id_img_port'];?>
" />
                  <a class="glyphicon glyphicon-trash" href="index.php?action=borrar_img_portfolio&id_img_port=<?php echo $_smarty_tpl->tpl_vars['imagen']->value['id_img_port'];?>
"></a>

                <?php } ?>
        </td>
    </tr><?php } ?>
  </tbody>
</table>
                 
   </div>               
                  
                  
                  


  <?php }} ?>