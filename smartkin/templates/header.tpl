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

<body>

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
                                <a href="#galerias" class="dropdown-toggle" data-toggle="dropdown">Galerías<span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    {foreach $categorias as $nombre}
                                    <li>
                                      <a onClick = "getColeccion({$nombre.id_cat});">{$nombre.id_cat}</a>
                                    </li>
                                    {/foreach}
                                </ul>
                            </li>
                    <li>
                        <select id="categoria" onChange = "getColeccion();">
                            {foreach $categorias as $categoria}
                                <option value="{$categoria.id_cat}">{$categoria.id_cat}</option>
                            {/foreach}
                        </select>
                    </li>
                    <li class="dropdown">
                        <a href="#app" style="color:green">Haz tu propio diseño!!</a>
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
                            
                                    
                                    <div class="form-group text-right">
                                    <button type="button" class="btn btn-default btn-md text-right">
                                      <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> 
                                    </button>
                                    </div>

                                    <p class="lead text-center">
                                        <img src="./images/anonimo.jpg" class="icono_user"> 
                                        <br>
                                        Nombre
                                    </p>   
                                    <div class="form-group text-center">
                                    <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#disenios">
                                      <span class="glyphicon glyphicon-picture" aria-hidden="true"></span> 
                                      Mi sesión
                                    </button>
                                    </div>


                                    <div class="form-group text-center">
                                        <button type="button" class="btn btn-danger">Salir</button>
                                    </div>


                                <!--INICIO DE SESION-->  
                                     ----------------
                                        <div class="form-group">
                                        <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#disenios">
                                      <span class="glyphicon glyphicon-picture" aria-hidden="true"></span> Mis Diseños
                                    </button>
                                            
                                            <div class="col-sm-12">
                                                <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <input type="password" class="form-control" id="inputPassword3" placeholder="Contraseña">
                                            </div>
                                        </div>
                                                     
                                        <div class="form-group text-center">
                                            <div class="col-sm-offset-1 col-sm-8">
                                                <button type="button" class="btn btn-info">Entrar</button>
                                                <p class="text-center">ó<br> 
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">
                                                      Registrarse
                                                    </button>
                                                </p>
                                            </div>
                                        </div>
                                    </form>
                                </label>
                            </div>
                        </div> 
                        </div>

                    <a href="#nada" rel="popover" data-content='' data-placement="">Login</a>
                 </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


    
