<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Smartkin</title>
     <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/one-page-wonder.css" rel="stylesheet">

    <link rel="icon" type="image/jpg" href="./images/fb.jpg"/>
</head>

<body onload="ocultar();">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top " role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <a class="navbar-brand" href="#inicio">
                    <img src="./images/smartkinlogo.png" width="35%">
                </a> 
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#inicio">Inicio</a>
                    </li>
                    <li class="dropdown">
                        <a id="dLabel"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Galerías
                        </a>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                       {foreach $categoria as $nombre}
                            <li>
                                <a href="#galerias" onClick = "getColeccion({$nombre.id_cat});">{$nombre.id_cat}</a>
                            </li>
                        {/foreach}
                        </ul>
                    </li>
                    <li>
                    </li>
                    <li class="dropdown">
                        <a href="#app" style="color:violet">Haz tu propio diseño!!</a>
                    </li>
                    <li class="dropdown">
                        <a href="#portfolio">Portfolio</a>
                    </li>
                    <li>
                        <a href="#services">Otros trabajos</a>
                    </li>
                 
                    <li>
                        <a href="#contacto">Contacto</a>
                    </li>
                    <li>
                        <div id="popover-content" style="display: none" >
                            <div class="container-fluid">
                            <div class="row">
                                <label id="sample">                                    
                                    <p class="lead text-center">
                                    <a href="#" data-toggle="modal" data-target="#loguearse">Ingresar</a>
                                        <img src="./images/anonimo.jpg" class="icono_user"> 
                                        Nombre
                                    </p>   
                                    <div class="form-group text-center">
                                    <button type="button" class="btn btn-default btn-sm">
                                      <span class="glyphicon glyphicon-picture" aria-hidden="true"></span> 
                                      Mi sesión
                                    </button>
                                    </div>
                                    <div class="form-group text-center">
                                        <button type="button" class="btn btn-danger">Salir</button>
                                    </div>
                                </div> 
                            </div>
                        </div>

                    <a href="#nada" rel="popover" data-content='' data-placement="">Mi sesión</a>
                 </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


    
