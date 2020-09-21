<?php 
$con = mysqli_connect('localhost','root','123456');
mysqli_select_db($con, 'booklist');
$s = mysqli_query($con,"select * from booklist");

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
				<h1><a href="index.php">Book Sharing - Genres</a></h1>
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
			<h4 style="color:#000000">Choose Your Favourite Genre To Find A Book That Fits You!</h4>
			<h4><a href="utopia.php" class="button special">Utopia</a></h4>	
			<h4><a href="finction.php" class="button special">Fiction</a></h4>
			<h4><a href="biography.php" class="button special">Biography</a></h4>
			<h4><a href="selfimprovement.php" class="button special">Self Improvement</a></h4>
			</form>
		
		</div>
		</div>
		</div>
	</div>
 </body>
 </html>