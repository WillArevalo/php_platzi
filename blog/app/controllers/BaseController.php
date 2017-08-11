<?php 

namespace App\Controllers;

use Twig_Loader_Filesystem;

//utilizo herencia y un motor de templates para que mi contenido sea netamete de html
class BaseController{

	protected $templateEngine;

	public function __construct(){
		//Loader es una clase qeu twig utiliza para cargar los archivos del sistema
		$loader = new Twig_Loader_Filesystem('../views');
		$this->templateEngine = new \Twig_Environment($loader, [
				'debug' => true,
				//opcion true en deploy
				'cache' => false
			]);
		//Añado una extension a twig de filtros para urls
		//Filtro url, cualquier cadena que tenga la variable url tenga el BASEURL como un prefijo.
		//Se filtra una ruta, por eso es $path
		$this->templateEngine->addFilter(new \Twig_SimpleFilter('url',function($path){
				return BASE_URL . $path;
		}));
	}

	public function render($fileName, $data = []){
		return $this->templateEngine->render($fileName, $data);
	}

}

?>