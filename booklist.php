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
				<h1><a href="index.php">Book Sharing - Booklist</a></h1>
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
		<div class = "col-md-11 login-left">
			<h1 style = "text-align: center">BOOKLIST</h1> 
			<table class = "table">
				<tr>
					<th style="color:#000000">Name</th>
					<th style="color:#000000">Author</th>
					<th style="color:#000000">Page Count</th>
					<th style="color:#000000">Genre</th>
					<th style="color:#000000">Owner Contact</th>
					<th style="color:#000000">
			<?php while ($r = mysqli_fetch_array($s)) {
			?>
				<tr>
					<th><?php echo $r['bookname']; ?></th>
					<th><?php echo $r['bookauthor']; ?></th>
					<th><?php echo $r['bookpagecount']; ?></th>
					<th><?php echo $r['bookgenre']; ?></th>
					<th><?php echo $r['owneremail']; ?></th>
				</tr>
			<?php } 
			?>
			</table>
		</div>
		</div>
		</div>
	</div>
 </body>
 </html>