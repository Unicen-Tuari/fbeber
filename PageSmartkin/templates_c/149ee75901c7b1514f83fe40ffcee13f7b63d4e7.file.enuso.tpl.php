<?php /* Smarty version Smarty-3.1.19, created on 2014-09-28 21:28:33
         compiled from "./templates/enuso.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15509950135428569a4dca56-76079932%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '149ee75901c7b1514f83fe40ffcee13f7b63d4e7' => 
    array (
      0 => './templates/enuso.tpl',
      1 => 1411932509,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15509950135428569a4dca56-76079932',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5428569a5a5288_47154380',
  'variables' => 
  array (
    'nombre' => 0,
    'img_coleccion' => 0,
    'nombre_categoria' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5428569a5a5288_47154380')) {function content_5428569a5a5288_47154380($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Colecciones
                    <small>categoria_name</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li class="active">Colecciones</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <!-- First Blog Post -->
                
                <hr>
                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['name'] = 'lnombres';
$_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['nombre']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['total']);
?>
                <a href="./consulta_modelos.php"><?php echo $_smarty_tpl->tpl_vars['nombre']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lnombres']['index']];?>

                    <img class="img-responsive img-hover" src="./images/<?php echo $_smarty_tpl->tpl_vars['img_coleccion']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lnombres']['index']];?>
">
                </a>
                <?php endfor; endif; ?>
                <hr>

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Blog Search Well -->
                <div class="well">
                    <h4>Buscar Colecci&oacute;n</h4>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                        </span>
                    </div>
                    <!-- /.input-group -->
                </div>

                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>Categor&iacute;as</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['name'] = 'lnombres';
$_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['nombre_categoria']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['total']);
?>
                                <li>
                                <a href="./consulta_modelos.php"><?php echo $_smarty_tpl->tpl_vars['nombre_categoria']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lnombres']['index']];?>

                                </li>
                                <?php endfor; endif; ?>
                            </ul>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>

            </div>

        </div>
        <!-- /.row -->
        <hr>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
