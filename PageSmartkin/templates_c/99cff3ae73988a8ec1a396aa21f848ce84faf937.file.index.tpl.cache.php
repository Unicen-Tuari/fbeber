<?php /* Smarty version Smarty-3.1.19, created on 2014-10-01 14:19:09
         compiled from "./templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9015027435425e177723c68-58536786%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '99cff3ae73988a8ec1a396aa21f848ce84faf937' => 
    array (
      0 => './templates/index.tpl',
      1 => 1412164555,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9015027435425e177723c68-58536786',
  'function' => 
  array (
  ),
  'cache_lifetime' => 120,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5425e1778421a9_81301395',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5425e1778421a9_81301395')) {function content_5425e1778421a9_81301395($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill">
                    <p class="text-center">
                    <img class="images-responsive" src="./images/netbook.png">
                    </p>
                </div>
                <div class="carousel-caption">
                    <h2>Caption 1</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill">
                    <p class="text-center">
                    <img class="images-responsive" src="./images/iphone.png">
                    </p>
                </div>
                <div class="carousel-caption">
                    <h2>Caption 2</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill">
                    <p class="text-center">
                    <img class="images-responsive" src="./images/tablet.png">
                    </p>
                </div>
                <div class="carousel-caption">
                    <h2>Caption 3</h2>
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

    <!-- Page Content -->
    <div class="container">

        <h2>futuros link a redes sociales</h2>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
        
        
<?php }} ?>
