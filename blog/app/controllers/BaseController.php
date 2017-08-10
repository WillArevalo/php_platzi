//utilizo herencia y un motor de templates para que mi contenido sea netamete de html

<?php 

namespace App\Controllers;
use Twig_Loader_Fylesystem;

class BaseController{

	protected $templateEngine;

	public funtion __construct(){
		//Loader es una clase qeu twig utiliza para cargar los archivos del sistema
		$loader = new Twig_Loader_Fylesystem('../views');
		this->templateEngine = new \Twig_Enviroment($loader, [
				'debug' = true,
				//opcion true en deploy
				'cache' = false
			]);
	}

	public function render($fileName, $data = []){
		return $this->templateEngine->render($fileName, $data);
	}

}

?>