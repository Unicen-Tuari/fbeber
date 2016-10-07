<?php /* Smarty version Smarty-3.1.14, created on 2016-10-07 00:58:04
         compiled from ".\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:60957f6d64ee25c83-00324072%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '749422d4cfc3eb5677cf499730392b6accd4d1c7' => 
    array (
      0 => '.\\templates\\index.tpl',
      1 => 1475794668,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '60957f6d64ee25c83-00324072',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_57f6d64f0df609_11494899',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57f6d64f0df609_11494899')) {function content_57f6d64f0df609_11494899($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



  <br>

  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="images/slides/slide1.png" alt="..." width="100%">
    </div>
    <div class="item">
      <img src="images/slides/slide2.png" alt="..." width="100%;">
    </div>

    <div class="item">
      <img src="images/slides/slide3.png" alt="..." width="100%;">
    </div>  
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div><!--fin de carrousel-->

<div class="col-md-12">
  <br>
  <h1>Promociones</h1>
  <p>Lorem Ipsum</p>
  <br>
  <div class="col-md-3">
    <div class="promocion1">
      <h3>Promoción Amigos</h3>
      <h4>$200</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
      </p>

    </div>
  </div>
  <div class="col-md-3">
    <div class="promocion2">
      <h3>Promoción del MES</h3>
      <h4>$300</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
  </div>
  <div class="col-md-3">
    <div class="promocion3">
      <h3>Promoción 2x1</h3>
      <h4>$400</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
  </div>
  <div class="col-md-3">
    <div class="promocion4">   
      <h3>Promoción por año</h3>
      <h4>$500</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
  </div>
  </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>