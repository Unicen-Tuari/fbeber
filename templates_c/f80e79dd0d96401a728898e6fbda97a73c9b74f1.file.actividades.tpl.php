<?php /* Smarty version Smarty-3.1.14, created on 2016-10-11 01:29:49
         compiled from ".\templates\actividades.tpl" */ ?>
<?php /*%%SmartyHeaderCode:787057f6759a91d962-33289416%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f80e79dd0d96401a728898e6fbda97a73c9b74f1' => 
    array (
      0 => '.\\templates\\actividades.tpl',
      1 => 1476142188,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '787057f6759a91d962-33289416',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_57f6759aaaff44_64661481',
  'variables' => 
  array (
    'actividades' => 0,
    'actividad' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57f6759aaaff44_64661481')) {function content_57f6759aaaff44_64661481($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="col-md-12">
    
    
    <div class="col-md-12">
    <h1>Actividades</h1>
    <br>
    <!--todas las actividades-->
    <?php  $_smarty_tpl->tpl_vars['actividad'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['actividad']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['actividades']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['actividad']->key => $_smarty_tpl->tpl_vars['actividad']->value){
$_smarty_tpl->tpl_vars['actividad']->_loop = true;
?>
    <div class="col-md-3">
        <div class="promocion3">
          <img src="images/actividades/<?php echo $_smarty_tpl->tpl_vars['actividad']->value['foto'];?>
" alt="..." class="img-circle" width="100px" height="100px">
          <h3><?php echo $_smarty_tpl->tpl_vars['actividad']->value['nombre'];?>
</h3>
          <button class="btn btn-success" type="button" data-toggle="modal" data-target="#inscripcion">Inscribirse</button>
          <p><?php echo $_smarty_tpl->tpl_vars['actividad']->value['descripcion'];?>
</p>
          <button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="right" data-content="<?php echo $_smarty_tpl->tpl_vars['actividad']->value['id_profesor'];?>
">Ver Profesores</button>
        </div>
      </div>
    <?php } ?>
    </div> 
</div>

<!--Formulario de inscripcion-->
<div class="modal fade" id="inscripcion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Inscripción A FUTURO</h4>
      </div>
      <div class="modal-body">
      <h1>NO FUNCIONA AÚN! :)</h1>
        <h5>Complete el siguiente formulario</h5>
        <input id="nombre-user" class="form-control" type="text" maxlength="20" placeholder="Nombre y Apellido"><br>
        <input id="edad-user" class="form-control" type="text" maxlength="200" placeholder="Edad"><br>
        <input id="telefono-user" class="form-control" type="text" maxlength="200" placeholder="Teléfono"><br>
        <input id="email-user" class="form-control" type="text" maxlength="200" placeholder="Correo Electrónico"><br>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
        <button id="inscribirse" type="button" class="btn btn-success">Inscribirse</button>
      </div>
    </div>
  </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>