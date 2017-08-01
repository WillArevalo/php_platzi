<?php  

//Una cookie es la forma de almacenar cierta informacion en el navegador del cliente, las cookies no se eliminan al cerrar la sesion, no necesariamente se eliminan. el ultimo parametro es el tiempo actual mas el tiempo que debe perdurar la cookie en segundos.

setcookie('count', '1', time() + 3600);

echo '<p>Cookies</p>';



?>