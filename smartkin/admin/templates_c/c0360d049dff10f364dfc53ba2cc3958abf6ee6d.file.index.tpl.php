<?php /* Smarty version Smarty-3.1.14, created on 2015-11-24 14:09:03
         compiled from "./templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1179966125563612d9bdefc3-48537508%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0360d049dff10f364dfc53ba2cc3958abf6ee6d' => 
    array (
      0 => './templates/index.tpl',
      1 => 1448370541,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1179966125563612d9bdefc3-48537508',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_563612d9c70292_91481228',
  'variables' => 
  array (
    'admin' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_563612d9c70292_91481228')) {function content_563612d9c70292_91481228($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    


	
<?php if (isset($_smarty_tpl->tpl_vars['admin']->value)){?>
    <?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['admin']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value){
$_smarty_tpl->tpl_vars['info']->_loop = true;
?>
        <?php echo $_smarty_tpl->getSubTemplate ("user.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

 
        <h1>INFORMACION</h1>
        <?php echo $_smarty_tpl->getSubTemplate ("admin_informacion.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        
        <h1>USUARIOS</h1>
        <?php echo $_smarty_tpl->getSubTemplate ("admin_usuarios.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        
        <h1>PORTFOLIOS</h1>
        <?php echo $_smarty_tpl->getSubTemplate ("admin_portfolios.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        
        <h1>COLECCIONES</h1>
        <?php echo $_smarty_tpl->getSubTemplate ("admin_colecciones.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        
        <h1>COMENTARIOS</h1>
        <?php echo $_smarty_tpl->getSubTemplate ("admin_comentarios.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <?php } ?>  
<?php }else{ ?>
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

<?php }?>  

        
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
<?php }} ?>