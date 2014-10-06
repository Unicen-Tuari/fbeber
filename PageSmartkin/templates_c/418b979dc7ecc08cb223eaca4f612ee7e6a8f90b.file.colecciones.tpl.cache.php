<?php /* Smarty version Smarty-3.1.19, created on 2014-10-02 01:20:27
         compiled from "./templates/colecciones.tpl" */ ?>
<?php /*%%SmartyHeaderCode:482583190542c5eb2b81567-19134707%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '418b979dc7ecc08cb223eaca4f612ee7e6a8f90b' => 
    array (
      0 => './templates/colecciones.tpl',
      1 => 1412205606,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '482583190542c5eb2b81567-19134707',
  'function' => 
  array (
  ),
  'cache_lifetime' => 120,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_542c5eb2d051c9_30990577',
  'variables' => 
  array (
    'nombre_coleccion' => 0,
    'img_coleccion' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542c5eb2d051c9_30990577')) {function content_542c5eb2d051c9_30990577($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

    
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Colecciones
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">/</li>
                    <li>Categor&iacute;as</li>
                    <li class="active">/</li>
                    <li class="active">Colecciones</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
        
         <div class="col-md-8">
            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['name'] = 'lnombres';
$_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['nombre_coleccion']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
                <a href="./modelos.php"><?php echo $_smarty_tpl->tpl_vars['nombre_coleccion']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lnombres']['index']];?>


                <!-- Elastislide Carousel -->
                <ul id="carousel" class="elastislide-list">
                    <li>
                        
                            <img class="img-responsive img-hover" src="./images/catalogo/<?php echo $_smarty_tpl->tpl_vars['img_coleccion']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lnombres']['index']];?>
">
                        
                    </li>
                </ul>
                
                </a>
            <?php endfor; endif; ?>
        </div>
        <!-- /.row -->

<?php echo $_smarty_tpl->getSubTemplate ("lateral.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
        
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>
