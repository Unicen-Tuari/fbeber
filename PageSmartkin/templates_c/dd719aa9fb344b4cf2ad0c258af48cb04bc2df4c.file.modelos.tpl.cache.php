<?php /* Smarty version Smarty-3.1.14, created on 2014-10-06 15:35:21
         compiled from "./templates/modelos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:115092545554329a996fad10-73981542%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd719aa9fb344b4cf2ad0c258af48cb04bc2df4c' => 
    array (
      0 => './templates/modelos.tpl',
      1 => 1412521597,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '115092545554329a996fad10-73981542',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'nombre_modelo' => 0,
    'img_modelo' => 0,
    'img_dispositivo' => 0,
    'nombre_dispositivo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54329a9988e1b4_96365658',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54329a9988e1b4_96365658')) {function content_54329a9988e1b4_96365658($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Modelos
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">/</li>
                    <li>Categor&iacute;as</li>
                    <li class="active">/</li>
                    <li><a href="consulta_colecciones.php">Colecciones</a></li>
                    <li class="active">/</li>
                    <li>Modelos</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <div class="row">
            
            <div class="col-md-8">
            
            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['name'] = 'lnombres';
$_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['nombre_modelo']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
            <button class="btn" data-toggle="modal" data-target="#myModal">
            <img class="img-hover" src="./images/catalogo/<?php echo $_smarty_tpl->tpl_vars['img_modelo']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lnombres']['index']];?>
">
            </button>

            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
                    <h4 class="modal-title" id="myModalLabel"><?php echo $_smarty_tpl->tpl_vars['nombre_modelo']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lnombres']['index']];?>
</h4>
                  </div>
                  
                  <div class="modal-body">
                    
                    <!-- Elastislide Carousel --> 
                   
                        <a href="./consulta_modelos.php">
                        <img class="img-hover" src="./images/catalogo/<?php echo $_smarty_tpl->tpl_vars['img_dispositivo']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lnombres']['index']];?>
" height="100%">
                        <?php echo $_smarty_tpl->tpl_vars['nombre_dispositivo']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lnombres']['index']];?>

                        </a>
                    
                    <h3>Envie su consulta</h3>
                        <form name="sentMessage" id="contactForm" novalidate>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Nombre:</label>
                                    <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block"></p>
                                </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Tel&eacute;fono:</label>
                                    <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
                                </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Email:</label>
                                    <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                                </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Consulta:</label>
                                    <p>Detalle dispositivo(tamaño, modelo, etc)</p>
                                    <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                                </div>
                            </div>
                            <div id="success"></div>
                
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </form>
                  </div>
                  
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                  </div>
                </div>
              </div>
            </div>
            <?php endfor; endif; ?>
        </div>
        <!-- /.row -->

<?php echo $_smarty_tpl->getSubTemplate ("lateral.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
        
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>