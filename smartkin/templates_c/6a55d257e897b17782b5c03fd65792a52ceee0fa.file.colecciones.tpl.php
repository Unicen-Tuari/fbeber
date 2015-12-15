<?php /* Smarty version Smarty-3.1.14, created on 2015-12-13 20:47:25
         compiled from "./templates/colecciones.tpl" */ ?>
<?php /*%%SmartyHeaderCode:52049411256544375bc53e5-01675341%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a55d257e897b17782b5c03fd65792a52ceee0fa' => 
    array (
      0 => './templates/colecciones.tpl',
      1 => 1449884354,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '52049411256544375bc53e5-01675341',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_56544375c605c6_75728516',
  'variables' => 
  array (
    'colecciones' => 0,
    'coleccion' => 0,
    'imagen' => 0,
    'favoritos' => 0,
    'fav' => 0,
    'usuario' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56544375c605c6_75728516')) {function content_56544375c605c6_75728516($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
    
<div class="col-md-12 fondoplaca"> <!--galeria-->

        <div class="col-md-2"></div>
        <div class="col-md-8 placa">
 

            <div class="control-box">                            
                <a data-slide="prev" href="#myCarousel" class="carousel-control left">‹</a>
                <a data-slide="next" href="#myCarousel" class="carousel-control right">›</a>
            </div><!-- /.control-box -->  
        
    <div class="carousel slide" id="myCarousel">
        <div class="carousel-inner">
            <?php  $_smarty_tpl->tpl_vars['coleccion'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['coleccion']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['colecciones']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['coleccion']->key => $_smarty_tpl->tpl_vars['coleccion']->value){
$_smarty_tpl->tpl_vars['coleccion']->_loop = true;
?>
            <?php if ($_smarty_tpl->tpl_vars['coleccion']->value['publico']){?>
            <div class="item">
                <ul class="thumbnails">
                    <h4><?php echo $_smarty_tpl->tpl_vars['coleccion']->value['name_col'];?>
</h4><!--colecciones-->
                    <?php  $_smarty_tpl->tpl_vars['imagen'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['imagen']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['coleccion']->value['imagenes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['imagen']->key => $_smarty_tpl->tpl_vars['imagen']->value){
$_smarty_tpl->tpl_vars['imagen']->_loop = true;
?>
                                            <li class="span3"><!--imagenes-->
                            <div class="thumbnail">
                                <img src="./images/<?php echo $_smarty_tpl->tpl_vars['imagen']->value['img_mod'];?>
" alt="">
                				<?php  $_smarty_tpl->tpl_vars['fav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['fav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['favoritos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['fav']->key => $_smarty_tpl->tpl_vars['fav']->value){
$_smarty_tpl->tpl_vars['fav']->_loop = true;
?>
                                    <?php if ($_smarty_tpl->tpl_vars['fav']->value['id_mod']==$_smarty_tpl->tpl_vars['imagen']->value['id_mod']){?>
                                    <p>Código: <?php echo $_smarty_tpl->tpl_vars['fav']->value['id_mod'];?>
</p>
                                    <p><?php echo $_smarty_tpl->tpl_vars['fav']->value['cantidad'];?>
</p>
                                    <?php }?>
                                <?php } ?>
                                
                                <?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['usuario']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value){
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
                                    <div class="caption">
                                        <?php if (!$_smarty_tpl->tpl_vars['user']->value['bloqueado']){?>
                                        <form action="colecciones.php?action=agregar_favorito" method="POST" enctype="multipart/form-data" class="text-right">   
                                        <input id="<?php echo $_smarty_tpl->tpl_vars['user']->value['id_user'];?>
" name= "new_fk_user" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['id_user'];?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['user']->value['name_user'];?>
"hidden/>
                                        <input id="<?php echo $_smarty_tpl->tpl_vars['imagen']->value['id_mod'];?>
" name= "new_fk_mod" value="<?php echo $_smarty_tpl->tpl_vars['imagen']->value['id_mod'];?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['imagen']->value['id_mod'];?>
"hidden/>                                    
                                        <button type="submit" name="saveForm" class="btn btn-mini"><span class="glyphicon glyphicon-hand-up" aria-hidden="true"></span></button> 
                                        </form>
                                        <?php }?>
                                    </div>                            
                              <?php } ?>                      
                            </li>
                        <?php } ?>
                    <?php }?>
                <?php } ?>
            </ul>             
        </div>                         
    </div><!-- /#myCarousel -->
        

</div></div></div>
                            
<!-- Delete This -->                        
<div class="footer">

      

    <script src="mzHjb_data/jquery.js"></script>
<script src="mzHjb_data/bootstrap.js"></script>

        <script>
      $(document).ready(function () {
    $('.carousel').carousel({ interval: 6000 });
});
      //@ sourceURL=pen.js
    </script>

    
    <script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>

    
  

 
</body></html><?php }} ?>