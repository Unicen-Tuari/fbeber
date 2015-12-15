<?php /* Smarty version Smarty-3.1.14, created on 2015-12-13 20:46:42
         compiled from "./templates/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27204568056544375d56c77-35607370%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a4f6f0d327fc7bc3ea86f63906a1bf934ca50c7' => 
    array (
      0 => './templates/footer.tpl',
      1 => 1449886422,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27204568056544375d56c77-35607370',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_56544375d59798_98487945',
  'variables' => 
  array (
    'informacion' => 0,
    'dato' => 0,
    'usuario' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56544375d59798_98487945')) {function content_56544375d59798_98487945($_smarty_tpl) {?><div class="col-md-12 bordes text-center black">
        <div class="col-md-3 text-center">
          <a data-container="body" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">¿Quienes Somos?</a><br>
<a type="submit" data-toggle="modal" data-target="#myModal2">Consultar</a>        </div>
        <div class="col-md-6 text-center">
          Programación Web II || Florencia Beber || 2015
        </div>
        <div class="col-md-3 text-center">
            <?php  $_smarty_tpl->tpl_vars['dato'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dato']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['informacion']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dato']->key => $_smarty_tpl->tpl_vars['dato']->value){
$_smarty_tpl->tpl_vars['dato']->_loop = true;
?> 
              <span class="glyphicon glyphicon-phone" aria-hidden="true"> <?php echo $_smarty_tpl->tpl_vars['dato']->value['email_info'];?>
</span><br>
               <span class="glyphicon glyphicon-phone-alt" aria-hidden="true"> <?php echo $_smarty_tpl->tpl_vars['dato']->value['tel_info'];?>
</span>
            <?php } ?>
        </div>
        
    </div>
</div>      


<!-- Modal 2-->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><h4 class="text-center"><span class="glyphicon glyphicon-send" aria-hidden="true"></span> Envíe su consulta...</h4></h4>
      </div>
      <div class="modal-body">
        <?php echo $_smarty_tpl->getSubTemplate ("contacto.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

      </div>
      
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">
            <img src="./images/images-sys/smartkinlogo.png" width="60%;">

        </h4>
      </div>
      <div class="modal-body">
        <?php if (!isset($_smarty_tpl->tpl_vars['usuario']->value)){?>
      <form action="index.php?action=agregar_usuario" method="POST" enctype="multipart/form-data">
            <h4>Complete sus datos:</h4>
            <input type="text" class="form-control" id="new_email" name="new_email" placeholder="Correo Electrónico"> 
            <input type="text" class="form-control" id="new_name" name="new_name" placeholder="Nombre de Usuario"> 
            <input type="password" class="form-control" id="new_pass" name="new_pass" placeholder="Contraseña"> 
            
              
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-success">Listo!</button>       
      </div>
      </form>

<?php }?>
    </div>
  </div>
</div>
    <!-- jQuery -->
    <script src="js/jquery-1.10.0.min.js"></script>
    <script type="text/javascript" src="js/index.js"></script>
    <script src="./js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="./js/bootstrap.js"></script>

    <!-- Main -->
    <script src="./js/main.js"></script>
    <script src="./js/index.js"></script>
    

    
</body>

</html>

<?php }} ?>