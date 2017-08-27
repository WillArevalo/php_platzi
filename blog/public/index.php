<?php
//Inicializo sistema de errores de php
//Solo en modo desarrollo
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//Agrego el modulo de autoloading de composer
require_once '../vendor/autoload.php';

//Se inicializa en toda la aplicacion
session_start();

//obtener el directorio base con esto...
$baseUrl = '';
$baseDir = str_replace(basename($_SERVER['SCRIPT_NAME']), "", $_SERVER['SCRIPT_NAME']);
$baseUrl = 'https://' . $_SERVER['HTTP_HOST'] . $baseDir; // 'https://' . $_SERVER['HTTP_HOST'] = string(17) "https://localhost"
define('BASE_URL', $baseUrl);//define(define una constante)Atrubutos(nombre, constante);

//Str_replace permite reemplazar una cadena, str_replace(<lo que quieres reemplazar>, <por lo que vas a reemplazar>, <en donde lo quires reemplazar>) me va a regresar la direccion sin el archivo al que ingreso /PHP_platzi/php_platzi/blog/public/

//Que regresa baseDir = string(44) "/PHP_platzi/php_platzi/blog/public/index.php"
//Con basename obtenemos = string(9) "index.php"
//var_dump($baseDir); //= /PHP_platzi/php_platzi/blog/public/

//Para poder llamar las paginas pendientes
//traza una ruta(route) 
//con un get si existe y si no se asume que estamos en la base de la aplicacion
//Inicializo a dotenv variables de entorno __DIR__ retorna la direcciion del directorio en este caso public por eso me devuelvo una carpeta

$dotenv = new \Dotenv\Dotenv(__DIR__ . '/..');
$dotenv->load();

//Inicializo el ORM y cambio valores de default
use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;

$capsule->addConnection([
    'driver'    => 'mysql',
    'host'      => getenv('DB_HOST'),
    'database'  => getenv('DB_NAME'),
    'username'  => getenv('DB_USER'),
    'password'  => getenv('DB_PASS'),
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);

$capsule->setAsGlobal();
$capsule->bootEloquent();

$route = $_GET['route'] ?? '/';

use Phroute\Phroute\RouteCollector;

$router = new RouteCollector();

$router->controller('/auth', App\Controllers\AuthController::class);

//Si la pagina que rotuearemos no tiene nada de php no paso segundo parametro no hace falta porque es una pagina estatica
$router->controller('/admin', App\Controllers\Admin\IndexController::class);


//Agrego route a admin posts
$router->controller('/admin/posts', App\Controllers\Admin\PostController::class);

$router->controller('/admin/users', App\Controllers\Admin\UserController::class);

//Agrego el tipo de request que recibo(get) para la base de la aplicacion y una funcion anonima que ayda a responder
//En vez de pasar un metodo get se le pasa el controller,
//El segundo parametro retorna el nombre de la clase
$router->controller('/', App\Controllers\IndexController::class);


//Se utiliza un dispatcher es el objeto que va a tomar la ruta que llega y llama el metodo que necesita.
$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());
//Genera una respuesta que es lo que regresa el dispatcher
$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $route);
//request_method devuelve el metodo que se este ejecutando get, post...
echo $response;

?>