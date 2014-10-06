<?php /* Smarty version Smarty-3.1.19, created on 2014-10-01 21:54:36
         compiled from "./templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:885298710542c5b9a3df0e8-78739568%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61f88a4baff364b43355df705c512b05442cd451' => 
    array (
      0 => './templates/index.tpl',
      1 => 1412193274,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '885298710542c5b9a3df0e8-78739568',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_542c5b9a5c1a31_23374656',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542c5b9a5c1a31_23374656')) {function content_542c5b9a5c1a31_23374656($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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

    <!-- Page Content -->
    <div class="container">

        <h2>futuros link a redes sociales</h2>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
        
        
<?php }} ?>
