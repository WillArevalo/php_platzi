<?php
//Inicializo sistema de errores de php
//Solo en modo desarrollo
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//Lo he retirado de los demas index, y lo he puesto aqui.
include_once "../config.php";

//Para poder llamar las paginas pendientes
//traza una ruta(route) 
//con un get si existe y si no se asume que estamos en la base de la aplicacion
$route = $_GET['route'] ?? '/';

//Ejemplos
switch($route){
	case '/':
		require '../index.php';
		break;
	case '/admin':
		require '../admin/index.php';
		break;
	case '/admin/posts':
		require '../admin/posts.php';
		break;
}

//Entendi que como que enmascaraa la url, o hace redireccion.
?>