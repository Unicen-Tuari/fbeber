<?php
require_once('view.php');

class view_profesores extends view{

public function mostrarProfesor($profesor){
    $this->smarty->assign('profesor',$profesor);
    $this->smarty->display('borrar_profe.tpl');
  }

public function modifProfesores($profesores,$actividades,$profesor){
    $this->smarty->assign('profesor',$profesor);
    $this->smarty->assign('actividades',$actividades);
    $this->smarty->assign('profesores',$profesores);
    $this->smarty->display('modif_profe.tpl');
  }


public function mostrarProfesores($profesores){
    $this->smarty->assign('profesores',$profesores);
    $this->smarty->display('profesores.tpl');
  }
}

?>