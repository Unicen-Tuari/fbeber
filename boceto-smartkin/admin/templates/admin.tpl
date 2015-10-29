<!--INICIO-->
        {include file="header.tpl"}    

        <h1>Administrador</h1>
        <h3>Panel de Control</h3>
        
        <div class="col-md-12">
        <ul class="nav nav-tabs tab_container">
            <li>
                <a data-toggle="tab" href="#tablaslides" id="tab_slides">Slides</a>
            </li>
                
            <li>
                <a data-toggle="tab" href="#tablaportfolios" id="tab_portfolios">Portfolios</a>
            </li>
            
            <li>
                <a data-toggle="tab" href="#tablacolecciones" id="tab_colecciones">Colecciones</a>
            </li>
            
            <li>
                <a data-toggle="tab" href="#tablausuarios" id="tab_usuarios">Usuarios</a>
            </li>
            
            <li>
               <a data-toggle="tab" href="#tablacomentarios" id="tab_comentarios">Comentarios</a>
            </li>

            <li>
               <a data-toggle="tab" href="#tablainformacion" id="tab_informacion">Información</a>
            </li>
                    
        </ul>
        </div>
        

        <div class="row text-center">
            <div class="col-lm-12">
                <div class="tab-content">
                    <div class="tab-pane fade" id="tablaslides">
                    {include file="admin_slides.tpl"}
                    </div>
                    <div class="tab-pane fade" id="tablaportfolios">
                    {include file="admin_portfolios.tpl"}
                    </div>
                     <div class="tab-pane fade" id="tablacolecciones">
                    {include file="admin_colecciones.tpl"}
                    </div>
                    <div class="tab-pane fade" id="tablausuarios">
                    {include file="admin_usuarios.tpl"}
                    </div>
                     <div class="tab-pane fade" id="tablacomentarios">
                    {include file="admin_comentarios.tpl"}
                    </div>
                     <div class="tab-pane fade" id="tablainformacion">
                    {include file="admin_informacion.tpl"}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal_emergente">
        <div class="modal-dialog">
            <div class="modal-content" id="modal_body">
            </div>
        </div>
    </div>




        <!-- Footer -->
<div class="bordes col-lg-12">
    <div class="page-header"></div>
    <p class="text-center"><img src="./images/fb.jpg" width="40px"> FB Diseño & Diagramación | 2015 Copyright &copy; | 
    <a href="../index.php">Ir a Smartkin</a>
    </p>
</div>

<!-- Modal login-->
<div class="modal fade" id="loguearse" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header text-center">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <img src="./images/smartkinlogo.png" width="80%">
      </div>
      <div class="modal-body text-center">
        <h4>Bienvenido!</h4>
      <!--INICIO DE SESION-->  
        <form id="formComments" class="appnitro form-horizontal"  method="post" action="">
            <div class="form-group text-center">
                <div class="col-sm-offset-1 col-sm-10">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                </div>
            </div>
                                        
            <div class="form-group text-center">
                <div class="col-sm-offset-1 col-sm-10">
                    <input type="password" class="form-control" id="inputPassword3" placeholder="Contraseña">
                </div>
            </div>
                                                     
            <div class="form-group text-center">
                <div class="col-sm-offset-1 col-sm-10">
                    <button type="button" class="btn btn-info">Entrar</button>
                </div>
            </div>

</div>    <!-- /.container -->

    <!-- jQuery -->
    <script src="./js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="./js/bootstrap.min.js"></script>

    <!-- Main -->
    <script src="./js/main.js"></script>
   
    <script>

    $('a[rel=popover]').popover({
        html: 'true',
    placement: 'bottom',
    content : function() {
        return $('#popover-content').html();
    }
    })

    $('a[rel=registrarse]').popover({
        html: 'true',
    placement: 'rigth',
    content : function() {
        return $('#registro-content').html();
    }
    })

    $('a[rel=consulta_portfolio]').popover({
        html: 'true',
    placement: 'top',
    content : function() {
        return $('#consulta_portfolio').html();
    }
    })
    </script>
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
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
