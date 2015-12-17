<?php

	// Inclusion del Archivo de Controlador Base
	REQUIRE_ONCE('main_controller.php');

	// Definicion del Controlador de Navegacion
	class NavegacionController extends MainController{

		// Carga el Head, Nav y Footer
		function index(){
			$this->navegacionView->showIndex();
		}

		// Carga la Seccion de Inicio
		function inicio(){
			$this->navegacionView->mostrarInicio($this->slidesModel->imprimirSlides());
		}
		function colecciones(){
			$this->navegacionView->mostrarColecciones($this->coleccionesModel->imprimirColecciones());
		}
		function portfolios(){
			$this->navegacionView->mostrarPortfolios($this->portfoliosModel->imprimirPortfolios());
		}

		
		// Carga la Seccion de Contacto
		function contacto(){
			$this->navegacionView->showContacto();
		}
	}
?>