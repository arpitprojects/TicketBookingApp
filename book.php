<?php 
	require_once 'includes/connect.inc.php';
	require_once 'includes/filters.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<title>
			Login
		</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="stylesheet" href="css/reset.css" type="text/css">
		<link rel="stylesheet" href="css/bootstrap.css" type="text/css"/>
		<link rel="stylesheet" href="css/owl.carousel.css"/>
		<link rel="stylesheet" href="css/main.css" type="text/css"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'><!--font family-->
	</head>
	<body>
		<section>
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-sm-offset-3">
						<br></br>
						<h1>Book Your ticket</h1>
						<?php
							$name = getuserfeild('name');
							echo "<h3 class=\"alert alert-warning\">Hello !". $name . "</h3>";
							echo "<a href=\"includes/logout.php\">Logout</a>"; 
						?>
						</div>
					</div>
				</div>
						<br></br><br><br><br><br><br><br></br><br><br><br></br><br><br><br><br><br>
						<footer>
				<center>
					<div class="container">
						<div class="row">
							<div class="col-sm-4">
								<a href="#!" >About Us!</a>
								<br/>
								<a href="#!">Contact Us!</a>
								<br>
								
							</div>
							<div class="col-sm-4">
								<a href="#!" >About Us!</a>
								<br/>
								<a href="#!">Contact Us!</a>
								<br>
								
							</div>
							<div class="col-sm-4">
								<a href="#!" >About Us!</a>
								<br/>
								<a href="#!">Contact Us!</a>
								<br>
								
							</div>
							<br></br>
							<h3>Book Your Ticket Online - </h3>
							<p>Amazing Offers!</p>
						</div>
						
					</div>
				</center>
			</footer>
		<script  src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.js"></script>
		<script src="js/owl.carousel.js"></script>
		<script type="text/javascript" src="js/script.js"></script>
	</body>
</html>