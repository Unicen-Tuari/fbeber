{include file="header.tpl"}
    


	
{if isset($admin)}
    {foreach $admin as $info}
        {include file="user.tpl"}
 
        <h1>INFORMACION</h1>
        {include file="admin_informacion.tpl"}
        
        <h1>USUARIOS</h1>
        {include file="admin_usuarios.tpl"}
        
        <h1>PORTFOLIOS</h1>
        {include file="admin_portfolios.tpl"}
        
        <h1>COLECCIONES</h1>
        {include file="admin_colecciones.tpl"}
        
        <h1>COMENTARIOS</h1>
        {include file="admin_comentarios.tpl"}
    {/foreach}  
{else}
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

{/if}  

        
    </div> <!-- /container -->

<!-- Footer -->
<div class="bordes col-lg-12">
    <div class="page-header"></div>
    <p class="text-center"><img src="./images/fb.jpg" width="40px"> FB Diseño & Diagramación | 2015 Copyright &copy; | 
    <a href="../index.php">Ir a Smartkin</a>
    </p>
</div>


    <!-- jQuery -->
    <script src="./js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="./js/bootstrap.min.js"></script>

    <!-- Main -->
    <script src="./js/admin.js"></script>
   
    <script src="./js/logout.js"></script>
    <script>
      $(".botonAgregarImagenes").on("click", function(event){
        event.preventDefault();

        var archivos = $("#imagesToUpload").prop('files');

        if(typeof(archivos) == 'undefined'){
          mostrarMensaje("No pusiste imagenes");
          return;
        }

        var datos = new FormData();

        $.each(archivos, function(key,value){
          datos.append(key,value);
        });

        $.ajax({
          type: "POST",
          dataType: "json",
          url: event.target.href,
          data: datos,
          success: function(data){
            alert(data.result);
          },
          error: function(){
            alert("No anduvo la llamada AJAX");
          },
          contentType : false,
          processData : false
        });

      });
    </script>

    
</body>

</html>    
