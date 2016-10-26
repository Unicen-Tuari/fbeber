<?php
require_once('view.php');

class view_actividades extends view{
  
public function mostrarActividades($actividades){
    $this->smarty->assign('actividades',$actividades);
    $this->smarty->display('actividades.tpl');
  }
  
public function mostrarActividad($actividad){
    $this->smarty->assign('actividad',$actividad);
    $this->smarty->display('modif_act.tpl');
  }

public function mostrarProfeact($profeact,$actividad){
    $this->smarty->assign('profeact',$profeact);
    $this->smarty->assign('actividad',$actividad);
    $this->smarty->display('borrar_act.tpl');
  }

}
?>