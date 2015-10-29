<?php /* Smarty version Smarty-3.1.14, created on 2015-10-22 16:29:00
         compiled from "./templates/contacto.tpl" */ ?>
<?php /*%%SmartyHeaderCode:57583738256210d9296b114-14154337%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c7bb102d4bad95e5a5dfe049d4ba60ee91b1c57' => 
    array (
      0 => './templates/contacto.tpl',
      1 => 1445524138,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '57583738256210d9296b114-14154337',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_56210d9299e265_79334985',
  'variables' => 
  array (
    'informacion' => 0,
    'dato' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56210d9299e265_79334985')) {function content_56210d9299e265_79334985($_smarty_tpl) {?><div class="page-header"></div>

<h1>Contacto</h1>

    <?php  $_smarty_tpl->tpl_vars['dato'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dato']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['informacion']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dato']->key => $_smarty_tpl->tpl_vars['dato']->value){
$_smarty_tpl->tpl_vars['dato']->_loop = true;
?> 
    <br><p>NOTA: hacer tablas</p>
    <p>
        <span class="glyphicon glyphicon-phone-alt" aria-hidden="true"> <?php echo $_smarty_tpl->tpl_vars['dato']->value['tel1'];?>
</span> | <span class="glyphicon glyphicon-phone" aria-hidden="true"><?php echo $_smarty_tpl->tpl_vars['dato']->value['tel2'];?>
</span> | <span class="glyphicon glyphicon-home" aria-hidden="true"> <?php echo $_smarty_tpl->tpl_vars['dato']->value['otro'];?>
</span>
    </p>
    <br>
    
    <?php } ?>

<!--ENVIO DE MAIL-->   
        <h3 class="text-center"><span class="glyphicon glyphicon-send" aria-hidden="true"></span> Envíe su consulta...</h3>
        
        <div class="form-group has-success">
            <input type="text" class="form-control" id="inputSuccess1"  placeholder="*Email">
        </div>

        <div class="form-group has-success">
            <input type="text" class="form-control" id="inputSuccess1"  placeholder="*Asunto">
        </div>
        
        <div class="form-group has-success">
            <textarea name="comment" form="usrform" class="form-control" placeholder="*Consulta"></textarea>
        </div>
        <p>* Campos obligatorios</p>
        <div class="text-center">
            <button type="button" class="btn btn-default btn-md te">
                <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Enviar
            </button>
        </div>
    

<?php }} ?>