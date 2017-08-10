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
			background-image: url("../../public/images/plans.jpeg");
			background-size: cover;
			font-family: 'Montserrat', sans-serif;
			margin-top: 5vh;
		}
		img{
			border-radius: 10px 0px;
		}
		.container{
			background: rgba(0,0,0,0.1);
			height: 90vh;
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
				<h3>Admin Panel</h3>
				<ul>
				<!--Agrego la url por php-->
					<li><a href="<?php echo BASE_URL; ?>admin/posts" class="text-important">Manage Posts</a></li>
				</ul>		
			</div>
			<nav class="hidden-xs hidden-sm col-sm-3">
		      <ul class="nav nav-pills nav-stacked" data-spy="affix" data-offset-top="60" data-offset-bottom="200">
		        <li><a href="#section1">Section 1 <br><small>Small text</small></a></li>
		        <li><a href="#section2">Section 2 <br><small>Small text</small></a></li>
		        <li><a href="#section3">Section 3 <br><small>Small text</small></a></li>
		      </ul>
		    </nav>
		</div>
		<div class="row">
			<div class="col-md-12">
				<footer>
					This is a footer <br>
					<a class="text-muted" href="<?php echo BASE_URL; ?>">Blog</a>
				</footer>			
			</div>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>