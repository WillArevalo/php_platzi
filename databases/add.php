<?php  
require_once 'config.php';
$result = false;//se inicializa para mas abajo utilizar para comprobacion.
//Jamas colocar
//var_dump($_GET);
//echo '<br>';
//var_dump($_POST);
if (!empty($_POST)) {
	$name = $_POST['name']; //las llaves vienen del name de los input en el form
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	//Convirtiendo nuestro password en un hash

	//Utilizando PDO para que no haya SQLinjection
	$sql = "INSERT INTO users(name, email, password) VALUES(:name, :email, :password)";
	$query = $pdo->prepare($sql);
	//prepare recibe una consulta sql para ser ejecutada y retorna el objeto con la consulta.
	$result = $query->execute([
		'name' => $name,
		'email' => $email,
		'password' => $password
	]);
	//execute ejecuta la consulta que regresa prepare.
	//En el execute se bindean(enlazan) los registros, 
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Databases with Platzi</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<style>
		body{
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
		    border: solid 3px lightgray;
		    border-style: dashed;
		    border-radius: 12px;
		    background: linear-gradient(141deg, #0fb8ad 0%, #1fc8db 51%, #2cb5e8 75%);
			
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
				<h1>Add User</h1>
				
				<!--Comprobacion para mostrar mensaje success-->
				<?php  

					if ($result) {
						echo '<div class="alert alert-success">Success!!!</div>';
					}else{
						echo '<div class="alert alert-danger">UPSS!!! Something is wrong, try more late.</div>';
					}

				?>
				<form class="form-group" action="add.php" method="post">
				<!--En action se especifica hacia donde se envian los datos-->
				<!--Por default viene en GET
				Metodos get:por medio de la url y post, oculto-->
					<input class="form-control" type="text" name="name" id="name" placeholder="Name">
					<br>
					<input class="form-control" type="text" name="email" id="email" placeholder="Email">
					<br>
					<input class="form-control" type="password" name="password" id="password" placeholder="Password">
					<br>
					<input class="btn btn-primary btn-lg trans" type="submit" value="Save">
				</form>
				<div class="col-xs-1 col-sm-1 col-sm-offset-10 col-md-1 col-md-offset-10">
					<a href="index.php">Home</a>
				</div>
				<br>
				<br>
			</div>
		</div>
	</div>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>