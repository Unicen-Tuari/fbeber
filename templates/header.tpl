<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="images/icono2.png"/> 
    <title>Gimnasio | Sitio Oficial</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">

  </head>
  <body  class="text-center">
    <div class="col-md-1 icono">
      <img src="images/icono2.png" width="120px;">
    </div>

     <nav class="navbar navbar-default navegador">
      <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a id="home" href="#">Inicio</a></li>
            <li><a id="actividades" href="#">Actividades</a></li>
            <li><a id="nosotros" href="#">Nosotros</a></li>
            <li><a id="contacto" href="#">Contacto</a></li>
            {if isset($usuario)}<li><a id="contacto" href="#">Mis Datos</a></li>{/if}
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    <div class="redes text-center">
      <a href=""><img  class="zoom" src="images/redes/fb-color.png" width="25px;"></a>
      <a href=""><img class="zoom" src="images/redes/tw-color.png" width="25px;"></a>
      <a href=""><img class="zoom" src="images/redes/google-color.png" width="25px;"></a>
      <a href=""><img class="zoom" src="images/redes/inst-color.png" width="25px;"></a>
      {if isset($usuario)}
        <b>Hola {$usuario[0].apyno}! </b><a id="logout" href="#"><span class="label label-info">Salir</span></a>
      {else}    
        <a href="login.php"><span class="label label-warning">Iniciar Sesión / Registrarse</span></a><br>
      {/if} 
      
      
    </div>

