<?php /* Smarty version Smarty-3.1.14, created on 2016-11-23 14:10:27
         compiled from ".\templates\profe_act.tpl" */ ?>
<?php /*%%SmartyHeaderCode:846758358a7b4b54f0-03845419%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1210ea93ade2d6d1884d782271c23cb5816e9898' => 
    array (
      0 => '.\\templates\\profe_act.tpl',
      1 => 1479906625,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '846758358a7b4b54f0-03845419',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_58358a7b7c6834_02397898',
  'variables' => 
  array (
    'profeact' => 0,
    'actividad' => 0,
    'profes' => 0,
    'usuario' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58358a7b7c6834_02397898')) {function content_58358a7b7c6834_02397898($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['profeact']->value==null){?>
<h3>Próximamente habrá info sobre <?php echo $_smarty_tpl->tpl_vars['actividad']->value[0]['nombre'];?>
</h3>

<?php }else{ ?>
<h4>Profesores de <?php echo $_smarty_tpl->tpl_vars['actividad']->value[0]['nombre'];?>
</h4>
<?php  $_smarty_tpl->tpl_vars['profes'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['profes']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['profeact']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['profes']->key => $_smarty_tpl->tpl_vars['profes']->value){
$_smarty_tpl->tpl_vars['profes']->_loop = true;
?>

<table class="table text-left">
<tr>
	<td><img src="images/<?php echo $_smarty_tpl->tpl_vars['profes']->value['foto'];?>
" alt="..." class="img-circle" width="70px" height="70px"> <?php echo $_smarty_tpl->tpl_vars['profes']->value['apyno'];?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['profes']->value['horarios'];?>
</td>
	<td class="text-center">
  <?php if (isset($_smarty_tpl->tpl_vars['usuario']->value)){?>
	<form id="inscripcion" method="POST" enctype="multipart/form-data">
    <input type="hidden" class="form-control" id="new_idProfe_i" name="new_idProfe_i" value="<?php echo $_smarty_tpl->tpl_vars['profes']->value['id'];?>
">
    <input type="hidden" class="form-control" id="new_idUser_i" name="new_idUser_i" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value['id'];?>
">
    <a class="btn btn-success" href="#" onclick="agregaInscripcion()" aria-hidden="true" data-dismiss="modal">Inscribirme</a>
  </form>
  <?php }else{ ?><a href="login.php"><span class="label label-warning">Iniciar Sesión / Registrarse</span></a>
  <?php }?>
    </td>
</tr>
</table>
<?php } ?>
	
<?php }?>
      
<?php }} ?>