<?php /* Smarty version Smarty-3.1.19, created on 2014-10-02 00:03:16
         compiled from "./templates/contacto.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1077804374542c785a8fa6b7-74829121%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7692ebb88c19abe2d7f479476cd562bab90a0662' => 
    array (
      0 => './templates/contacto.tpl',
      1 => 1412200995,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1077804374542c785a8fa6b7-74829121',
  'function' => 
  array (
  ),
  'cache_lifetime' => 120,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_542c785ac77579_33401355',
  'variables' => 
  array (
    'email' => 0,
    'direccion' => 0,
    'telefono' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542c785ac77579_33401355')) {function content_542c785ac77579_33401355($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Contacto</h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li class="active">Contacto</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <!-- Map Column -->
            <div class="col-md-8">
                <!-- Embedded Google Map -->

            <br><br><br>

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d51249.48241047209!2d-61.74474315!3d-36.60007755!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95ea99d2a07a0eab%3A0x5de89f75bca3303!2sDaireaux%2C+Buenos+Aires!5e0!3m2!1ses!2sar!4v1411760318756" width="600" height="450" frameborder="0" style="border:0"></iframe>

            </div>
            <!-- Contact Details Column -->
            <div class="col-md-4">
                <h3>Detalle de Contacto</h3>
                <p>
                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['name'] = 'lnombres';
$_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['email']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
                    Correo Electr&oacute;nico: <?php echo $_smarty_tpl->tpl_vars['email']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lnombres']['index']];?>

                    <br>
                    Direcci&oacute;n: <?php echo $_smarty_tpl->tpl_vars['direccion']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lnombres']['index']];?>

                    <br>
                    Tel&eacute;fono: <?php echo $_smarty_tpl->tpl_vars['telefono']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lnombres']['index']];?>

                    <br>
                <?php endfor; endif; ?>                   
                </p>
                    
        
        <!-- /.row -->

        <!-- Contact Form -->
        <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
        
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
                            <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
        <!-- /.row -->

        <hr>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>
