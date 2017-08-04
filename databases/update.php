<?php  
require_once 'config.php';
//Esto realiza el update en la tabla
//Si no esta vacio nuestro variable global Post
$result = false;
if (!empty($_POST)) {
	$id = $_POST['id'];
	$newName = $_POST['name'];
	$newEmail = $_POST['email'];

	$sql = "UPDATE users SET name=:name, email=:email WHERE id=:id";
	$query = $pdo->prepare($sql);
	$result = $query->execute([
		'id' => $id,
		'name' => $newName,
		'email' => $newEmail
	]);
	$nameValue = $newName;
	$emailValue = $newEmail;
}else{
	//Esto hace la consulta
	$id = $_GET['id'];//Obteniendo el valor de la url
	//var_dump($id);
	$sql = "SELECT name, email FROM users WHERE id=:id";
	$query = $pdo->prepare($sql);
	$query->execute([
		'id' => $id
	]);
	$row = $query->fetch(PDO::FETCH_ASSOC);
	$nameValue = $row['name'];
	$emailValue = $row['email'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Update | Databases with Platzi</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<style>
		body{
			background-image: url("background.jpeg");
			background-color: #f0f0f0;
		}
		.flex{
		    display: flex;
		    justify-content: center;
		    align-content: center;
		    flex-direction: column;
		    height: 100vh;
		}
		.flex-child{
		    border: solid 2px #f0f0f0;
		    border-style: dashed;
		    border-radius: 10% 0 10% 0;
		    /*background: linear-gradient(141deg, #010103 0%, #0d1826 51%, #1a2e36 75%);
			*/
			background: rgba(0,0,0,0);
		}
		.trans{
			background: rgba(0,0,0,0);
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="row flex">
			<div class="col-xs-12 col-sm-4 col-sm-offset-4 col-md-4 col-md-offset-4 flex-child">
			<br>
				<h1 class="text-info">Update User</h1>
				<!--Comprobacion para mostrar mensaje success-->
				<?php  

					if ($result) {
						echo '<div class="alert alert-success"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Update!!!</div>';
					}else{
						echo '<div class="alert alert-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> UPSS!!! Something is wrong, try more late.</div>';
					}

				?>
				<form class="form-group" action="update.php" method="post">
				<!--En action se especifica hacia donde se envian los datos-->
				<!--Por default viene en GET
				Metodos get:por medio de la url y post, oculto-->
					<input class="form-control" type="text" name="name" id="name" placeholder="Name" value="<?php echo $nameValue; ?>">
					<br>
					<input class="form-control" type="text" name="email" id="email" placeholder="Email" value="<?php echo $emailValue; ?>">
					<br>
					<input type="hidden" name="id" value="<?php echo $id; ?>">
					<input class="btn btn-primary btn-lg trans" type="submit" value="Update">
				</form>
				<div class="col-xs-1 col-sm-1 col-sm-offset-10 col-md-1 col-md-offset-10">
					<a href="list.php">List</a>
				</div>
				<br>
				<br>
			</div>
		</div>
	</div>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>