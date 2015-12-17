<?php

	// Inclusion del Archivo de la Vista Base
	REQUIRE_ONCE('main_view.php');

	// Definicion de la Vista de Navegacion
	class NavegacionView extends MainView{

		// Carga el Head, Nav y Footer
		function showIndex(){
			$this->smarty->display('index.tpl');
		}

		// Carga la Seccion de Inicio
		function mostrarInicio($slides){
			$this->smarty->assign('slides', $slides);
			$this->smarty->display('inicio.tpl');
		}

		function mostrarColecciones($colecciones){
			$this->smarty->assign('colecciones', $colecciones);
			$this->smarty->display('colecciones.tpl');
		}

		function mostrarPortfolios($portfolios){
			$this->smarty->assign('portfolios', $portfolios);
			$this->smarty->display('portfolios.tpl');
		}

		// Carga la Seccion de Contacto
		function showContacto(){
			$this->smarty->display('contacto.tpl');
		}
	}
?>