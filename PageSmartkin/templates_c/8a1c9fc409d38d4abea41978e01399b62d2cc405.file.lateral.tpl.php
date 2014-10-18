<?php /* Smarty version Smarty-3.1.14, created on 2014-10-17 15:01:16
         compiled from "./templates/lateral.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4481607665441131ca8e1b5-24631608%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a1c9fc409d38d4abea41978e01399b62d2cc405' => 
    array (
      0 => './templates/lateral.tpl',
      1 => 1413550673,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4481607665441131ca8e1b5-24631608',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'categorias' => 0,
    'nombre' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5441131cac17d4_67514300',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5441131cac17d4_67514300')) {function content_5441131cac17d4_67514300($_smarty_tpl) {?>            <div class="col-md-4">

                <div class="well">
                    <h4>Buscar</h4>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button"><i class="fa fa-search"></i>Go!</button>
                        </span>
                    </div>
                    <!-- /.input-group -->
                </div>

                <div class="well">
                    <h4>Categor&iacute;as</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <?php  $_smarty_tpl->tpl_vars['nombre'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nombre']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categorias']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nombre']->key => $_smarty_tpl->tpl_vars['nombre']->value){
$_smarty_tpl->tpl_vars['nombre']->_loop = true;
?>
                                <li>
                                    <button onClick = "getDataColecciones(<?php echo $_smarty_tpl->tpl_vars['nombre']->value['id_categoria'];?>
);"><?php echo $_smarty_tpl->tpl_vars['nombre']->value['nombre_categoria'];?>
</buttom>
                                </li>
                            <?php } ?>
                            </ul>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
            </div>
        </div>
        <!-- /.row --><?php }} ?>