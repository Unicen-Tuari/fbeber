<?php /* Smarty version Smarty-3.1.14, created on 2016-11-23 14:09:07
         compiled from ".\templates\actividades.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1262158358a6aac0624-96589722%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f80e79dd0d96401a728898e6fbda97a73c9b74f1' => 
    array (
      0 => '.\\templates\\actividades.tpl',
      1 => 1479906545,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1262158358a6aac0624-96589722',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_58358a6adaa852_15650939',
  'variables' => 
  array (
    'actividades' => 0,
    'actividad' => 0,
    'imagen' => 0,
    'usuario' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58358a6adaa852_15650939')) {function content_58358a6adaa852_15650939($_smarty_tpl) {?><div class="col-md-12">
<h1>Actividades</h1><br>
    <!--todas las actividades-->
<?php  $_smarty_tpl->tpl_vars['actividad'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['actividad']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['actividades']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['actividad']->key => $_smarty_tpl->tpl_vars['actividad']->value){
$_smarty_tpl->tpl_vars['actividad']->_loop = true;
?>
<?php if ($_smarty_tpl->tpl_vars['actividad']->value['id']!=1){?>
  <div class="col-md-4">
  <div class="promocion3">
    <h3><?php echo $_smarty_tpl->tpl_vars['actividad']->value['nombre'];?>
</h3>
    <div class="col-md-12 text-center">

    <?php  $_smarty_tpl->tpl_vars['imagen'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['imagen']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['actividad']->value['imagenes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['imagen']->key => $_smarty_tpl->tpl_vars['imagen']->value){
$_smarty_tpl->tpl_vars['imagen']->_loop = true;
?>
    <img src="images/<?php echo $_smarty_tpl->tpl_vars['imagen']->value['foto'];?>
" class="zoom" width="80px" height="80px">
    <?php } ?>  

    </div>
    <div class="col-md-12" style="height: 100px"><p><br><?php echo $_smarty_tpl->tpl_vars['actividad']->value['descripcion'];?>
</p></div>
    <h4>..............</h4>
    <h5>Déjenos su puntaje y un comentario</h5>
    <?php if (isset($_smarty_tpl->tpl_vars['usuario']->value)){?>
        <form id="agregar_com" method="POST" enctype="multipart/form-data">
        <input type="hidden" class="form-control" id="new_idAct_c" name="new_idAct_c" value="<?php echo $_smarty_tpl->tpl_vars['actividad']->value['id'];?>
">
        <input type="hidden" class="form-control" id="new_idUser_c" name="new_idUser_c" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value[0]['id'];?>
">
        <div class="col-md-12">
        <div class="col-md-10"><input type="text" class="col-md-8 form-control" id="new_comentario" name="new_comentario" placeholder="Agregue su comentario">
        Su puntaje:
        <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->value = 1;
  if ($_smarty_tpl->tpl_vars['i']->value<=5){ for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value<=5; $_smarty_tpl->tpl_vars['i']->value++){
?> <input type="radio" name="new_puntaje" value='<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
' id="new_puntaje"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
<?php }} ?>
        </div>
        <div class="col-md-2 text-left"><a class="btn btn-success" href="#" onclick="agregaComentario()">Listo</a>
        </div></div>
        </form>
    <?php }else{ ?>
      Para comentar es necesario estar registrado: <a href="login.php"><span class="label label-warning">Iniciar Sesión / Registrarse</span></a>
    <?php }?>
    <h4>..............</h4>
    <button id="id_act_c" onClick = "cargaComentarios(<?php echo $_smarty_tpl->tpl_vars['actividad']->value['id'];?>
);" class="btn btn-success" type="button" data-toggle="modal" data-target="#comentarios">Comentarios</button>
    <button id="id_actividad" onClick = "cargaProfesores(<?php echo $_smarty_tpl->tpl_vars['actividad']->value['id'];?>
);" class="btn btn-info" type="button" data-toggle="modal" data-target="#horarios">Horarios e Inscripción</button> 
  </div>
  </div>
  <?php }?>
  <?php } ?>
  </div> 
  </div>

<!-- Modal dias y horarios-->
<div class="modal fade" id="horarios" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><h3>Horarios e Inscripciones</h3>
        <div id="tableProfesores" class="modal-body"></div>
      </div>
    </div>
  </div>
</div>
<!-- Modal comentarios-->
<div class="modal fade" id="comentarios" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><h3>Comentarios</h3>
        <div id="tableComentarios" class="modal-body"></div>     
      </div>
    </div>
  </div>
</div>


<?php }} ?>