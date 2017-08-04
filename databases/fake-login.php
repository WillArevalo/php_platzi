<?php 



//SQL Injection
//
//' OR 1 = 1;--
//
//Se cierra el caso con la comilla se aplica un operador or ppara que la consulta siempre sea verdadera, se cierra y uego se comenta lo demass para adelante. 


//Arreglando la consulta, primero no enviar valores directamente, luego pdo debe prepararla yleugo si se ejecuta

$user = null;
$query = null;

if (!empty($_POST)) {
	require_once 'config.php';
	//Al tratar de consultar directamente en la base de datos es que se puede hacer SQLinjection
	$query = "SELECT * FROM users WHERE email =:email AND  password = :password";
	$prepared = $pdo->prepare($query);
	$prepared->execute([
		'email' => $_POST['email'],
		'password' => md5($_POST['password'])
	]);

	$user = $prepared->fetch(PDO::FETCH_ASSOC);



}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Fake login | Databases with Platzi</title>
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
				<h1>Fake Login</h1>
				<form class="form-group" action="fake-login.php" method="post">
				<!--En action se especifica hacia donde se envian los datos-->
				<!--Por default viene en GET
				Metodos get:por medio de la url y post, oculto-->
					<input class="form-control" type="text" name="email" id="email" placeholder="Email">
					<br>
					<input class="form-control" type="password" name="password" id="password" placeholder="Password">
					<br>
					<input class="btn btn-primary btn-lg trans" type="submit" value="Login">
				</form>
				<div class="col-xs-1 col-sm-1 col-sm-offset-10 col-md-1 col-md-offset-10">
					<a href="index.php">Home</a>
				</div>
				<br>
				<br>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm- col-md-6">
					<h2 class="text-center">Query</h2>
					<div>
						<?php print_r($query); ?>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<h2 class="text-center">User Data</h2>
					<div>
						<?php print_r($user); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>