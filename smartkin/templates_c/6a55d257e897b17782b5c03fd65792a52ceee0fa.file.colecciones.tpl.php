<?php /* Smarty version Smarty-3.1.14, created on 2015-11-23 11:26:33
         compiled from "./templates/colecciones.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6991270865640ac6e2fa559-88924377%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a55d257e897b17782b5c03fd65792a52ceee0fa' => 
    array (
      0 => './templates/colecciones.tpl',
      1 => 1448274390,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6991270865640ac6e2fa559-88924377',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5640ac6e2fbf69_79316732',
  'variables' => 
  array (
    'colecciones' => 0,
    'coleccion' => 0,
    'imagen' => 0,
    'usuario' => 0,
    'user' => 0,
    'favoritos' => 0,
    'fav' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5640ac6e2fbf69_79316732')) {function content_5640ac6e2fbf69_79316732($_smarty_tpl) {?><div class="page-header"></div>  
      <h1>Colecciones</h1>
      <p>NOTA: hacer galeria</p>


  <?php  $_smarty_tpl->tpl_vars['coleccion'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['coleccion']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['colecciones']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['coleccion']->key => $_smarty_tpl->tpl_vars['coleccion']->value){
$_smarty_tpl->tpl_vars['coleccion']->_loop = true;
?>
  


  <div class="col-md-6 text-center">
  <?php if ($_smarty_tpl->tpl_vars['coleccion']->value['publico']){?>
  <h4><?php echo $_smarty_tpl->tpl_vars['coleccion']->value['name_col'];?>
</h4>
      
        <?php  $_smarty_tpl->tpl_vars['imagen'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['imagen']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['coleccion']->value['imagenes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['imagen']->key => $_smarty_tpl->tpl_vars['imagen']->value){
$_smarty_tpl->tpl_vars['imagen']->_loop = true;
?>
          <div class="col-md-3">

            
            <div class="mod" style="background:url('./images/<?php echo $_smarty_tpl->tpl_vars['imagen']->value['img_mod'];?>
')">
              
              <?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['usuario']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value){
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
                <?php if (!$_smarty_tpl->tpl_vars['user']->value['bloqueado']){?>
                  <form action="index.php?action=agregar_favorito" method="POST" enctype="multipart/form-data" class="text-right">   
                    <input id="<?php echo $_smarty_tpl->tpl_vars['user']->value['id_user'];?>
" name= "new_fk_user" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['id_user'];?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['user']->value['name_user'];?>
"hidden/>
                    <input id="<?php echo $_smarty_tpl->tpl_vars['imagen']->value['id_mod'];?>
" name= "new_fk_mod" value="<?php echo $_smarty_tpl->tpl_vars['imagen']->value['id_mod'];?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['imagen']->value['id_mod'];?>
"hidden/>
                    <?php  $_smarty_tpl->tpl_vars['fav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['fav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['favoritos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['fav']->key => $_smarty_tpl->tpl_vars['fav']->value){
$_smarty_tpl->tpl_vars['fav']->_loop = true;
?>
                      <?php if ($_smarty_tpl->tpl_vars['fav']->value['id_mod']==$_smarty_tpl->tpl_vars['imagen']->value['id_mod']){?>
                        <button type="submit" name="saveForm" class="btn btn-success"><?php echo $_smarty_tpl->tpl_vars['fav']->value['cantidad'];?>
 <span class="glyphicon glyphicon-hand-up" aria-hidden="true"></span></button>
                      <?php }?>
                    <?php } ?>
                  </form>
                <?php }?>
              <?php } ?>

             
              </div>  
          </div>
            <?php } ?>
          <?php }?>
        
  </div>

<?php } ?>
<?php }} ?>