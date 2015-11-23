<?php /* Smarty version Smarty-3.1.14, created on 2015-11-22 12:15:41
         compiled from "./templates/registrarse.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16501339285640ac7a84c3b8-02553988%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '40d61da99a48ccbf7e72bbb8971b72c36f3f8f1e' => 
    array (
      0 => './templates/registrarse.tpl',
      1 => 1448190940,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16501339285640ac7a84c3b8-02553988',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5640ac7a84eec6_73328648',
  'variables' => 
  array (
    'usuario' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5640ac7a84eec6_73328648')) {function content_5640ac7a84eec6_73328648($_smarty_tpl) {?><div class="col-md-12"id="registrarse">
<div class="page-header"></div>  

<?php if (!isset($_smarty_tpl->tpl_vars['usuario']->value)){?>

    <h1>Registrarse</h1>

      <form action="index.php?action=agregar_usuario" method="POST" enctype="multipart/form-data">
      
            <input type="text" class="form-control" id="new_email" name="new_email" placeholder="Correo Electrónico"> 
            <input type="text" class="form-control" id="new_name" name="new_name" placeholder="Nombre de Usuario"> 
            <input type="password" class="form-control" id="new_pass" name="new_pass" placeholder="Contraseña"> 
            
          <button type="submit" class="btn btn-default">Listo!</button>       
              
      </form>

<?php }?>
</div><?php }} ?>