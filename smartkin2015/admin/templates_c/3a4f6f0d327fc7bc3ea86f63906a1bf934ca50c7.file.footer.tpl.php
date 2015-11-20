<?php /* Smarty version Smarty-3.1.14, created on 2015-11-19 20:35:03
         compiled from "./templates/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18427446895638b91e4f4629-93978145%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a4f6f0d327fc7bc3ea86f63906a1bf934ca50c7' => 
    array (
      0 => './templates/footer.tpl',
      1 => 1447959844,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18427446895638b91e4f4629-93978145',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5638b91e509be4_22121702',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5638b91e509be4_22121702')) {function content_5638b91e509be4_22121702($_smarty_tpl) {?><!-- Footer -->
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