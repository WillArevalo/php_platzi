<?php 

$a = null;

$result = $a ?? 'default';
var_dump($result);

//Si la variable contiene algo diferente a null no se ejecutara la asignacion.

?>