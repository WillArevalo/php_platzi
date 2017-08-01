<?php  

function hello($name){
	echo 'Hello ' . $name;
	echo '<br>';
}

hello('Mary');
hello('Elizabeth');

function sum($a, $b){
	return $a + $b;
}

$c = sum(1, 2);
var_dump($c)

// una variable dentro de una funcion con el mismo nombre que tenga otra fuera de la funcion no altera el valor de ninguna.

?>