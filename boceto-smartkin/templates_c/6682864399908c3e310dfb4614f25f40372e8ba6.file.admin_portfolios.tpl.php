<?php /* Smarty version Smarty-3.1.14, created on 2015-10-21 14:13:51
         compiled from "./templates/admin_portfolios.tpl" */ ?>
<?php /*%%SmartyHeaderCode:65900252356278030324c54-41432469%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6682864399908c3e310dfb4614f25f40372e8ba6' => 
    array (
      0 => './templates/admin_portfolios.tpl',
      1 => 1445429629,
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
    'errores' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_562780303a09a6_44905391')) {function content_562780303a09a6_44905391($_smarty_tpl) {?>        <div class="tab-pane fade" id="tablaportfolios">
          <ul class="list-group">
            <?php  $_smarty_tpl->tpl_vars['portfolio'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['portfolio']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['portfolios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['portfolio']->key => $_smarty_tpl->tpl_vars['portfolio']->value){
$_smarty_tpl->tpl_vars['portfolio']->_loop = true;
?>
            <li class="list-group-item">
                    <?php echo $_smarty_tpl->tpl_vars['portfolio']->value['name_port'];?>

                    <?php echo $_smarty_tpl->tpl_vars['portfolio']->value['descrip_port'];?>

                  <a class="glyphicon glyphicon-trash" href="index.php?action=borrar_portfolio&id_port=<?php echo $_smarty_tpl->tpl_vars['portfolio']->value['id_port'];?>
"><button type="submit" class="btn btn-default">Borrar</button></a>
                  <a class="glyphicon glyphicon-plus botonAgregarImagenes" href="index.php?action=agregar_img_portfolio&id_port=<?php echo $_smarty_tpl->tpl_vars['portfolio']->value['id_port'];?>
"><button type="submit" class="btn btn-default">Agregar</button></a>
                  <?php  $_smarty_tpl->tpl_vars['imagen'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['imagen']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['portfolio']->value['imagenes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['imagen']->key => $_smarty_tpl->tpl_vars['imagen']->value){
$_smarty_tpl->tpl_vars['imagen']->_loop = true;
?>
                  
                  <img src="<?php echo $_smarty_tpl->tpl_vars['imagen']->value['path_port'];?>
" alt="imagen-<?php echo $_smarty_tpl->tpl_vars['imagen']->value['id_img_port'];?>
-portfolio-<?php echo $_smarty_tpl->tpl_vars['portfolio']->value['id_port'];?>
" class="img-thumbnail" width="10%" id="<?php echo $_smarty_tpl->tpl_vars['imagen']->value['id_img_port'];?>
" />

                  <a class="glyphicon glyphicon-trash" href="index.php?action=borrar_img_portfolio&id_img_port=<?php echo $_smarty_tpl->tpl_vars['imagen']->value['id_img_port'];?>
"><button type="submit" class="btn btn-default">Borrar Imagen</button></a>

                  <?php } ?>
            <?php } ?>
          </ul>
      </div>
      <div class="row">
        <div class="col-md-6">
          <?php if (count($_smarty_tpl->tpl_vars['errores']->value)>0){?>
          <div class="panel panel-danger">
            <div class="panel-heading">
                <h3 class="panel-title">Errores</h3>
            </div>
            <ul>
              <?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['errores']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value){
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
                <li><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</li>
              <?php } ?>
            </ul>
          </div>
          <?php }?>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <form action="index.php?action=agregar_portfolio" method="POST" enctype="multipart/form-data">
            <div class="form-group">
              <label for="col">Nuevo Portfolio</label>
              <input type="text" class="form-control" id="port" name="port" placeholder="Portfolio">
            </div>
            <div class="form-group">
              <label for="imagesToUpload">Imagenes</label>
              <input type="file" name="imagesToUpload[]" id="imagesToUpload" multiple/>
            </div>

            <button type="submit" class="btn btn-default">Agregar</button>
          </form>
        </div>
      </div>
  
   
            </li>
            
   
                    
        </ul>
          
        <div class="row text-center">
            <div class="col-lm-12">
                <div class="tab-content">
                    <div class="tab-pane fade" id="tablausuarios"></div>
                    <div class="tab-pane fade" id="tablacategorias"></div>
                    <div class="tab-pane fade" id="tablamodelos"></div>
                    <div class="tab-pane fade" id="tablacolecciones"></div>     
                    <div class="tab-pane fade" id="tablaportfolios"></div>              
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal_emergente">
        <div class="modal-dialog">
            <div class="modal-content" id="modal_body">
            </div>
        </div>
    </div><?php }} ?>