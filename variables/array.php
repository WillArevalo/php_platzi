<?php 

$arrayVar = ['red', 'blue', 'black'];
var_dump($arrayVar);

//es un mapa y no un arreglo y se puede utilizar de la forma clave => valor, pueden ser numeros o texto

$arrayVarcito = [
	'color1' => 'red', 
	'color2' => 'blue', 
	'color3' => 'black'
];

//Acceder a un elemento individualmente

var_dump($arrayVarcito['color2']);

?>