<?php /* Smarty version Smarty-3.1.14, created on 2015-11-24 12:19:55
         compiled from "./templates/contacto.tpl" */ ?>
<?php /*%%SmartyHeaderCode:93021293456544375c94f41-27939706%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c7bb102d4bad95e5a5dfe049d4ba60ee91b1c57' => 
    array (
      0 => './templates/contacto.tpl',
      1 => 1448363994,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '93021293456544375c94f41-27939706',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_56544375cdd5d8_57142226',
  'variables' => 
  array (
    'informacion' => 0,
    'dato' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56544375cdd5d8_57142226')) {function content_56544375cdd5d8_57142226($_smarty_tpl) {?><div class="col-md-12">
<h1>Contacto</h1>
    
      <div class="col-md-6 bordes text-left">
      <br><br><br>
        <?php  $_smarty_tpl->tpl_vars['dato'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dato']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['informacion']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dato']->key => $_smarty_tpl->tpl_vars['dato']->value){
$_smarty_tpl->tpl_vars['dato']->_loop = true;
?> 
        <h4><span class="glyphicon glyphicon-phone" aria-hidden="true"><?php echo $_smarty_tpl->tpl_vars['dato']->value['email_info'];?>
</span></h4>
        <h4><span class="glyphicon glyphicon-phone-alt" aria-hidden="true"> <?php echo $_smarty_tpl->tpl_vars['dato']->value['tel_info'];?>
</span></h4>
        <h4><span class="glyphicon glyphicon-phone" aria-hidden="true"><?php echo $_smarty_tpl->tpl_vars['dato']->value['wh_info'];?>
</span></h4>
        <h4><span class="glyphicon glyphicon-phone" aria-hidden="true"><?php echo $_smarty_tpl->tpl_vars['dato']->value['dir_info'];?>
</span></h4>
        <h4><span class="glyphicon glyphicon-phone" aria-hidden="true"><?php echo $_smarty_tpl->tpl_vars['dato']->value['fb_info'];?>
</span></h4>
        <h4><span class="glyphicon glyphicon-phone" aria-hidden="true"><?php echo $_smarty_tpl->tpl_vars['dato']->value['tw_info'];?>
</span></h4>
        <h4><span class="glyphicon glyphicon-phone" aria-hidden="true"><?php echo $_smarty_tpl->tpl_vars['dato']->value['g_info'];?>
</span></h4>
        <h4><span class="glyphicon glyphicon-phone" aria-hidden="true"><?php echo $_smarty_tpl->tpl_vars['dato']->value['mercado_info'];?>
</span></h4>
        <h4><span class="glyphicon glyphicon-phone" aria-hidden="true"><?php echo $_smarty_tpl->tpl_vars['dato']->value['olx_info'];?>
</span></h4>
        
        <?php } ?>
    </div>

  <div class="col-md-6 bordes">

<!--ENVIO DE MAIL-->   
        <h3 class="text-center"><span class="glyphicon glyphicon-send" aria-hidden="true"></span> Envíe su consulta...</h3>
        <div class="row" id="alerta_mail"></div>
        
        <form action="" id="form_mail">
            <div class="form-group has-success">
                <label class="sr-only" for="nombre_apellido">Nombre y Apellido</label>
                <span class="input-group-addon glyphicon glyphicon-user"></span>
                <input class="form-control" type="text" name="nombre_apellido" placeholder="*Nombre y Apellido" pattern="[a-zA-Z]+\s[a-zA-Z]+" title="Formato: Nombre Apellido" required>          
            </div>
      

        <div class="form-group has-success">
            
                <label class="sr-only" for="email">Email</label>
                <span class="input-group-addon glyphicon glyphicon-envelope"></span>
                <input class="form-control" type="email" name="mail" placeholder="*Direccion de E-Mail" pattern="[\w-.]+@[\w-.]+\.\w{2,3}" title="Formato: xxx@yyy.zzz" required>
            
        </div>
        
        <div class="form-group has-success">
            
                <label class="sr-only" for="telefono">Telefono</label>
                <span class="input-group-addon glyphicon glyphicon-earphone"></span>
                <input class="form-control" type="tel" name="telefono" placeholder="*Telefono (Incluya Cod. Área)" pattern="[\d]{3,5}-[\d]{7,12}" title="Formato: (Cod. Área)-(Numero Completo)" required>
            
        </div>
        <div class="form-group has-success">
            <label class="sr-only" for="consulta">Consulta</label>
            <span class="input-group-addon glyphicon glyphicon-comment"></span>
            <textarea class="form-control" name="consulta" rows="4" placeholder="*Ingrese aqui su consulta" required></textarea>
        </div>
        <p>* Campos obligatorios</p>
        <div class="form-group has-success">
            <button class="btn btn-danger" type="reset"><span class="glyphicon glyphicon-remove"></span>Cancelar</button>
            <button class="btn btn-success" type="submit"><span class="glyphicon glyphicon-ok"></span>Enviar</button>
        </div>
    </form>
    </div>        

   </div> 
    
            <?php }} ?>