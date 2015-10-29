<?php /* Smarty version Smarty-3.1.14, created on 2015-10-23 02:12:08
         compiled from "./templates/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:370468296561cf8adc8dc28-63856092%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a4f6f0d327fc7bc3ea86f63906a1bf934ca50c7' => 
    array (
      0 => './templates/footer.tpl',
      1 => 1445559127,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '370468296561cf8adc8dc28-63856092',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_561cf8adc9cb97_21051107',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561cf8adc9cb97_21051107')) {function content_561cf8adc9cb97_21051107($_smarty_tpl) {?>
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

</html><?php }} ?>