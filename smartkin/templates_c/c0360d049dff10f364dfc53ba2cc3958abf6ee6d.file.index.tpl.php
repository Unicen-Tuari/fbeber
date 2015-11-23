<?php /* Smarty version Smarty-3.1.14, created on 2015-11-22 12:52:35
         compiled from "./templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1179966125563612d9bdefc3-48537508%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0360d049dff10f364dfc53ba2cc3958abf6ee6d' => 
    array (
      0 => './templates/index.tpl',
      1 => 1448193142,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1179966125563612d9bdefc3-48537508',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_563612d9c70292_91481228',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_563612d9c70292_91481228')) {function content_563612d9c70292_91481228($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


    
    <div class="bordes col-md-3 redes">
        <?php echo $_smarty_tpl->getSubTemplate ("panel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    </div>
  
    <div class="inicio bordes col-md-9">
            
        <div id="inicio" class="bordes">
            <?php echo $_smarty_tpl->getSubTemplate ("slides.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        </div>     

        <div id="colecciones" class="">
            <?php echo $_smarty_tpl->getSubTemplate ("colecciones.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
  
        </div>

        <div id="portfolios" class="bordes">
            <?php echo $_smarty_tpl->getSubTemplate ("portfolios.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        </div>

        <div id="contacto" class="bordes">
            <?php echo $_smarty_tpl->getSubTemplate ("contacto.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        </div>

        <div id="nosotros" class="bordes">
            <?php echo $_smarty_tpl->getSubTemplate ("nosotros.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
  
        </div>
        
        <div id="comentarios" class="bordes">
            <?php echo $_smarty_tpl->getSubTemplate ("comentarios.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
    
        </div>

        <div class="bordes" id="registrarse">
            <?php echo $_smarty_tpl->getSubTemplate ("registrarse.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        </div>

    </div>

 

    </div> <!-- /container -->
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>