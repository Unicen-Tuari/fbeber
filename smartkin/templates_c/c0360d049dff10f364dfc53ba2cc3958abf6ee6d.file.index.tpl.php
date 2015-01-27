<?php /* Smarty version Smarty-3.1.14, created on 2015-01-26 20:27:04
         compiled from "./templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:91873963454c39de65b4209-69621764%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0360d049dff10f364dfc53ba2cc3958abf6ee6d' => 
    array (
      0 => './templates/index.tpl',
      1 => 1422300421,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '91873963454c39de65b4209-69621764',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54c39de662d2b3_45791559',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c39de662d2b3_45791559')) {function content_54c39de662d2b3_45791559($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
    
  
<!--HEADER-->

    <!-- Full Width Image Header -->
    <header id="inicio">
        <div class="headline">
            <div class="container">
                <img src="images/smartkin9.jpg">
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
            <row id="coleccion"></row>
            
        </div>  

        <hr class="featurette-divider">
        <!--crear la tabla con los modelos-->
              
<!--APP-->
        <div class="featurette" id="app">
            <h2 class="featurette-heading text-center">PROXIMAMENTE!!!!</h2>
            <!-- First Featurette -->
            <div class="text-center">
                <img src="./images/smartkin6.jpg" width="50%">
            </div>
        </div>

        <hr class="featurette-divider">

<!--PORTFOLIO-->
        <div class="featurette" id="portfolio">
            <h2 class="featurette-heading">Portfolio</h2>
            <!-- First Featurette -->
            <div class="featurette">
                <div class="row">
                  <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="..." alt="...">
                        <div class="caption">
                            <h3>Thumbnail label</h3>
                            <p>...</p>
                            <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                        </div>
                    </div>
                </div>
        </div>

        <hr class="featurette-divider">

<!--SERVICIOS-->

        <!-- Second Featurette -->
        <div class="featurette" id="services">
            <img class="featurette-image img-circle img-responsive pull-left" src="http://placehold.it/500x500">
            <h2 class="featurette-heading">Services
                
            </h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>

        <hr class="featurette-divider">

<!--CONTACTO-->

        <!-- Third Featurette -->
        <div class="featurette" id="contacto">
            <h2 class="featurette-heading">Contacto</h2>
            <div class="row">
                <div class="col-md-5" id="info">
                    <p class="text-center">informacion</p>
                </div>
                <div class="col-md-5 text-left">
                     <h3 class="text-center"><span class="glyphicon glyphicon-send" aria-hidden="true"></span> Envie su consulta...</h3><br>
                    <div class="form-group has-success">
                        <h4>Asunto</h4>
                        <input type="text" class="form-control" id="inputSuccess1">
                    </div>
                    <div class="form-group has-success">
                        <h4>Mensaje</h4>
                        <input type="text" class="form-control" id="inputSuccess1">
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

        <!-- Third Featurette -->
        <div class="featurette" id="comentarios">
            <h2 class="featurette-heading">Comentarios</h2>
            <div class="row">
                <div class="col-md-2 text-right">
                    <img src="./images/anonimo.jpg" class="icon_user_comentario">
                </div>
                <div class="col-md-6">
                    <h4>Nombre dijo:</h4>
                    <p>Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
                </div>
            </div>
        </div>

        <hr class="featurette-divider">
    


<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>