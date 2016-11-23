<?php /* Smarty version Smarty-3.1.14, created on 2016-11-23 14:12:00
         compiled from ".\templates\nosotros.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3082458358b9bdb7000-96407410%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89ca919062979c96a27b99e4cfad316f11a2249a' => 
    array (
      0 => '.\\templates\\nosotros.tpl',
      1 => 1479906717,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3082458358b9bdb7000-96407410',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_58358b9bf030d3_83114504',
  'variables' => 
  array (
    'profesores' => 0,
    'profesor' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58358b9bf030d3_83114504')) {function content_58358b9bf030d3_83114504($_smarty_tpl) {?>    <div class="col-md-12">
      <div class="col-md-8">
      <br><br>
        <img class="img-thumbnail" src="images/gym.jpg" width="100%">
      </div>

      <div class="col-md-3">
        <br><br>
        <h2>¿Quiénes somos?</h2>
        <br>
        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
      </div>

      <div class="col-md-12 text-center">
        <br>
        <h2>Profesores</h2>
        <br>
              <div class="col-md-12 text-center">

        <?php  $_smarty_tpl->tpl_vars['profesor'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['profesor']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['profesores']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['profesor']->key => $_smarty_tpl->tpl_vars['profesor']->value){
$_smarty_tpl->tpl_vars['profesor']->_loop = true;
?>
        <?php if ($_smarty_tpl->tpl_vars['profesor']->value['id']!=1){?>
        <div class="col-md-2">
          <img src="images/<?php echo $_smarty_tpl->tpl_vars['profesor']->value['foto'];?>
" alt="..." class="img-circle" width="140px" height="140px">
          <h3><?php echo $_smarty_tpl->tpl_vars['profesor']->value['apyno'];?>
</h3>
          <h4>Profesor/a de <?php echo $_smarty_tpl->tpl_vars['profesor']->value['nombreAct'];?>
</h4>
          <p><?php echo $_smarty_tpl->tpl_vars['profesor']->value['descripcion'];?>
</p>
        </div>
        <?php }?>
        <?php } ?>
           </div>
      </div>
    </div>
  </div>


<?php }} ?>