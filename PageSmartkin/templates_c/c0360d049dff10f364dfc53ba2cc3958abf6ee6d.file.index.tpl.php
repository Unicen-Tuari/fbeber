<?php /* Smarty version Smarty-3.1.14, created on 2014-10-16 03:37:13
         compiled from "./templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:832489001543f103d416611-60431611%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0360d049dff10f364dfc53ba2cc3958abf6ee6d' => 
    array (
      0 => './templates/index.tpl',
      1 => 1413423430,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '832489001543f103d416611-60431611',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_543f103d5754b1_71461348',
  'variables' => 
  array (
    'categorias' => 0,
    'nombre' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543f103d5754b1_71461348')) {function content_543f103d5754b1_71461348($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<br>
<select id="id_categoria" onChange = "getData();">
    <?php  $_smarty_tpl->tpl_vars['nombre'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nombre']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categorias']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nombre']->key => $_smarty_tpl->tpl_vars['nombre']->value){
$_smarty_tpl->tpl_vars['nombre']->_loop = true;
?>
      <option value="<?php echo $_smarty_tpl->tpl_vars['nombre']->value['id_categoria'];?>
"><?php echo $_smarty_tpl->tpl_vars['nombre']->value['nombre_categoria'];?>
</option>
    <?php } ?>
  </select>

  <div id="tableData">

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
    </div>
    <!--Contenido de la pagina-->
    <div class="container">

        <h2>futuros link a redes sociales</h2>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>