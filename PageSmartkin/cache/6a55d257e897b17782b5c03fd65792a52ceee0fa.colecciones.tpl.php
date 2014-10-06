<?php /*%%SmartyHeaderCode:160651897354329a8a39af45-73367269%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a55d257e897b17782b5c03fd65792a52ceee0fa' => 
    array (
      0 => './templates/colecciones.tpl',
      1 => 1412521577,
      2 => 'file',
    ),
    '97c13ae6868bbc459509c9f1b968154acd23eecc' => 
    array (
      0 => './templates/header.tpl',
      1 => 1412601383,
      2 => 'file',
    ),
    '8a1c9fc409d38d4abea41978e01399b62d2cc405' => 
    array (
      0 => './templates/lateral.tpl',
      1 => 1412204617,
      2 => 'file',
    ),
    '3a4f6f0d327fc7bc3ea86f63906a1bf934ca50c7' => 
    array (
      0 => './templates/footer.tpl',
      1 => 1412202788,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '160651897354329a8a39af45-73367269',
  'variables' => 
  array (
    'nombre_coleccion' => 0,
    'img_coleccion' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54329a8a9739f6_83926725',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54329a8a9739f6_83926725')) {function content_54329a8a9739f6_83926725($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Smartkin</title>

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/elastislide.css" />
    <link rel="stylesheet" type="text/css" href="css/modern-business.css">

</head>

<body>

    <!-- Nav -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
    
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Smartkin</a>
            </div>
            
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Categor&iacute;as<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <br />
<b>Notice</b>:  Undefined index: nombre_categoria in <b>/opt/lampp/htdocs/smartkin/templates_c/97c13ae6868bbc459509c9f1b968154acd23eecc.file.header.tpl.cache.php</b> on line <b>74</b><br />
<br />
<b>Notice</b>:  Trying to get property of non-object in <b>/opt/lampp/htdocs/smartkin/templates_c/97c13ae6868bbc459509c9f1b968154acd23eecc.file.header.tpl.cache.php</b> on line <b>74</b><br />
                            </li> 
                        </ul>
                    </li>

                    <li>
                        <a href="contacto.php">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    
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
                        
                <a href="./modelos.php">coleccion1

                <!-- Elastislide Carousel -->
                        
                            <img class="img-responsive img-hover" src="./images/catalogo/coleccion1.jpg">
                        
                </a>
                        
                <a href="./modelos.php">coleccion2

                <!-- Elastislide Carousel -->
                        
                            <img class="img-responsive img-hover" src="./images/catalogo/coleccion2.jpg">
                        
                </a>
                        
                <a href="./modelos.php">coleccion3

                <!-- Elastislide Carousel -->
                        
                            <img class="img-responsive img-hover" src="./images/catalogo/coleccion3.jpg">
                        
                </a>
                        
                <a href="./modelos.php">coleccion4

                <!-- Elastislide Carousel -->
                        
                            <img class="img-responsive img-hover" src="./images/catalogo/coleccion4.jpg">
                        
                </a>
                        
                <a href="./modelos.php">coleccion5

                <!-- Elastislide Carousel -->
                        
                            <img class="img-responsive img-hover" src="./images/catalogo/coleccion5.jpg">
                        
                </a>
                        
                <a href="./modelos.php">coleccion6

                <!-- Elastislide Carousel -->
                        
                            <img class="img-responsive img-hover" src="./images/catalogo/coleccion6.jpg">
                        
                </a>
                    </div>
        <!-- /.row -->

            <div class="col-md-4">

                <div class="well">
                    <h4>Buscar</h4>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button"><i class="fa fa-search"></i>Go!</button>
                        </span>
                    </div>
                    <!-- /.input-group -->
                </div>

                <div class="well">
                    <h4>Categor&iacute;as</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <br />
<b>Notice</b>:  Undefined index: nombre_categoria in <b>/opt/lampp/htdocs/smartkin/templates_c/8a1c9fc409d38d4abea41978e01399b62d2cc405.file.lateral.tpl.cache.php</b> on line <b>46</b><br />
<br />
<b>Notice</b>:  Trying to get property of non-object in <b>/opt/lampp/htdocs/smartkin/templates_c/8a1c9fc409d38d4abea41978e01399b62d2cc405.file.lateral.tpl.cache.php</b> on line <b>46</b><br />
                            </ul>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
            </div>
        </div>
        <!-- /.row -->        
<!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p class="text-center">Florencia Beber | 2014 | Programaci&oacute;n Web 2</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>
    
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    
    <!-- Script Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //velocidad de cambio
    })
    </script>

    <script src="js/modernizr.custom.17475.js"></script>
    
    <!-- Script elastislide -->
    <script type="text/javascript" src="js/jquery.elastislide.js"></script>
    
    <script type="text/javascript">    
        $( '#carousel' ).elastislide( {
                minItems : 2
            } );
    </script>

    </body>
</html><?php }} ?>