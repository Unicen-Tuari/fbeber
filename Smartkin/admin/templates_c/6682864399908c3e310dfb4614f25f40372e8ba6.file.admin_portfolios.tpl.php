<?php /* Smarty version Smarty-3.1.14, created on 2015-12-17 13:00:54
         compiled from "./templates/admin_portfolios.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11515432915638b91e49a9b8-68356748%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6682864399908c3e310dfb4614f25f40372e8ba6' => 
    array (
      0 => './templates/admin_portfolios.tpl',
      1 => 1450353653,
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

<!-- Button trigger modal -->
<?php if (isset($_smarty_tpl->tpl_vars['portfolios']->value)){?>

<h2>Listado de Portfolios</h2>
<table class="table table-bordered table-hover">

    <thead>
      <tr class="active">
        <th class="text-center">Nombre</th>
        <th class="text-center">Portfolios</th>
      </tr>
    </thead>
      <?php  $_smarty_tpl->tpl_vars['portfolio'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['portfolio']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['portfolios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['portfolio']->key => $_smarty_tpl->tpl_vars['portfolio']->value){
$_smarty_tpl->tpl_vars['portfolio']->_loop = true;
?>  

      <tbody>
        
      <tr>
          <td>
          <?php echo $_smarty_tpl->tpl_vars['portfolio']->value['name_port'];?>

          
        <td class="text-left">
        
        <!--agregar modelos-->
        <div class="col-md-12">

          <form action="admin_portfolios.php?action=agregar_img_port&id_port=<?php echo $_smarty_tpl->tpl_vars['portfolio']->value['id_port'];?>
" method="POST" enctype="multipart/form-data">
          <div class="col-md-7">
            <input type="file" name="imagesToUpload[]" id="imagesToUpload" multiple/>
          </div>
          <div class="col-md-5">        
              <button type="submit" class="">agregar portfolios</button>       
          </div>
        </form>
        </div>

                  
          
        <?php  $_smarty_tpl->tpl_vars['imagen'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['imagen']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['portfolio']->value['imagenes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['imagen']->key => $_smarty_tpl->tpl_vars['imagen']->value){
$_smarty_tpl->tpl_vars['imagen']->_loop = true;
?>
        <br>
                <div class="col-md-4">
                  <img src="<?php echo $_smarty_tpl->tpl_vars['imagen']->value['img_port'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['imagen']->value['id_img_port'];?>
-<?php echo $_smarty_tpl->tpl_vars['portfolio']->value['id_port'];?>
" class="img-thumbnail" width="50px" id="<?php echo $_smarty_tpl->tpl_vars['imagen']->value['id_img_port'];?>
" />
                  <a class="glyphicon glyphicon-trash" href="admin_portfolios.php?action=borrar_img_portfolio&id_img_port=<?php echo $_smarty_tpl->tpl_vars['imagen']->value['id_img_port'];?>
"></a>
                </div>
                <div class="col-md-8">
                  <form action="admin_portfolios.php?action=modificar_img_port&id_img_port=<?php echo $_smarty_tpl->tpl_vars['imagen']->value['id_img_port'];?>
" method="POST" enctype="multipart/form-data">
      
                   <input type="text" class="form-control" id="upd_descrip" name="upd_descrip" value="<?php echo $_smarty_tpl->tpl_vars['imagen']->value['descripcion'];?>
" placeholder="Descripcion">
                   <button type="submit" class="btn btn-success glyphicon glyphicon-ok"></button>
                  </form>
                </div>
                  

                <?php } ?>
        </td>
    </tr>
  </tbody>
         <?php } ?>

</table>
                 


<!-- Modal -->
<div class="modal fade" id="myModalPort" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Nuevo Portfolio</h4>
      </div>
      <div class="modal-body">
        <form action="admin_portfolios.php?action=agregar_portfolio" method="POST" enctype="multipart/form-data">
      <input type="text" class="form-control" id="port" name="port" placeholder="Nombre del nuevo portfolio"> 
      <input type="file" name="imagesToUpload[]" id="imagesToUpload" multiple/>    

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-default">Listo!</button>       
      </div>
      </form>
    </div>
  </div>
</div>
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
           
                  
                  


  <?php }} ?>