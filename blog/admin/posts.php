<?php 
//Ordenado por id descendente osea el mas reciente primero
$query = $pdo->prepare('SELECT * FROM blog_posts ORDER BY id DESC');
$query->execute();
//fetchAll recupera todos los posts
$blogPosts = $query->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Blog</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<style>
		body{
			background-color: #f0f0f0;
			font-family: 'Montserrat', sans-serif;
		}
		img{
			border-radius: 10px 0px;
		}
	</style>
</head>
<body>
	<div class="container">
		<!--Title-->
		<div class="row">
			<div class="col-md-12">
				<h1>Blog Title</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-9">
				<h2>Posts</h2>
				<a href="insert-post.php" class="btn btn-primary btn-lg">New Post</a>
				<table class="table-responsive table-striped table-hover col-sm-12 col-md-12">
					<thead>
						<tr>
							<th>Title</th>
							<th>Edit</th>
							<th>Delete</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($blogPosts as $blogPost): ?>
							<tr>
								<td><?= $blogPost['title'] ?></td>
								<td>Edit</td>
								<td>Delete</td>
							</tr>
						<?php endforeach ?>
					</tbody>
				</table>				
			</div>
			<nav class="hidden-xs hidden-sm col-md-3">
		      <ul class="nav nav-pills nav-stacked" data-spy="affix" data-offset-top="60" data-offset-bottom="200">
		        <li><a href="#section1">Section 1 <br><small>Small text</small>	</a></li>
		        <li><a href="#section2">Section 2 <br><small>Small text</small></a></li>
		        <li><a href="#section3">Section 3 <br><small>Small text</small></a></li>
		      </ul>
		    </nav>
		</div>
		<br>
		<br>	
		<div class="row">
			<div class="col-md-12">
				<footer>
					This is a footer <br>
					<div class="col-xs-4 col-xs-push-8 col-sm-2 col-sm-push-10 col-md-2 col-md-push-10">
						<a class="text-muted small" href="./index.php">Admin Panel</a>
					</div>
				</footer>			
			</div>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>