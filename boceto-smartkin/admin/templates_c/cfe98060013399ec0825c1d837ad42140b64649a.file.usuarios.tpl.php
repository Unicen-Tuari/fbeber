<?php /* Smarty version Smarty-3.1.14, created on 2015-10-21 19:00:56
         compiled from "./templates/usuarios.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7640883535627c4c8b89707-30451198%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cfe98060013399ec0825c1d837ad42140b64649a' => 
    array (
      0 => './templates/usuarios.tpl',
      1 => 1445433538,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7640883535627c4c8b89707-30451198',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'usuarios' => 0,
    'usuario' => 0,
    'errores' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5627c4c8cc8523_76660297',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5627c4c8cc8523_76660297')) {function content_5627c4c8cc8523_76660297($_smarty_tpl) {?><div class="page-header">
        <h1>Usuarios</h1>
      </div>
      
      <ul class="list-group">
        <?php  $_smarty_tpl->tpl_vars['usuario'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['usuario']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['usuarios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['usuario']->key => $_smarty_tpl->tpl_vars['usuario']->value){
$_smarty_tpl->tpl_vars['usuario']->_loop = true;
?>
        <li class="list-group-item">
          <?php if ($_smarty_tpl->tpl_vars['usuario']->value['habilitado']){?>
            <s><?php echo $_smarty_tpl->tpl_vars['usuario']->value['name_user'];?>
</s>
          <?php }else{ ?>
            <?php echo $_smarty_tpl->tpl_vars['usuario']->value['name_user'];?>

          <?php }?>
                  
          <a class="glyphicon glyphicon-ok" href="index.php?action=no_habilitar_usuario&id_user=<?php echo $_smarty_tpl->tpl_vars['usuario']->value['id_user'];?>
"><button type="submit" class="btn btn-default">Deshabilitar</button></a>
                  
          <a class="glyphicon glyphicon-ok" href="index.php?action=habilitar_usuario&id_user=<?php echo $_smarty_tpl->tpl_vars['usuario']->value['id_user'];?>
"><button type="submit" class="btn btn-default">Habilitar</button></a>
        </li>
        <?php } ?>
      </ul>
    
    
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
<?php }} ?>