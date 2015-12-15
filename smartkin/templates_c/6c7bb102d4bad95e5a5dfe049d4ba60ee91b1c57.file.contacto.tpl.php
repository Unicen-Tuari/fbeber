<?php /* Smarty version Smarty-3.1.14, created on 2015-12-10 06:22:15
         compiled from "./templates/contacto.tpl" */ ?>
<?php /*%%SmartyHeaderCode:93021293456544375c94f41-27939706%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c7bb102d4bad95e5a5dfe049d4ba60ee91b1c57' => 
    array (
      0 => './templates/contacto.tpl',
      1 => 1449724887,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '93021293456544375c94f41-27939706',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_56544375cdd5d8_57142226',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56544375cdd5d8_57142226')) {function content_56544375cdd5d8_57142226($_smarty_tpl) {?>
<!--ENVIO DE MAIL-->   
        
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
            <label class="sr-only" for="consulta">Consulta</label>
            <span class="input-group-addon glyphicon glyphicon-comment"></span>
            <textarea class="form-control" name="consulta" rows="4" placeholder="*Ingrese aqui su consulta" required></textarea>
        </div>
        <p>* Campos obligatorios</p>
        <div class="form-group has-success text-center">
            <button class="btn btn-danger" type="reset"><span class="glyphicon glyphicon-remove"></span>Reset</button>
            <button class="btn btn-success" type="submit"><span class="glyphicon glyphicon-ok"></span>Enviar</button>
        </div>
    </form>
    </div>        

   </div> 
    
            <?php }} ?>