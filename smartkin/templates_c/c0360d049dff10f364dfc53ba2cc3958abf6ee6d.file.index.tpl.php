<?php /* Smarty version Smarty-3.1.14, created on 2015-11-24 13:25:56
         compiled from "./templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:114668613756544375aad4f2-46717288%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0360d049dff10f364dfc53ba2cc3958abf6ee6d' => 
    array (
      0 => './templates/index.tpl',
      1 => 1448367943,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '114668613756544375aad4f2-46717288',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_56544375b48f15_39077319',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56544375b48f15_39077319')) {function content_56544375b48f15_39077319($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


    
    <div class="bordes col-md-3 redes">
        <?php echo $_smarty_tpl->getSubTemplate ("panel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    </div>
  
    <div class="inicio bordes col-md-9">
            
        <div id="inicio" class="col-md-12">
            <?php echo $_smarty_tpl->getSubTemplate ("slides.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        </div>     

        <div id="colecciones" class="col-md-12">
            <div class="page-header"></div>  
              <h1>Colecciones</h1>
              <p>NOTA: hacer galeria</p>
              <iframe src="./colecciones.php" class="col-md-12" height="400px"></iframe>

        </div>

        <div id="portfolios" class="col-md-12">
        <div class="page-header"></div>
            <h1>Portfolios</h1>
            <h4>Gracias por confiar en nosotros!</h4>
            <iframe src="./portfolios.php" class="col-md-12" height="400px"></iframe>
        </div>

        <div id="contacto" class="col-md-12">
            <div class="page-header"></div>
            <?php echo $_smarty_tpl->getSubTemplate ("contacto.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        </div>

        <div id="nosotros" class="col-md-12">
            <div class="page-header"></div>
            <?php echo $_smarty_tpl->getSubTemplate ("nosotros.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
  
        </div>
        
        <div id="comentarios" class="col-md-12">
            <div class="page-header"></div>
            <h1>Comentarios</h1>                    
            <iframe src="./comentarios.php" class="col-md-12" height="300px"></iframe>
        </div>

        <div class="col-md-12" id="registrarse">
            <div class="page-header"></div>
            <?php echo $_smarty_tpl->getSubTemplate ("registrarse.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        </div>

    </div>

 

    </div> <!-- /container -->
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>