<?php /* Smarty version Smarty-3.1.14, created on 2015-10-29 18:14:32
         compiled from "./templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:386620341561cf8adb08f02-38134022%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0360d049dff10f364dfc53ba2cc3958abf6ee6d' => 
    array (
      0 => './templates/index.tpl',
      1 => 1446138858,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '386620341561cf8adb08f02-38134022',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_561cf8adc64002_54991983',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561cf8adc64002_54991983')) {function content_561cf8adc64002_54991983($_smarty_tpl) {?><!--HEADER-->
    <?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
    
  
<!--INICIO-->
<div class="bordes col-md-3 redes">
        <?php echo $_smarty_tpl->getSubTemplate ("panel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    </div>
  
    <div class="inicio bordes col-md-9">
        
        <div class="bordes">
            <div class="inicio bordes col-md-12">
            <h1>Bienvenidos a Smartkin!</h1>
            <h3>Los mejores diseños para ponerle onda a tu smartphone, tablet o notebook!!</h3>
            <img src="images/smartkin9.jpg" width="90%">
            </div>
        </div>

        <div class="bordes">
            <?php echo $_smarty_tpl->getSubTemplate ("colecciones.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
  
        </div>

        <div class="bordes">
            <?php echo $_smarty_tpl->getSubTemplate ("portfolios.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        </div>

        <div class="bordes">
            <?php echo $_smarty_tpl->getSubTemplate ("contacto.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        </div>

        <div class="bordes">
            <?php echo $_smarty_tpl->getSubTemplate ("nosotros.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
  
        </div>
        
        <div class="bordes">
            <?php echo $_smarty_tpl->getSubTemplate ("comentarios.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
    
        </div>

        <div class="bordes" id="registrarse">
            <?php echo $_smarty_tpl->getSubTemplate ("registrarse.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        </div>
    </div>

    
<!--FOOTER-->  
    <?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>