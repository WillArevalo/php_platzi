<?php
//Inicializo sistema de errores de php
//Solo en modo desarrollo
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//Agrego el modulo de autoloading de composer
require_once '../vendor/autoload.php';

//Lo he retirado de los demas index, y lo he puesto aqui.
include_once "../config.php";

//Para poder llamar las paginas pendientes
//traza una ruta(route) 
//con un get si existe y si no se asume que estamos en la base de la aplicacion
$route = $_GET['route'] ?? '/';

use Phroute\Phroute\RouteCollector;

$router = new RouteCollector();
//Agrego el tipo de request que recibo(get) para la base de la aplicacion y una funcion anonima que ayda a responder
$router->get('/', function() use($pdo){
	//Ordenado por id descendente osea el mas reciente primero
	$query = $pdo->prepare('SELECT * FROM blog_posts ORDER BY id DESC');
	$query->execute();
	//fetchAll recupera todos los posts
	$blogPosts = $query->fetchAll(PDO::FETCH_ASSOC);
	include '../views/index.php';
});
//Se utiliza un dispatcher es el objeto que va a tomar la ruta que llega y llama el metodo que necesita.
$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());
//Genera una respuesta que es lo que regresa el dispatcher
$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $route);
//request_method devuelve el metodo que se este ejecutando get, post...
echo $response;

?>