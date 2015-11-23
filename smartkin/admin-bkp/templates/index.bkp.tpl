{include file="header.tpl"}
    

{if isset($admin)}
		{foreach $admin as $info}
            
            <h1>{$info['name_admin']}</h1>
            <button id="logout" class="btn btn-primary">Logout</button>            
        {/foreach}

        
        <h1>SLIDES</h1>
        {include file="admin_slides.tpl"}
        
        <h1>USUARIOS</h1>
        {include file="admin_usuarios.tpl"}
        
        <h1>PORTFOLIOS</h1>
        {include file="admin_portfolios.tpl"}
        
        <h1>COLECCIONES</h1>
        {include file="admin_colecciones.tpl"}
        
        <h1>COMENTARIOS</h1>
        {include file="admin_comentarios.tpl"}
        
        <h1>INFORMACION</h1>
        {include file="admin_informacion.tpl"}

        

{else}		
	<h1>Por favor inicie sesión</h1>
    <button id="login" class="btn btn-lg btn-primary btn-block" onClick="window.location = 'login.php';">Login</button>
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
