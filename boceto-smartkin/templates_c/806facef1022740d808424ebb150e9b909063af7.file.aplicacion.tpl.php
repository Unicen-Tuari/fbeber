<?php /* Smarty version Smarty-3.1.14, created on 2015-10-25 00:44:04
         compiled from "./templates/aplicacion.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1512442673562a61a329c8b6-49765094%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '806facef1022740d808424ebb150e9b909063af7' => 
    array (
      0 => './templates/aplicacion.tpl',
      1 => 1445726643,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1512442673562a61a329c8b6-49765094',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_562a61a32d5450_54592163',
  'variables' => 
  array (
    'colecciones' => 0,
    'coleccion' => 0,
    'imagen' => 0,
    'comentario' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_562a61a32d5450_54592163')) {function content_562a61a32d5450_54592163($_smarty_tpl) {?><h1>Aplicación</h1>
<br>
  <div class="bordes col-md-5">
      <h3>Ayuda!</h3>
      <p>1) Sube tu imagen <br>
      <input type="file" name="imagesToUpload[]" id="imagesToUpload" multiple/><br>
          2) Elegir dispositivo <br>
            <?php  $_smarty_tpl->tpl_vars['coleccion'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['coleccion']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['colecciones']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['coleccion']->key => $_smarty_tpl->tpl_vars['coleccion']->value){
$_smarty_tpl->tpl_vars['coleccion']->_loop = true;
?>
          
          <li class="list-group-item">
          Elegir Dispositivo:<br>
            <?php  $_smarty_tpl->tpl_vars['imagen'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['imagen']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['coleccion']->value['imagenes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['imagen']->key => $_smarty_tpl->tpl_vars['imagen']->value){
$_smarty_tpl->tpl_vars['imagen']->_loop = true;
?>
                <img src="./images/modelos/<?php echo $_smarty_tpl->tpl_vars['imagen']->value['path_mod'];?>
" class="img-thumbnail" width="50px" id="<?php echo $_smarty_tpl->tpl_vars['imagen']->value['id_mod'];?>
" />
            <?php } ?>
          </li>
        <?php } ?>
          3) Probar! <br>
          <a class="glyphicon glyphicon-trash" href="index.php?action=borrar_comentario&id_com=<?php echo $_smarty_tpl->tpl_vars['comentario']->value['id_com'];?>
">Probar</a> <br>
          4) <a class="glyphicon glyphicon-trash" href="index.php?action=borrar_comentario&id_com=<?php echo $_smarty_tpl->tpl_vars['comentario']->value['id_com'];?>
">Descargar</a> | 
          <a class="glyphicon glyphicon-trash" href="index.php?action=borrar_comentario&id_com=<?php echo $_smarty_tpl->tpl_vars['comentario']->value['id_com'];?>
">Descartar</a>
      </p>
  </div>
  <div class="bordes col-md-6">
    <img src="./images/modelos/<?php echo $_smarty_tpl->tpl_vars['imagen']->value['path_mod'];?>
" class="img-thumbnail" width="350px" id="<?php echo $_smarty_tpl->tpl_vars['imagen']->value['id_mod'];?>
" /><br>
        
  </div>
  <?php }} ?>