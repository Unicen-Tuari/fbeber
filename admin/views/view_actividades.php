<?php
require_once('view.php');

class view_actividades extends view{

//muestra todas las actividades->OK
public function mostrarActividades($actividades){
    $this->smarty->assign('actividades',$actividades);
    $this->smarty->display('actividades.tpl');
  }

//muestra form para agregar actividad->PROBANDO
public function agregarActividad(){
    $this->smarty->display('agregar_act.tpl');
  }

//muestra datos para borrar->OK
public function mostrarProfeact($profeact,$actividad){
    $this->smarty->assign('profeact',$profeact);
    $this->smarty->assign('actividad',$actividad);
    $this->smarty->display('borrar_act.tpl');
  }
//muestra comentarios por actividad
public function mostrarComact($comact,$actividad){
    $this->smarty->assign('comact',$comact);
    $this->smarty->assign('actividad',$actividad);
    $this->smarty->display('comentarios_act.tpl');
  }

public function mostrarImagesAct($imagesact){
    $this->smarty->assign('imagesact',$imagesact);
    $this->smarty->display('images_act.tpl');
  }


//muestra datos para modificar->OK
public function mostrarActividad($actividad){
    $this->smarty->assign('actividad',$actividad);
    $this->smarty->display('modif_act.tpl');
  }

}
?>