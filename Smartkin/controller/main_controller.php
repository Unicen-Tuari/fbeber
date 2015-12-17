<?php

	// Inclusion del Modelo Categoria
	REQUIRE_ONCE('model/categoria_model.php');

	// Inclusion del Modelo Noticia
	REQUIRE_ONCE('model/noticia_model.php');

	// Inclusion del Modelo Contacto
	REQUIRE_ONCE('model/contacto_model.php');
	REQUIRE_ONCE('model/portfolios_model.php');

	// Inclusion del Modelo Usuario
	REQUIRE_ONCE('model/colecciones_model.php');

	// Inclusion de la Vista de Navegacion
	REQUIRE_ONCE('view/navegacion_view.php');

	// Definicion del Controlador Principal
	class MainController{
		protected $categoriaModel;
		protected $portfoliosModel;
		protected $slidesModel;
		protected $coleccionesModel;
		protected $contactoModel;
		protected $navegacionView;

		function __construct(){
			//$this->categoriaModel = new CategoriaModel();
			$this->coleccionesModel = new ColeccionesModel();
			$this->slidesModel = new SlidesModel();
			$this->portfoliosModel = new PortfoliosModel();
			$this->contactoModel = new ContactoModel();
			$this->navegacionView = new NavegacionView();
		}
	}
?>