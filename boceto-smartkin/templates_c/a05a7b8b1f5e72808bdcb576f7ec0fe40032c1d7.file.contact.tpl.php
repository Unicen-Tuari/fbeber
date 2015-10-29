<?php /* Smarty version Smarty-3.1.14, created on 2015-10-16 16:39:45
         compiled from "./templates/contact.tpl" */ ?>
<?php /*%%SmartyHeaderCode:134770154056210c318f7b85-11877097%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a05a7b8b1f5e72808bdcb576f7ec0fe40032c1d7' => 
    array (
      0 => './templates/contact.tpl',
      1 => 1445006279,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '134770154056210c318f7b85-11877097',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
    'dato' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_56210c3192af70_42635848',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56210c3192af70_42635848')) {function content_56210c3192af70_42635848($_smarty_tpl) {?><div class="featurette" id="contacto">
            <h2 class="featurette-heading">Contacto</h2>
            <br>
            <div class="row"> 
                <div class="col-md-5 text-center" id="info">
                <br>

                    <?php  $_smarty_tpl->tpl_vars['dato'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dato']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dato']->key => $_smarty_tpl->tpl_vars['dato']->value){
$_smarty_tpl->tpl_vars['dato']->_loop = true;
?> 
                        <p class="text-center" >
                            <span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span>
                            <?php echo $_smarty_tpl->tpl_vars['dato']->value['telefono'];?>

                        
                            <span class="glyphicon glyphicon-phone" aria-hidden="true"></span> 
                            <?php echo $_smarty_tpl->tpl_vars['dato']->value['celular'];?>

                        
                            <span class="glyphicon glyphicon-home" aria-hidden="true"></span> 
                            <?php echo $_smarty_tpl->tpl_vars['dato']->value['direccion'];?>

                        </p>

                        <br>
                        <h3><span class="glyphicon glyphicon-globe" aria-hidden="true"></span> 
                            Redes Sociales
                        </h3>
                        <a href="http://<?php echo $_smarty_tpl->tpl_vars['dato']->value['facebook'];?>
"><img src="./images/face.png" class="icono_redes"></a>
                        <a href="http://<?php echo $_smarty_tpl->tpl_vars['dato']->value['twitter'];?>
"><img src="./images/twitter.png"  class="icono_redes"></a>
                        <a href="http://<?php echo $_smarty_tpl->tpl_vars['dato']->value['google'];?>
"><img src="./images/google.png"  class="icono_redes"></a>
                        <h3><span class="glyphicon glyphicon-globe" aria-hidden="true"></span> 
                           También encontranos en:
                        </h3>
                        <a href="http://<?php echo $_smarty_tpl->tpl_vars['dato']->value['mercado_libre'];?>
"><img src="./images/mercadolibre.png"  class="icono_redes"></a>

                    <?php } ?>
                </div>
                     
            <!--ENVIO DE MAIL-->   
                <div class="col-md-5 text-rigth">
                     <h3 class="text-center"><span class="glyphicon glyphicon-send" aria-hidden="true"></span> Envíe su consulta...</h3><br>
                    <div class="form-group has-success">
                        <h4>Asunto</h4>
                        <input type="text" class="form-control" id="inputSuccess1">
                    </div>
                    <div class="form-group has-success">
                        <h4>Mensaje</h4>
                        <textarea name="comment" form="usrform" class="form-control" placeholder="Agregar Consulta"></textarea>
                       
                    </div>

                    <div class="text-center">
                        <button type="button" class="btn btn-default btn-md te">
                          <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Enviar
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <hr class="featurette-divider">
<?php }} ?>