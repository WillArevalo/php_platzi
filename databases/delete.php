<?php 

include_once 'config.php';

$id = $_GET['id'];

//Delete de usuario por el id obtenido por el metodo get
$sql = 'DELETE FROM users WHERE id=:id';
$query = $pdo->prepare($sql);
$query->execute([
	'id' => $id
]);
//Se redireccionara para no quedar en esta pagina
header("Location:list.php");


?>

