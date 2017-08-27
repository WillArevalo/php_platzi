<?php 

namespace App;

use Monolog\Handler\StreamHandler;
use Monolog\Logger;

//Una sola instancia de nuestra clase eso hace singleton con variables estatics
class Log
{
	private static $_logger = null;
	//Inicializa la variable
	private static function getLogger(){
		if (!self::$_logger) {
			self::$_logger = new Logger('App Log');
		}
		return self::$_logger;
	}
	//Agregar logs, log con el tipo de error
	public static function logError($error){
		//Regresa la instancia de logger que creamos en el anterior metodo
		//Con pushHandler obtenemos un archivo en el que lo guardaremos, con la carpeta destino
		self::getLogger()->pushHandler(new StreamHandler('../logs/application.log', Logger::ERROR));
		self::getLogger()->addError($error);
	}
	//Version informativa
	public static function logInfo($info){
		//Regresa la instancia de logger que creamos en el anterior metodo
		//Con pushHandler obtenemos un archivo en el que lo guardaremos, con la carpeta destino
		self::getLogger()->pushHandler(new StreamHandler('../logs/application.log', Logger::INFO));
		self::getLogger()->addInfo($info);
	}

}

?>