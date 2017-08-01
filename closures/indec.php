<?php  
//Closures o Funciones Anonimas

$var2 = 1;


//Si queremos utilizar una variable fuera de la funcion puede hacerse utilizando use
$var = function () use($var2) {
	echo 'This is a closure <br>';
	echo 'Value: ' . $var2 . '<br>';
};

$var();


//Otro ejemplo, con un arraymap que recibe un callback(Es una funcion que se ejecutara y opera todos los elementos) y el array

$x = 3; 
$numbers = [1, 2, 3, 4, 5];

$result = array_map(function ($n) use($x){
	return $n * $x;	
}, $numbers);

var_dump($result);

?>

