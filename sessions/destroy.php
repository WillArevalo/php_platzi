<?php  

session_start();
//Cerrar sesion, exactamente el valor, se puede seguir utilizando la session actual

unset($_SESSION['count']);

//o session_destroy pero elimina la session completa

session_destroy();


?>