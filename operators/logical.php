<?php 

$v1 = 1;
$v2 = 2;

$v3 = 2;
$v4 = 3;

$result1 = $v1 == $v2;
echo 'Result 1: <br>';
var_dump($result1);
echo '<br>';
$result2 = $v3 == $v4;
echo 'Result 2: <br>';
var_dump($result2);

//and solo es verdadero cuado ambos son verdaderos &&
$result3 = $result1 && $result2;
echo '<br>';
echo '<br>';
echo 'Result Final: <br>';
var_dump($result3);

/*
$a and $b	And (y)	TRUE si tanto $a como $b son TRUE.
$a or $b	Or (o inclusivo)	TRUE si cualquiera de $a o $b es TRUE.
$a xor $b	Xor (o exclusivo)	TRUE si $a o $b es TRUE, pero no ambos.
! $a	Not (no)	TRUE si $a no es TRUE.
$a && $b	And (y)	TRUE si tanto $a como $b son TRUE.
$a || $b	Or (o inclusivo)	TRUE si cualquiera de $a o $b es TRUE.
*/

?>