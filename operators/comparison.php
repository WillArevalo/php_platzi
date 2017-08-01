<?php 

$v1 = 10;
$v2 = 12;

//php los cambia para compararlos
$v3 = '12';

//Esto arroja un valor booleano(true or false)
$result = $v1 == $v2;
$result2 = $v3 == $v2;
//para saber si son exactamente diferentes utilizar ===
$result3 = $v3 === $v2;

var_dump($result);
//En este caso false

var_dump($result2);
////En este caso True

var_dump($result3);
//En este caso es false

//diferente con !=

//diferente con !==

//compara que es mayor en entero(int) spaceship <=>
//si es el de la izq arroja -1
//si son iguales arroja 0
//si el de la der arroja 1
$result4 = $v3 <=> $v2;
var_dump($result4);




?>