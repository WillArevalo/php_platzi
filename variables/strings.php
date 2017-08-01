<?php  

//Con '' (comillas simples imprime tal cual), con "" (imprime texto y busca caracteres de escape o variables)

$intVar = 5;
$newVar = 6;

$newVar = " seis ";

$stringVari = ' Hello $intVar ';
$stringVar = " Hello $intVar ";
$strVat = " hello my " . $intVar;

echo $stringVari;
echo $stringVar;
echo $newVar;
echo $strVat;

?>