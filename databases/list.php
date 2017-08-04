<?php  
require_once 'config.php';
//Consulta PDO
$queryResult = $pdo->query("SELECT id, name, email FROM users");
//fetch(recuperar) recoje cada registro uno por uno 
//PDO::FETCH_ASSOC recupera por llave y
//PDO::FETCH_NUM: devuelve un array indexado por el número de columna.

//while ($row = $queryResult->fetch(PDO::FETCH_ASSOC)) {
//	var_dump($row);
//	echo '<br>';
//}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>List | Databases with Platzi</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<style>
		body{
			background-color: #f0f0f0;
			background-image: url(./summer.jpeg);
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1">
				<div class="col-xs-12 col-sm-12 col-md-10">
					<h1>List Users</h1>
				</div>
				<div class="col-xs-2 col-sm-2 col-md-2">
					<a href="index.php"><h2>Home</h2></a>
				</div>
				<table class="table table-responsive table-striped">
					<tr>
						<th>Name</th>
						<th>Email</th>
						<th>Edit</th>
						<th>Delete</th>
					</tr>
					<?php  
						while ($row = $queryResult->fetch(PDO::FETCH_ASSOC)) {
							echo '<tr>';
							echo '<td>' . $row['name'] . '</td>';
							echo '<td>' . $row['email'] . '</td>';
							echo '<td><a href="update.php?id=' . $row['id'] . '"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Edit</a></td>';
							echo '<td><a class="text-danger" href="delete.php?id=' . $row['id'] . '"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Delete</a></td>';
							echo '</tr>';
						}
					?>
				</table>
			</div>
		</div>
	</div>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>