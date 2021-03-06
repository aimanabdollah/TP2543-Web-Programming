<?php
include_once 'validate_login.php';

if (!isset($_SESSION)) {
	session_start();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Camerasque Store</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!--===============================================================================================-->
	 <link rel="shortcut icon" type="image/png" href="images/ico.png"/>
</head>

<body>

	<div class="limiter">
		<div class="container-login100" style="background-image: url(https://wallpaperaccess.com/full/1358215.jpg);">
			<div class="wrap-login100 p-t-90 p-b-90">
				<form class="login100-form validate-form" action="#" method="POST">
					<div class="login100-form-avatar">
						<img src="images/logo.png" alt="logo">
					</div>

					<span class="login100-form-title p-t-20 p-b-45" style="color: white;">
						Online Ordering System
					</span>

					<div class="wrap-input100 validate-input m-b-10" data-validate="Email is required">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-10" data-validate="Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-10">
						<span class="symbol-input100">
							<i class="fa fa-bars"></i>
						</span>
						
							<select name="level" class="input100" id="level" required>
								<option value="">Please select a role</option>
								<option value="Normal Staff">Normal Staff</option>
								<!-- <option value="Supervisor">Supervisor</option> -->
								<option value="Admin">Admin</option>
							</select>
					
					</div>


					<div class="container-login100-form-btn p-t-10">
						<button type="submit" class="login100-form-btn loginbtn" type="submit">
							Login
						</button>
					</div>

					<div class="text-center w-full p-t-25 p-b-230">
						<a href="#" class="txt1">
						</a>
					</div>

					<div class="text-center w-full">
						<a class="txt1" href="#">
						</a>
					</div>

					</a>
			</div>
			</form>
		</div>
	</div>
	</div>




	<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>

</html>