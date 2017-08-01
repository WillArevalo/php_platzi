<?php 

//Estructura For
for ($i = 0; $i <= 10; $i++){
	echo $i . '<br>';
}

//Estructura While
$e = 0;
while($e <= 10){
	echo $e . '<br>';
	$e++;
}

//Estructura Do while
$o = 0;
do {
	echo $o . '<br>';
	$o++;
}while ($o <= 10);

//Estructua foreach para recorrer un arreglo o listas
$names = ['Alex', 'Elizabeth', 'Mary'];
foreach ($names as $key => $name) {
	echo $key . '-' . $name . '<br>';
}

?>