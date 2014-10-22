<?php /* Smarty version Smarty-3.1.14, created on 2014-10-22 01:21:46
         compiled from "./templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12464416585446ea8a446268-15219320%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0360d049dff10f364dfc53ba2cc3958abf6ee6d' => 
    array (
      0 => './templates/index.tpl',
      1 => 1413933496,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12464416585446ea8a446268-15219320',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5446ea8a60a249_56425958',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5446ea8a60a249_56425958')) {function content_5446ea8a60a249_56425958($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<div class="jumbotron">
		<div id="tableData">
	    	<h3>Bienvenido a Smartkin!</h3>
	    	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

			  <!-- Wrapper for slides -->
			  <div class="carousel-inner">
			    <div class="item active">
			      <img src="./images/smartkin1.jpg" class="img-responsive" width="250px">
			      
			    </div>
			    <div class="item">
			      <img src="./images/smartkin2.jpg" class="img-responsive" width="250px">
			      
			    </div>
			  </div>

			  <!-- Controls -->
			  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left"></span>
			  </a>
			  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right"></span>
			  </a>
			</div>
		</div>
	</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>