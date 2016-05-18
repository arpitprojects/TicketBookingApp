<?php 
	require_once 'includes/connect.inc.php';
	require_once 'includes/filters.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<title>
			Register
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
						<h1>Register: </h1>
						<?php
							if(!logged()){
							if(isset($_POST['name']) &&isset($_POST['gender'])&&isset($_POST['email'])&&isset($_POST['password'])){
										$name=$_POST['name'];
										$gender = $_POST['gender'];
										$password = $_POST['password'];
										$email = $_POST['email'];
										$pass_md= md5($password);
										if(!empty($name) && !empty($email) &&!empty($password) &&!empty($gender)){
											$query="SELECT `email` FROM `register` WHERE `email`= '$email'";
											$query_run= mysql_query($query);
											$mysql_num_rows= mysql_num_rows($query_run);
											if($mysql_num_rows == 1){
												echo "<div class=\"alert alert-danger\">ALREADY EXISTS!</h3>";
											}else{
												$query="INSERT INTO `register` VALUES('','".mysql_real_escape_string($name)."','".mysql_real_escape_string($email)."','".mysql_real_escape_string($password)."','".mysql_real_escape_string($gender)."')";
												if($query_run = mysql_query($query)){
													header('Location: login.php');
											}else{
												echo "sorry we could not registera try after!";
										}
									}
								}else{
									echo "all feilds are req!";
								}
							}
							
						?>
						<form method="POST" action="register.php">
							<div class="form-group">
								<label for="exampleInputEmail1" style="text-align:left;">Name:</label>
								<input name="name" type="text" class="form-control" id="exampleInputEmail1" placeholder="Jhon Doe">
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1" style="text-align:left;">Gender</label>
								<input name="gender" type="text" class="form-control" id="exampleInputEmail1" placeholder="Male/Female">
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1" style="text-align:left;">Email address</label>
								<input name="email" type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1" style="text-align:left;">Password</label>
								<input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
							 </div>
							<button type="submit" class="btn btn-primary">Go!</button>
							<br></br>
							<a style="font-size:18px;" href="index.html">GO TO MAIN PAGE</a>
							<br></br>
							<a  style="font-size:18px;" href="login.php">GO TO LOGIN PAGE</a>
						</form>
						</form>
					</div>
				</div>
			</div>
		</section>
		<br><br></br></br>
		<br><br></br></br></br></br>
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
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/bootstrap.js"></script>
		<script src="js/owl.carousel.js"></script>
		<script type="text/javascript" src="js/script.js"></script>
	</body>
</html>
<?php
	}else if(logged()){
		echo "<h1 class=\"alert alert-warning\">you are alredy logged in !!<h1>";
	}
?>