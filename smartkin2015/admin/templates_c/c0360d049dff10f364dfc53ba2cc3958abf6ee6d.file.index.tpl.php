<?php /* Smarty version Smarty-3.1.14, created on 2015-11-20 00:36:39
         compiled from "./templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1179966125563612d9bdefc3-48537508%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0360d049dff10f364dfc53ba2cc3958abf6ee6d' => 
    array (
      0 => './templates/index.tpl',
      1 => 1447976197,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1179966125563612d9bdefc3-48537508',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_563612d9c70292_91481228',
  'variables' => 
  array (
    'admin' => 0,
    'info' => 0,
    'cantusuarios' => 0,
    'cant' => 0,
    'cantfavoritos' => 0,
    'cantidad' => 0,
    'cantcomentarios' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_563612d9c70292_91481228')) {function content_563612d9c70292_91481228($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

 <button id="logout" class="btn btn-primary">Logout</button>
<div class="col-md-3 bordes panel-izq">
    <div class="menu col-md-12 black">
        <div class="col-md-12">
            <?php if (isset($_smarty_tpl->tpl_vars['admin']->value)){?>
                <?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['admin']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value){
$_smarty_tpl->tpl_vars['info']->_loop = true;
?>
                    <h1><?php echo $_smarty_tpl->tpl_vars['info']->value['name_admin'];?>
</h1>
                <?php } ?>

            <?php }else{ ?>      
                <h1>Por favor inicie sesión</h1>
                <button id="login" class="btn btn-lg btn-primary btn-block" onClick="window.location = 'login.php';">Login</button>
                    <br><br>
                    <button>Slides</button><br>
                    <button>Slides</button><br>
                    <button>Slides</button><br>
                    <button>Slides</button><br>
                    <button>Slides</button><br>
            <?php }?>
        </div>
    </div>
</div>
 
<div class="col-md-9 bordes panel-der ">
    <div class="col-md-12 bordes black">
        <p class="text-right">Ir a Smartkin</p>
    </div>
    <div class="col-md-12 bordes">
        <h3 class="text-center">Panel de Control</h3>
    </div>
    <div class="col-md-12 bordes text-center">
        <!--redes sociales-->
    <div class="col-md-3 bordes">
        <h3 class="fb">Facebook</h3>
    </div>
    <div class="col-md-3 bordes">
        <h3 class="gm">Google Plus</h3>
    </div>
    <div class="col-md-3 bordes">
        <h3 class="tw">Twitter</h3>
    </div>
    <div class="col-md-3 bordes">
        <h3 class="ml">Mercado Libre</h3>
    </div>
    <!--smartkin-->
    <div class="col-md-3 bordes">        
        <h3 class="text">Usuarios</h3>        
        <?php  $_smarty_tpl->tpl_vars['cant'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cant']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cantusuarios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cant']->key => $_smarty_tpl->tpl_vars['cant']->value){
$_smarty_tpl->tpl_vars['cant']->_loop = true;
?>
            <h3><?php echo $_smarty_tpl->tpl_vars['cant']->value['cantidad'];?>
</h3>
        <?php } ?>
    </div>
    <div class="col-md-3 bordes">
        <h3 class="text">Favoritos</h3>
        <?php  $_smarty_tpl->tpl_vars['cantidad'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cantidad']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cantfavoritos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cantidad']->key => $_smarty_tpl->tpl_vars['cantidad']->value){
$_smarty_tpl->tpl_vars['cantidad']->_loop = true;
?>
            <h3><?php echo $_smarty_tpl->tpl_vars['cantidad']->value['cantidad'];?>
</h3>
        <?php } ?>
    </div>
    <div class="col-md-3 bordes">
        <h3 class="text">Comentarios</h3>
        <?php  $_smarty_tpl->tpl_vars['cantidad'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cantidad']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cantcomentarios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cantidad']->key => $_smarty_tpl->tpl_vars['cantidad']->value){
$_smarty_tpl->tpl_vars['cantidad']->_loop = true;
?>
            <h3><?php echo $_smarty_tpl->tpl_vars['cantidad']->value['cantidad'];?>
</h3>
        <?php } ?>
    </div>

    </div>
        <?php echo $_smarty_tpl->getSubTemplate ("admin_usuarios.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        <?php echo $_smarty_tpl->getSubTemplate ("admin_portfolios.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        <?php echo $_smarty_tpl->getSubTemplate ("admin_colecciones.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        <?php echo $_smarty_tpl->getSubTemplate ("admin_comentarios.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        <?php echo $_smarty_tpl->getSubTemplate ("admin_informacion.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    </div>


<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>