<?php /* Smarty version Smarty-3.1.19, created on 2014-10-01 18:19:22
         compiled from "./templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18685656285425cf9ac1b399-17168501%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '99cff3ae73988a8ec1a396aa21f848ce84faf937' => 
    array (
      0 => './templates/index.tpl',
      1 => 1412180361,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18685656285425cf9ac1b399-17168501',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5425cf9ad11400_62700164',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5425cf9ad11400_62700164')) {function content_5425cf9ad11400_62700164($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <!-- Header Carousel -->
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
