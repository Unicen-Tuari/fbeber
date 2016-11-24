<?php /* Smarty version Smarty-3.1.14, created on 2016-11-23 23:48:21
         compiled from ".\templates\contacto.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1259258359039178792-45405647%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '466dcc33a567cd1e7c81f5bde835247db88df2dd' => 
    array (
      0 => '.\\templates\\contacto.tpl',
      1 => 1479941297,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1259258359039178792-45405647',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_58359039237e43_84029780',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58359039237e43_84029780')) {function content_58359039237e43_84029780($_smarty_tpl) {?><div class="col-md-12">
  <h1>Formas de Contactarnos</h1>

    <div class="col-md-3">
      <h3>Contacto</h3>
      <br>
      <h4><span class="glyphicon glyphicon-phone" aria-hidden="true"></span><br>0303456</h4><br>
      <h4><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span><br>Avenida Siempre Viva 123</h4><br>
      <h4><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><br>gimnasio@gmail.com</h4><br>

    </div>
    
    <div class="col-md-5">
    <h3>Ubicación</h3>
    <br>
      <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d12082.271463763316!2d-62.9735551!3d-40.7935135!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2sar!4v1470497176659" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>

    <div class="col-md-4">
      <h3>Consultas</h3>
      <br>
          <div class="panel panel-default">
            <div class="panel-body">
              <form>
                <div class="form-group">
                  <input type="text" class="form-control" id="name" placeholder="Ingrese su nombre">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" id="email" placeholder="Ingrese su email">
                </div>
                <textarea class="form-control" rows="8" placeholder="Ingrese su consulta"></textarea><br>
                <button type="reset" class="btn btn-default">Cancelar</button>
                <button type="submit" class="btn btn-default">Enviar</button>
              </form>
            </div>
          </div>
        </div>

    <div>
      <h4>También podés encontrarnos en:</h4>
      <a href="https://facebook.com" target="_blank"><img src="images/redes/fecebook.jpg" height="50px;"></a>
      <a href="https://twitter.com" target="_blank"><img src="images/redes/twitter.jpg" height="50px;"></a>
      <a href="https://gmail.com" target="_blank"><img src="images/redes/google+.jpg" height="50px;"></a>
      <a href="https://instagram.com" target="_blank"><img src="images/redes/instragram.jpg" height="50px;"></a>
    </div>
<?php }} ?>