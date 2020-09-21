<?php 
	session_start();
	session_destroy();
?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="UTF-8">
	<title>Book Sharing</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
	<script src="js/jquery.min.js"></script>
	<script src="js/skel.min.js"></script>
	<script src="js/skel-layers.min.js"></script>
	<script src="js/init.js"></script>
	
 	<title>Book Sharing</title>
 	<link rel="stylesheet" type="text/css" href="style.css">
 	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
 </head>
 <body> 
 	<header id="header">
				<h1><a href="index.php">Book Sharing</a></h1>
				<nav id="nav">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="genres.php">Genres</a></li>
						<li><a href="booklist.php">Booklist</a></li>
						<li><a href="login.php" class="button special">Login</a></li>
						<li><a href="register.php" class="button special">Register</a></li>
					</ul>
				</nav>
	</header>
	<div class="container">
		<div class="login-box"></div>
		<div class = "row">
		<div class = "col-md-10 login-left">
			<h2>LOGIN</h2>
			<form action="validation.php" method="post">
				<div class="form-group">
					<label>Email</label>
					<input type="text" name="user" class="form-control" required>
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" name="password" class="form-control" required>
				</div>
				<button type="submit" class="btn btn-primary">Login</button>
			</form>
		</div>
		</div>
		</div>
	</div>
 </body>
 </html>