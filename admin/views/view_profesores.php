<?php
require_once('view.php');

class view_profesores extends view{

//consulta info por un profesor en especial para borrar
public function mostrarProfesor($profesor){
    $this->smarty->assign('profesor',$profesor);
    $this->smarty->display('borrar_profe.tpl');
  }

//muestra datos del profesor + todas las actividades posibles (dropbox) para poder ser modificado
public function mostrarProfeActividades($actividades,$profesor){
    $this->smarty->assign('actividades',$actividades);
    $this->smarty->assign('profesor',$profesor);
    $this->smarty->display('modif_profe.tpl');
  }

public function mostrarProfesores($profesores,$actividades){
    $this->smarty->assign('actividades',$actividades);
    $this->smarty->assign('profesores',$profesores);
    $this->smarty->display('profesores.tpl');
  }

//muestra usuarios por profesor
public function mostrarUsuariosprofesor($inscriptos,$profesor){
    $this->smarty->assign('inscriptos',$inscriptos);
    $this->smarty->assign('profesor',$profesor);
    $this->smarty->display('inscriptos.tpl');
  }
}

?>