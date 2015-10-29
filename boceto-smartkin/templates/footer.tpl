
        <!-- Footer -->
<div class="bordes col-lg-12">
    <div class="page-header"></div>
    <p class="text-center"><img src="./images/fb.jpg" width="40px"> FB Diseño & Diagramación | 2015 Copyright &copy; | 
    <a href="./admin/admin.php">Administrador</a>
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
</body>

</html>