<?php /* Smarty version Smarty-3.1.14, created on 2015-01-28 12:00:45
         compiled from "./templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:91873963454c39de65b4209-69621764%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0360d049dff10f364dfc53ba2cc3958abf6ee6d' => 
    array (
      0 => './templates/index.tpl',
      1 => 1422442841,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '91873963454c39de65b4209-69621764',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54c39de662d2b3_45791559',
  'variables' => 
  array (
    'categoria' => 0,
    'nombre' => 0,
    'port' => 0,
    'dato' => 0,
    'info' => 0,
    'users' => 0,
    'user' => 0,
    'comentario' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c39de662d2b3_45791559')) {function content_54c39de662d2b3_45791559($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
    
  
<!--HEADER-->

    <header id="inicio">
    <br>
        <div class="row">
    <!--ACA VA LA SESION ADMIN-->
            <div id="sesion" class="col-sm-2 col-md-12"> 
                <div class="col-sm-2 col-md-12 text-right"><!--configuracion--> 
                    <span class="glyphicon glyphicon-plus text-rigth" aria-hidden="true">config</span>               
                </div>
                <div class="col-sm-2 col-md-12"> 
                    <h2><!--info personal-->
                        <img src="./images/anonimo.jpg"class="icono_redes">Administrador
                    </h2>
                    <h4 class="text-center">
                        usuarios | galerias | mis diseños | favoritos | likes | consultas | mensajes | noticias | informacion
                    </h4>
                    <br>
                    <br>
                </div>
            </div>
        <!--ACA VA LA SESION USUARIO-->
            <div id="sesion" class="col-sm-2 col-md-12"> 
                <div class="col-sm-2 col-md-12 text-right"><!--configuracion--> 
                    <span class="glyphicon glyphicon-plus text-rigth" aria-hidden="true">config</span>               
                </div>
                <div class="col-sm-2 col-md-12"> 
                    <h2><!--info personal-->
                        <img src="./images/anonimo.jpg"class="icono_redes">Nombre
                    </h2>
                    <h4 class="text-center">
                        mis diseños | favoritos | likes | consultas | mensajes
                    </h4>
                    <br>
                    <br>
                </div>
            </div>
        </div>        
            <div class="col-sm-2 col-md-12">
                <div class="headline">
                    <div class="container">
                        <img src="images/smartkin9.jpg">
                    </div>
                </div>
            </div>

        </div>
    </header>

<!--GALERIAS-->  
    
    <!-- Page Content -->
    <div class="container">

        <hr class="featurette-divider">

        <!-- Third Featurette -->
        <div class="featurette" id="galerias">
            
            <h2 class="featurette-heading">Galerías</h2>
             
            <div class="row" id="coleccion">
                
                    <?php  $_smarty_tpl->tpl_vars['nombre'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nombre']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categoria']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nombre']->key => $_smarty_tpl->tpl_vars['nombre']->value){
$_smarty_tpl->tpl_vars['nombre']->_loop = true;
?> 
                        <div class="col-sm-4 col-md-2">
                            <div class="thumbnail" style="background-image:url('./images/smartkin3.jpg')";>
                              <div class="caption text-center">
                                <h4 style="color:lightgrey";><?php echo $_smarty_tpl->tpl_vars['nombre']->value['name_cat'];?>
</h4>
                                
                                <button type="button" class="btn btn-default btn-sm">
                                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                                    Ver colecciones
                                </button>
                              </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>  

        <hr class="featurette-divider">
        <!--crear la tabla con los modelos-->
              
<!--APP-->
        <div class="featurette app text-center" id="app">
            <h2 class="featurette-heading text-center">PRÓXIMAMENTE!!!!</h2>
         
             <div class="row aplicacion">
                    
                <div class="col-sm-2 col-md-2">
                    <img src="./images/smartkin6.jpg " width="50%">
                </div>

                 <div class="col-sm-2 col-md-6">
                    <img src="./images/smartkin6.jpg " width="50%">
                </div>

                 <div class="col-sm-2 col-md-2 text-right">
                    <img src="./images/smartkin6.jpg " width="50%">
                </div>
            </div>
        </div>

        <hr class="featurette-divider">

<!--PORTFOLIO-->
        <div class="featurette" id="portfolio">
            <h2 class="featurette-heading">Portfolio</h2>
            
                <div class="row">
                    <?php  $_smarty_tpl->tpl_vars['dato'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dato']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['port']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dato']->key => $_smarty_tpl->tpl_vars['dato']->value){
$_smarty_tpl->tpl_vars['dato']->_loop = true;
?> 
                        <div class="col-sm-6 col-md-4" id="port">
                            <div class="thumbnail">
                              <img src="images/<?php echo $_smarty_tpl->tpl_vars['dato']->value['img_port'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['dato']->value['img_port'];?>
">
                              <div class="caption">
                                <h4><?php echo $_smarty_tpl->tpl_vars['dato']->value['name_port'];?>
</h4>
                                <p><?php echo $_smarty_tpl->tpl_vars['dato']->value['descrip_port'];?>
</p>
                                
                                <a href="#nada" rel="consulta_portfolio" data-content='' data-placement="">
                                    <button type="button" class="btn btn btn-default btn-sm" >Consultar</button>
                                </a>
                                <div class="text-right">
                                      <button type="button" class="btn btn-default btn-sm"> 
                                    25
                                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                                    Like
                                </button>
                                </div>
                              </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            <!--POPOVER PARA CONSULTAR PORTFOLIO-->    
                <div id="consulta_portfolio" style="display: none" >
                    <div class="container-fluid">
                        <div class="row">
                             <div class="col-md-12 text-center">
                    
                                <div class="form-group has-success">
                                <?php  $_smarty_tpl->tpl_vars['dato'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dato']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['port']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dato']->key => $_smarty_tpl->tpl_vars['dato']->value){
$_smarty_tpl->tpl_vars['dato']->_loop = true;
?> 
                                    <h4>Consulta por:<?php echo $_smarty_tpl->tpl_vars['dato']->value['name_port'];?>
</h4>
                                <?php } ?> 
                                </div>
                                <div class="form-group has-success">
                                    <textarea name="comment" form="usrform" class="form-control" placeholder="Detalles de la consulta"></textarea>
                                </div>

                                <div class="text-center">
                                    <button type="button" class="btn btn-default btn-md te">
                                      <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Enviar
                                    </button>
                                    <br>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>

            </div><!--CIERRA PORTFOLIO-->
                    
        

        <hr class="featurette-divider">

<!--SERVICIOS-->

        <div class="featurette" id="services">
           
            <h2 class="featurette-heading">Services
                
            </h2>

            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>

        <hr class="featurette-divider">

<!--CONTACTO-->

        <div class="featurette" id="contacto">
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
                            <?php echo $_smarty_tpl->tpl_vars['dato']->value['tel'];?>

                        
                            <span class="glyphicon glyphicon-phone" aria-hidden="true"></span> 
                            <?php echo $_smarty_tpl->tpl_vars['dato']->value['tel'];?>

                        
                            <span class="glyphicon glyphicon-home" aria-hidden="true"></span> 
                            <?php echo $_smarty_tpl->tpl_vars['dato']->value['dir'];?>

                        </p>

                        <br>
                        <h3><span class="glyphicon glyphicon-globe" aria-hidden="true"></span> 
                            Redes Sociales
                        </h3>
                        <a href="http://<?php echo $_smarty_tpl->tpl_vars['dato']->value['face'];?>
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

<!--COMENTARIOS-->
       
        <div class="featurette" id="comentarios">
            <h2 class="featurette-heading">Comentarios</h2>

        <div class="row">
                <div class="col-md-8">
                    <p >Para comentar, por favor <a href="#" data-toggle="modal" data-target="#loguearse">ingrese</a> a su cuenta.
            Si aún no se encuentra registrado, ingrese  <a href="#nada" rel="registrarse" data-content='' data-placement="">aquí</a></p> 
                </div>
            </div>

        <!--NUEVO COMENTARIO-->
        <form id="formComments" class="appnitro"  method="post" action="">
            <div class="row">
                <div class="col-md-1 text-center">
                    <img src="./images/anonimo.jpg" class="icon_user_comentario">
                </div>
                <div class="col-md-5">
                    <select name= "new_id_user">
                      <?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value){
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
                        <option id="new_id_user" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['id_user'];?>
"><?php echo $_smarty_tpl->tpl_vars['user']->value['name_user'];?>
</option>
                      <?php } ?>
                    </select>
                    <h4>nombre dice:</h4>
                    <input class="form-control" placeholder="Agregar Comentario" id="new_comentario" name= "new_comentario" class="element text" value=""/>
                    <input id="saveForm" class="button_text" type="submit" name="saveForm" value="Comentar" />   
                </div>       
            </div>
        </form> 
        
    
        <!--LISTA DE COMENTARIOS-->
            <?php  $_smarty_tpl->tpl_vars['dato'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dato']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comentario']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dato']->key => $_smarty_tpl->tpl_vars['dato']->value){
$_smarty_tpl->tpl_vars['dato']->_loop = true;
?>
             <div class="row" >
                <div class="col-md-1 text-center">
                    <img src="./images/<?php echo $_smarty_tpl->tpl_vars['dato']->value['img_user'];?>
" class="icon_user_comentario">
                    <p><?php echo $_smarty_tpl->tpl_vars['dato']->value['fecha'];?>
</p>
                </div>
                <div class="col-md-6">
                    <h4><?php echo $_smarty_tpl->tpl_vars['dato']->value['name_user'];?>
 dijo:</h4>
                    <p><?php echo $_smarty_tpl->tpl_vars['dato']->value['comentario'];?>
</p>
                </div>
            </div>    
            <?php } ?>
      
        <!--FORMULARIO DE REGISTRARSE-->
            <div class="row">
                <div class="col-md-12">
                    <div id="registro-content" style="display: none" >
                        <div class="container-fluid">
                            
                            <h4>Complete sus datos...</h4>
            
                            <form id="formComments" class="appnitro form-horizontal"  method="post" action="">
            
                                <div class="form-group">
                                    <div class=" text-center">
                                        <img src="./images/anonimo.jpg"class="img_user">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <input id="name_user" name= "new_name_user" class="form-control" placeholder="Nombre" maxlength="20" value=""/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <input id="pass" name= "new_pass" class="form-control" type="password" placeholder="Contraseña" maxlength="20" value=""/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <input id="email" name= "new_email" class="form-control" placeholder="Email" maxlength="200" value=""/>
                                    </div>
                                </div>
                   
                            <!-- Indicates a successful or positive action -->
                                <div class="text-center">
                                    <input id="saveForm" class="btn btn-success" type="submit" name="saveForm" value="Listo!" />
                                </div>
                            </form>
                            <p style="color:grey";><br>Bases y condiciones</p>    
                        </div>
                    </div>
                </div>
            </div>
                    </div>
                    
                </div>
            </div>
        </div>

        <hr class="featurette-divider">

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>