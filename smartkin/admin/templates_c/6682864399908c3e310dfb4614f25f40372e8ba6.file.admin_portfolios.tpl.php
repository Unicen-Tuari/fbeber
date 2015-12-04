<?php /* Smarty version Smarty-3.1.14, created on 2015-12-02 13:08:53
         compiled from "./templates/admin_portfolios.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11515432915638b91e49a9b8-68356748%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6682864399908c3e310dfb4614f25f40372e8ba6' => 
    array (
      0 => './templates/admin_portfolios.tpl',
      1 => 1449058128,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11515432915638b91e49a9b8-68356748',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5638b91e4ed8f8_43011744',
  'variables' => 
  array (
    'portfolios' => 0,
    'portfolio' => 0,
    'imagen' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5638b91e4ed8f8_43011744')) {function content_5638b91e4ed8f8_43011744($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<p>Por defecto los Nuevo Portfolios no se publicarán. Para poder visualizarlas en la sección "Portfolios" en el sitio web, haga click en el botón "Publicar".</p>
<div class="col-md-12">
<form action="admin_portfolios.php?action=agregar_portfolio" method="POST" enctype="multipart/form-data">
<div class="bordes col-md-12">
<h2>Nuevo Portfolio</h2>
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
</div>

<h2>Listado de Portfolios</h2>
<table class="table table-bordered table-hover">
    <thead>
      <tr class="active">
        <th class="text-center">Nombre</th>
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

          <form action="admin_portfolios.php?action=modificar_name_port&id_port=<?php echo $_smarty_tpl->tpl_vars['portfolio']->value['id_port'];?>
" method="POST" enctype="multipart/form-data">
                <input type="text" class="form-control" id="upd_name_port" name="upd_name_port" value="<?php echo $_smarty_tpl->tpl_vars['portfolio']->value['name_port'];?>
"> 
              
              <button type="submit" class="btn btn-success glyphicon glyphicon-ok">Guardar</button>    
            </form></td>
          <td><a class="glyphicon glyphicon-trash" href="admin_portfolios.php?action=borrar_portfolio&id_port=<?php echo $_smarty_tpl->tpl_vars['portfolio']->value['id_port'];?>
"></a></td>
          
        <td class="text-left">
        
        <form action="admin_portfolios.php?action=agregar_img_port&id_port=<?php echo $_smarty_tpl->tpl_vars['portfolio']->value['id_port'];?>
" method="POST" enctype="multipart/form-data">
        
          <div class="bordes col-md-3">
        
                <input type="file" name="imagesToUpload[]" id="imagesToUpload" multiple/>
        
        
              <button type="submit" class="btn btn-default">Listo!</button>       
        
        
          </div>
                  
          </form>
        <?php  $_smarty_tpl->tpl_vars['imagen'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['imagen']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['portfolio']->value['imagenes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['imagen']->key => $_smarty_tpl->tpl_vars['imagen']->value){
$_smarty_tpl->tpl_vars['imagen']->_loop = true;
?>
                  
                  <img src="<?php echo $_smarty_tpl->tpl_vars['imagen']->value['img_port'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['imagen']->value['id_img_port'];?>
-<?php echo $_smarty_tpl->tpl_vars['portfolio']->value['id_port'];?>
" class="img-thumbnail" width="100px" id="<?php echo $_smarty_tpl->tpl_vars['imagen']->value['id_img_port'];?>
" />
                  <a class="glyphicon glyphicon-trash" href="admin_portfolios.php?action=borrar_img_portfolio&id_img_port=<?php echo $_smarty_tpl->tpl_vars['imagen']->value['id_img_port'];?>
"></a>
                  <form action="admin_portfolios.php?action=modificar_img_port&id_img_port=<?php echo $_smarty_tpl->tpl_vars['imagen']->value['id_img_port'];?>
" method="POST" enctype="multipart/form-data">
      
                   <input type="text" class="form-control" id="upd_descrip" name="upd_descrip" value="<?php echo $_smarty_tpl->tpl_vars['imagen']->value['descripcion'];?>
">
                   <button type="submit" class="btn btn-success glyphicon glyphicon-ok">Modificar</button>
                  </form>
                  

                <?php } ?>
        </td>
    </tr><?php } ?>
  </tbody>
</table>
                 
             
       
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
           
                  
                  


  <?php }} ?>