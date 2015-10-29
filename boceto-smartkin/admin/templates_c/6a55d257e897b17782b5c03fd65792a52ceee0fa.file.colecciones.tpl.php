<?php /* Smarty version Smarty-3.1.14, created on 2015-10-22 15:12:53
         compiled from "./templates/colecciones.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21048700456210f18723e29-62823373%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a55d257e897b17782b5c03fd65792a52ceee0fa' => 
    array (
      0 => './templates/colecciones.tpl',
      1 => 1445519572,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21048700456210f18723e29-62823373',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_56210f18735de7_58768589',
  'variables' => 
  array (
    'colecciones' => 0,
    'coleccion' => 0,
    'imagen' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56210f18735de7_58768589')) {function content_56210f18735de7_58768589($_smarty_tpl) {?><div class="page-header"></div>  
  <div id="col-md-12 bordes">
      <h1>Colecciones</h1>
      <p>NOTA: hacer galeria</p>
      <?php  $_smarty_tpl->tpl_vars['coleccion'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['coleccion']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['colecciones']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['coleccion']->key => $_smarty_tpl->tpl_vars['coleccion']->value){
$_smarty_tpl->tpl_vars['coleccion']->_loop = true;
?>
        
        <li class="list-group-item">
            <?php echo $_smarty_tpl->tpl_vars['coleccion']->value['name_col'];?>

            <br>
                     
          <?php  $_smarty_tpl->tpl_vars['imagen'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['imagen']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['coleccion']->value['imagenes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['imagen']->key => $_smarty_tpl->tpl_vars['imagen']->value){
$_smarty_tpl->tpl_vars['imagen']->_loop = true;
?>
              <img src="./images/modelos/<?php echo $_smarty_tpl->tpl_vars['imagen']->value['path_mod'];?>
" class="img-thumbnail" width="100px" id="<?php echo $_smarty_tpl->tpl_vars['imagen']->value['id_mod'];?>
" />
          <?php } ?>
        </li>
      <?php } ?>
  </div>

  <?php }} ?>