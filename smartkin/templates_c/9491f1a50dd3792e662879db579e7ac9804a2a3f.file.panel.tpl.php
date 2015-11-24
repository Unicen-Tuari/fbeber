<?php /* Smarty version Smarty-3.1.14, created on 2015-11-24 12:22:43
         compiled from "./templates/panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:98065584456544375b5f297-95101397%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9491f1a50dd3792e662879db579e7ac9804a2a3f' => 
    array (
      0 => './templates/panel.tpl',
      1 => 1448364163,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '98065584456544375b5f297-95101397',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_56544375ba0a99_20256221',
  'variables' => 
  array (
    'usuario' => 0,
    'info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56544375ba0a99_20256221')) {function content_56544375ba0a99_20256221($_smarty_tpl) {?><br><br>
<?php if (isset($_smarty_tpl->tpl_vars['usuario']->value)){?>
		<?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['usuario']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value){
$_smarty_tpl->tpl_vars['info']->_loop = true;
?>
                    
            <?php if (!$_smarty_tpl->tpl_vars['info']->value['bloqueado']){?>
                
                <?php echo $_smarty_tpl->getSubTemplate ("user.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            <?php }else{ ?>
            <div class="col-md-12">
                <div class="col-md-6 text-center">
                    <div class="text-center icon-user" style="background:url('<?php echo $_smarty_tpl->tpl_vars['info']->value['img_user'];?>
'); background-size:100%;"><br>
                        <h3 class="h3-bloqueado">FAIL</h3>
                    </div>
                </div>
                <div class="col-md-6 text-center">
                    <br><p><b>USUARIO BLOQUEADO!</b> Contáctese con el Administrador.</p> 
                </div>
                <button id="logout" class="btn btn-lg btn-primary ">Intentar de nuevo</button> 
            </div>
            <?php }?>
        <?php } ?>
<?php }else{ ?>
<div class="col-md-12 form-login">
	<form id="formlogin" class="form-signin" method="post" >
        <h4 class="">Inciar Sesión</h4>
        
        <input id="email_user" name="email_user" type="text" class="form-control" placeholder="Correo Electrónico" autofocus="">
        <input id="pass_user" name="pass_user" type="password" class="form-control" placeholder="Contraseña">
        <div id="error" class="alert alert-danger" style="display: none;">
            <p class="text-center">Olvide mi contraseña!!</p>
        </div>
        <div class="text-right">
        <button id="signin" class="btn btn-success" type="submit">Entrar 
            <span class="glyphicon glyphicon-align-left" aria-hidden="true"></span> 
        </button>
        </div>
        
    </form>
    <a href="#registrarse">REGISTRARSE</a>
</div>      
<?php }?>
<br>
              

        <div class="bordes col-md-12">
            <div class="fb-page" data-href="https://www.facebook.com/facebook" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/florencia.flor.526"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote></div></div>
        </div>

        <div class="bordes col-md-12">
            <a class="twitter-timeline"  href="https://twitter.com/moniflopi" data-widget-id="660905774391173120">Tweets de @moniflopi.</a> 
        </div>

        <div class="bordes col-md-12">
            <h1>PUBLICIDAD</h1>
        </div>

        <div class="bordes col-md-12">
            <h1>PUBLICIDAD</h1>
        </div>

        <div class="bordes col-md-12 redes">
            <h1>PUBLICIDAD</h1>
        </div>

        <div class="bordes col-md-12 redes">
            <h1>PUBLICIDAD</h1>
        </div>

       <?php }} ?>