<?php
$dbHost = 'localhost';
$dbName = 'cursophp';
$dbUser = 'root';
$dbPass = '';
try {
  $pdo = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Falló en la conexión : ". $e->getMessage();
}

?>
 <!--Para crear una conexion y recibe 3 parametros(direccion(motorDB:host="";dbname=""),user,password)
-->