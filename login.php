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
						<h1>User Login : </h1>
					<?php
						if(isset($_POST['email']) && isset($_POST['password'])){
							$email = $_POST['email'];
							$password = $_POST['password'];
							if(!empty($email) && !empty($password)){
								$query = "SELECT `id` FROM `register` WHERE `email`= '".mysql_real_escape_string($email)."'
								AND `password` = '".mysql_real_escape_string($password)."'";
								if($query_run = mysql_query($query)){
									$query_num_rows=mysql_num_rows($query_run);
									//echo $query_num_rows;
									if($query_num_rows == 0){
										echo "invalid username/password";
									}else if($query_num_rows ==1){
									 $id= mysql_result($query_run, 0, 'id');
									 $_SESSION['id'] = $id;
									 header('Location:book.php');
									}
								}
							}else{
								echo "feild can't be empty!";
							}
						}
					?>
						<form method="POST" action="login.php">
							<div class="form-group">
								<label for="exampleInputEmail1" style="text-align:left;">Email address</label>
								<input type="email" name="email" class="form-control" id="email" placeholder="Email" required>
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1" style="text-align:left;">Password</label>
								<input name="password" type="password" class="form-control" id="password" placeholder="Password" required>
							 </div>
							<button type="submit" id="button" class="btn btn-primary">Go!</button>
							<br></br>
							<a style="font-size:18px;" href="index.html">GO TO MAIN PAGE</a>
							<br></br>
							<a  style="font-size:18px;" href="register.php">GO TO REGISTER PAGE</a>
						</form>
					</div>
				</div>
			</div>
		</section>
		<br><br></br></br>
		<br><br>
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

