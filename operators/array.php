<?php 

$array1 = [
	0 => 'a',
	1 => 'b',
	2 => 'c'	
];

$array2 = [
	3 => 'd',
	4 => 'e'
];
//union si llave esta repetida solo se toma en cuenta el resultado de la primera.
$result = $array1 + $array2;
var_dump($result);
var_dump($array1 == $array2);

?>