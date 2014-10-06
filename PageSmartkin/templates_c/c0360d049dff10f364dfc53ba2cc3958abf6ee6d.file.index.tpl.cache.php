<?php /* Smarty version Smarty-3.1.14, created on 2014-10-06 15:16:35
         compiled from "./templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14489898975432930810f616-20827497%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0360d049dff10f364dfc53ba2cc3958abf6ee6d' => 
    array (
      0 => './templates/index.tpl',
      1 => 1412203022,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14489898975432930810f616-20827497',
  'function' => 
  array (
  ),
  'cache_lifetime' => 120,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_543293081b4d26_04069132',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543293081b4d26_04069132')) {function content_543293081b4d26_04069132($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

    
    <!-- Header Carousel -->
    <br>
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="item">
                    <div class="fill">
                        <p class="text-center">
                        <img src="./images/smartkin1.jpg" width="100%">
                        </p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="fill">
                    <p class="text-center">
                    <img src="./images/smartkin2.jpg" width="100%">
                    </p>
                </div>
            </div>
            <div class="item">
                <div class="fill">
                    <p class="text-center">
                    <img src="./images/smartkin3.jpg" width="100%">
                    </p>
                </div>
            </div>
            <div class="item">
                <div class="fill">
                    <p class="text-center">
                    <img src="./images/smartkin4.jpg" width="100%">
                    </p>
                </div>
            </div>
            <div class="item">
                <div class="fill">
                    <p class="text-center">
                    <img src="./images/smartkin5.jpg" width="100%" >
                    </p>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

    <!--Contenido de la pagina-->
    <div class="container">

        <h2>futuros link a redes sociales</h2>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
        
        
<?php }} ?>