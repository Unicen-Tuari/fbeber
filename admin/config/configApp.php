<?php
class ConfigApp{
//navegacion
  public static $ACTION = 'action';
  public static $ACTION_INCLUDE = 'include';
  public static $ACTION_INICIO = 'inicio_admin';
  public static $ACTION_ACTIVIDADES = "actividades_admin";
  public static $ACTION_PROFESORES= "profesores_admin";
  public static $ACTION_USUARIOS= "usuarios_admin";

//CONSULTAS
  public static $ACTION_PROFE_ACTIVIDADES= "profeactividades";
  public static $ACTION_PROFE_ACT= "profeact";
  public static $ACTION_IMAGES_ACT= "imagesact";
  public static $ACTION_COMENTARIOS_ACT= "comentariosact";
  public static $ACTION_COMENTARIOS_USUARIO= "comentariosusuario";
  public static $ACTION_USUARIOS_PROFESOR= "usuariosprofesor";
  public static $ACTION_ACTIVIDAD= "actividad";
  public static $ACTION_PROFESOR= "profesor";
  public static $ACTION_USUARIO= "usuario";

//ABM actividad
  public static $ACTION_AGREGAR_ACTIVIDAD = "agregar_actividad";
  public static $ACTION_BORRAR_ACTIVIDAD = "borrar_actividad";
  //**********************************************************
  public static $ACTION_BORRAR_IMAGEN = "borrar_imagen";//NEW
  //**********************************************************
  public static $ACTION_MODIFICAR_ACTIVIDAD = "modificar_actividad";

//ABM profesor
  public static $ACTION_AGREGAR_PROFESOR = "agregar_profesor";
  public static $ACTION_BORRAR_PROFESOR = "borrar_profesor";
  public static $ACTION_MODIFICAR_PROFESOR = "modificar_profesor";

//B usuario
  public static $ACTION_BORRAR_USUARIO = "borrar_usuario";

}
?>
