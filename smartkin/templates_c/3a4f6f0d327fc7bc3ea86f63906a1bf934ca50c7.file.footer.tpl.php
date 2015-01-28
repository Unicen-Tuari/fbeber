<?php /* Smarty version Smarty-3.1.14, created on 2015-01-28 04:38:47
         compiled from "./templates/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:101746450354c53918b11f53-52885139%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a4f6f0d327fc7bc3ea86f63906a1bf934ca50c7' => 
    array (
      0 => './templates/footer.tpl',
      1 => 1422416326,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '101746450354c53918b11f53-52885139',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54c53918b189d2_97786441',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c53918b189d2_97786441')) {function content_54c53918b189d2_97786441($_smarty_tpl) {?>        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p class="text-center"><img src="./images/fb.jpg" width="45px">  Copyright &copy; FB 2015</p>
                </div>
            </div>
        </footer>

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
            <br><br>

            <p style="color:grey">*Si usted no posee una cuenta en nuestro sistema, puede registrarse de manera muy simple haciendo un click <a onclick="ocultar();">aquí</a>.</p>
          
            <div id="ocultar">
                <div class="modal-body">
                    <h4>Complete sus datos...</h4>
            
                    <form id="formComments" class="appnitro form-horizontal"  method="post" action="">
            
                    <div class="form-group">
                        <div class=" text-center">
                            <img src="./images/anonimo.jpg" width="95%" class="img_user">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-1 control-label">
                            <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                        </label>
                        <div class="col-sm-8">
                            <input id="name_user" name= "new_name_user" class="form-control" placeholder="Nombre" maxlength="20" value=""/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-1 control-label">
                            <span class="glyphicon glyphicon-lock" aria-hidden="true"></span>
                        </label>
                        <div class="col-sm-8">
                            <input id="pass" name= "new_pass" class="form-control" type="password" placeholder="Contraseña" maxlength="20" value=""/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-1 control-label">
                            <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                        </label>
                        <div class="col-sm-8">
                            <input id="email" name= "new_email" class="form-control" placeholder="Email" maxlength="200" value=""/>
                        </div>
                    </div>
                  
                    <div class="text-center">
                    <input id="saveForm" class="btn btn-success" type="submit" name="saveForm" value="Listo!" />
                    </div>
                    </form>                
                </div>
            </div>
            <p class="text-center" style="color:grey">Muchas Gracias por confiar en nosotros.</p>
        </div>
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

</html><?php }} ?>