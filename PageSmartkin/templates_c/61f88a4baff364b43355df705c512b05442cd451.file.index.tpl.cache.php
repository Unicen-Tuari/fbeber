<?php /* Smarty version Smarty-3.1.19, created on 2014-10-02 00:54:41
         compiled from "./templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:564139713542c5e137b3267-39105233%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61f88a4baff364b43355df705c512b05442cd451' => 
    array (
      0 => './templates/index.tpl',
      1 => 1412203022,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '564139713542c5e137b3267-39105233',
  'function' => 
  array (
  ),
  'cache_lifetime' => 120,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_542c5e138bf623_59637288',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542c5e138bf623_59637288')) {function content_542c5e138bf623_59637288($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

    
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
