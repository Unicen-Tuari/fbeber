<?php /* Smarty version Smarty-3.1.14, created on 2015-12-10 06:44:41
         compiled from "./templates/placa.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27289070056691149ef0110-16216128%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a0a2e162690788b3ed796ac2541e2134bcfa8860' => 
    array (
      0 => './templates/placa.tpl',
      1 => 1449726276,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27289070056691149ef0110-16216128',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_56691149ef9369_97092167',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56691149ef9369_97092167')) {function content_56691149ef9369_97092167($_smarty_tpl) {?><div class="col-md-12 bordes">
          <div class="col-md-6 bordes comentarios"><!--comentarios-->
              <div class="col-md-12">
              <iframe src="./comentarios.php" class="col-md-12"></iframe>
              </div>
          </div>

          <div class="col-md-6 bordes"><!--panel derecho-->
  			<div class="col-md-12 bordes usuario">
            	<?php echo $_smarty_tpl->getSubTemplate ("panel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            </div>
            <div class="col-md-12 bordes compras">                
				  
	                <img src="./images/images-sys/mercado.png" class="pad">            
	            </div>

            <div class="col-md-12 bordes redes">  
	                <img src="./images/images-sys/fb.png" class="pad">
	                <img src="./images/images-sys/instragram.png" class="pad">
	                <img src="./images/images-sys/twitter.png" class="pad">
            </div>
            
          </div>

    </div>
    
</div><?php }} ?>