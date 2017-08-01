<?php 

include_once 'functions.php';
//o
//require 'functions.php';
//include si existe un error no se detiene; include_once se asegura que solo se cargue una vez el archivo
//require manda error fatal si falta. existe require_once

echo '<p>Text for example in index.php</p>';

sum(10,20);
?>