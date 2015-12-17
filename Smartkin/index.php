<?php

	// Inclusion del Archivo de Configuracion del Router
	REQUIRE_ONCE('config/router_config.php');

	// Inclusion del Controlador de Navegacion
	REQUIRE_ONCE('controller/navegacion_controller.php');

	// Inclusion del Controlador de Contacto
	REQUIRE_ONCE('controller/contacto_controller.php');



	$navegacionController = new NavegacionController();
	$contactoController = new ContactoController();

	// Resolucion del Enrutamiento
	if(!array_key_exists(RouterConfig::$ACTION, $_REQUEST)){
		// Carga el Head, Nav y Footer
		$navegacionController->index();
	} else {
		switch($_REQUEST[RouterConfig::$ACTION]){
			case RouterConfig::$ACTION_INICIO:
				// Carga la Seccion de Inicio
				$navegacionController->inicio();
				break;

			case RouterConfig::$ACTION_SLIDES:
				// Carga la Seccion de Inicio con las Noticias Correspondientes a la Categoria Indicada
				$navegacionController->slides();
				break;

			case RouterConfig::$ACTION_COLECCIONES:
				// Carga la Seccion de Informacion
				$navegacionController->colecciones();
				break;

			case RouterConfig::$ACTION_PORTFOLIOS:
				// Carga la Seccion de Galeria
				$navegacionController->portfolios();
				break;

			case RouterConfig::$ACTION_CONTACTO:
				// Carga la Seccion de Contacto
				$navegacionController->contacto();
				break;

			case RouterConfig::$ACTION_AGREGAR_CONSULTA:
				// Almacena la Consulta Enviada
				$contactoController->agregarConsulta();
				break;
		}
	}

?>