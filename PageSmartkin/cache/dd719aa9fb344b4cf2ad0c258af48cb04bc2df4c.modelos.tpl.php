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
    '97c13ae6868bbc459509c9f1b968154acd23eecc' => 
    array (
      0 => './templates/header.tpl',
      1 => 1412603229,
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
  'nocache_hash' => '115092545554329a996fad10-73981542',
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54329d60050d68_37519740',
  'has_nocache_code' => false,
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54329d60050d68_37519740')) {function content_54329d60050d68_37519740($_smarty_tpl) {?><!DOCTYPE html>
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
<b>Notice</b>:  Undefined index: categoria in <b>/opt/lampp/htdocs/smartkin/templates_c/97c13ae6868bbc459509c9f1b968154acd23eecc.file.header.tpl.cache.php</b> on line <b>73</b><br />
<br />
<b>Notice</b>:  Trying to get property of non-object in <b>/opt/lampp/htdocs/smartkin/templates_c/97c13ae6868bbc459509c9f1b968154acd23eecc.file.header.tpl.cache.php</b> on line <b>73</b><br />
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
            
                        <button class="btn" data-toggle="modal" data-target="#myModal">
            <img class="img-hover" src="./images/catalogo/modelo1.jpg">
            </button>

            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
                    <h4 class="modal-title" id="myModalLabel">modelo1</h4>
                  </div>
                  
                  <div class="modal-body">
                    
                    <!-- Elastislide Carousel --> 
                   
                        <a href="./consulta_modelos.php">
                        <img class="img-hover" src="./images/catalogo/dispositivo1.jpg" height="100%">
                        dispositivo1
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
                        <button class="btn" data-toggle="modal" data-target="#myModal">
            <img class="img-hover" src="./images/catalogo/modelo2.jpg">
            </button>

            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
                    <h4 class="modal-title" id="myModalLabel">modelo2</h4>
                  </div>
                  
                  <div class="modal-body">
                    
                    <!-- Elastislide Carousel --> 
                   
                        <a href="./consulta_modelos.php">
                        <img class="img-hover" src="./images/catalogo/dispositivo2.jpg" height="100%">
                        dispositivo2
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
                        <button class="btn" data-toggle="modal" data-target="#myModal">
            <img class="img-hover" src="./images/catalogo/modelo3.jpg">
            </button>

            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
                    <h4 class="modal-title" id="myModalLabel">modelo3</h4>
                  </div>
                  
                  <div class="modal-body">
                    
                    <!-- Elastislide Carousel --> 
                   
                        <a href="./consulta_modelos.php">
                        <img class="img-hover" src="./images/catalogo/dispositivo3.jpg" height="100%">
                        dispositivo3
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
                        <button class="btn" data-toggle="modal" data-target="#myModal">
            <img class="img-hover" src="./images/catalogo/modelo4.jpg">
            </button>

            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
                    <h4 class="modal-title" id="myModalLabel">modelo4</h4>
                  </div>
                  
                  <div class="modal-body">
                    
                    <!-- Elastislide Carousel --> 
                   
                        <a href="./consulta_modelos.php">
                        <img class="img-hover" src="./images/catalogo/dispositivo4.jpg" height="100%">
                        dispositivo4
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
                        <button class="btn" data-toggle="modal" data-target="#myModal">
            <img class="img-hover" src="./images/catalogo/modelo5.jpg">
            </button>

            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
                    <h4 class="modal-title" id="myModalLabel">modelo5</h4>
                  </div>
                  
                  <div class="modal-body">
                    
                    <!-- Elastislide Carousel --> 
                   
                        <a href="./consulta_modelos.php">
                        <img class="img-hover" src="./images/catalogo/dispositivo5.jpg" height="100%">
                        dispositivo5
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
                        <button class="btn" data-toggle="modal" data-target="#myModal">
            <img class="img-hover" src="./images/catalogo/modelo6.jpg">
            </button>

            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
                    <h4 class="modal-title" id="myModalLabel">modelo6</h4>
                  </div>
                  
                  <div class="modal-body">
                    
                    <!-- Elastislide Carousel --> 
                   
                        <a href="./consulta_modelos.php">
                        <img class="img-hover" src="./images/catalogo/dispositivo6.jpg" height="100%">
                        dispositivo6
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
                        <button class="btn" data-toggle="modal" data-target="#myModal">
            <img class="img-hover" src="./images/catalogo/modelo7.jpg">
            </button>

            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
                    <h4 class="modal-title" id="myModalLabel">modelo7</h4>
                  </div>
                  
                  <div class="modal-body">
                    
                    <!-- Elastislide Carousel --> 
                   
                        <a href="./consulta_modelos.php">
                        <img class="img-hover" src="./images/catalogo/dispositivo7.jpg" height="100%">
                        dispositivo7
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
                        <button class="btn" data-toggle="modal" data-target="#myModal">
            <img class="img-hover" src="./images/catalogo/modelo8.jpg">
            </button>

            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
                    <h4 class="modal-title" id="myModalLabel">modelo8</h4>
                  </div>
                  
                  <div class="modal-body">
                    
                    <!-- Elastislide Carousel --> 
                   
                        <a href="./consulta_modelos.php">
                        <img class="img-hover" src="./images/catalogo/dispositivo8.jpg" height="100%">
                        dispositivo8
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
                        <button class="btn" data-toggle="modal" data-target="#myModal">
            <img class="img-hover" src="./images/catalogo/modelo9.jpg">
            </button>

            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
                    <h4 class="modal-title" id="myModalLabel">modelo9</h4>
                  </div>
                  
                  <div class="modal-body">
                    
                    <!-- Elastislide Carousel --> 
                   
                        <a href="./consulta_modelos.php">
                        <img class="img-hover" src="./images/catalogo/dispositivo9.jpg" height="100%">
                        dispositivo9
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
                        <button class="btn" data-toggle="modal" data-target="#myModal">
            <img class="img-hover" src="./images/catalogo/modelo10.jpg">
            </button>

            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
                    <h4 class="modal-title" id="myModalLabel">modelo10</h4>
                  </div>
                  
                  <div class="modal-body">
                    
                    <!-- Elastislide Carousel --> 
                   
                        <a href="./consulta_modelos.php">
                        <img class="img-hover" src="./images/catalogo/dispositivo10.jpg" height="100%">
                        dispositivo10
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
                        <button class="btn" data-toggle="modal" data-target="#myModal">
            <img class="img-hover" src="./images/catalogo/modelo11.jpg">
            </button>

            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
                    <h4 class="modal-title" id="myModalLabel">modelo11</h4>
                  </div>
                  
                  <div class="modal-body">
                    
                    <!-- Elastislide Carousel --> 
                   
                        <a href="./consulta_modelos.php">
                        <img class="img-hover" src="./images/catalogo/dispositivo11.jpg" height="100%">
                        dispositivo11
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
                        <button class="btn" data-toggle="modal" data-target="#myModal">
            <img class="img-hover" src="./images/catalogo/modelo12.jpg">
            </button>

            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
                    <h4 class="modal-title" id="myModalLabel">modelo12</h4>
                  </div>
                  
                  <div class="modal-body">
                    
                    <!-- Elastislide Carousel --> 
                   
                        <a href="./consulta_modelos.php">
                        <img class="img-hover" src="./images/catalogo/dispositivo12.jpg" height="100%">
                        dispositivo12
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