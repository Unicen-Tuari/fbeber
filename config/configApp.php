<?php
class ConfigApp{
//navegacion 
  public static $ACTION = 'action';
  public static $ACTION_INCLUDE = 'include';
  public static $ACTION_INICIO = 'inicio';
  public static $ACTION_ACTIVIDADES = "actividades";
  public static $ACTION_ACTIVIDAD = "actividad";
  public static $ACTION_PROFE_ACT = 'profeact';
  public static $ACTION_NOSOTROS = "nosotros";
  public static $ACTION_CONTACTO = "contacto";
  public static $ACTION_OPINIONES = "opiniones";
  public static $ACTION_CUENTA = "cuenta";//OK
  public static $ACTION_COMENTARIOS = "comentarios";//OK

  public static $ACTION_AGREGAR_USUARIO = "agregar_usuario";//registrarse OK

  public static $ACTION_INSCRIBIR = "inscribir";//NO


//USUARIO LOGUEADO
  public static $ACTION_USUARIO = "usuario";
  public static $ACTION_MOD_USUARIO = "modificar_usuario";
  public static $ACTION_MIS_COMENTARIOS = "miscomentarios";//OK
  public static $ACTION_MIS_ACTIVIDADES = "misactividades";//OK

  public static $ACTION_AGREGAR_COMENTARIO = "agregar_comentario";//funca en la primer act
  public static $ACTION_INFO_COMENTARIO= "infocomentario";

  //B comentario
  public static $ACTION_BORRAR_COMENTARIO= "borrar_comentario";

}
?>
