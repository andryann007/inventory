<?php
//function untuk connect database
require 'function.php';

//function login dengan mencocokkan data dari data_user
if (isset($_POST['login'])) {
	$email = $_POST['email'];
	$password = $_POST['pass'];

	$checkDatabase = mysqli_query($conn, "SELECT * FROM data_user where email='$email' and password='$password'");

	$validateRows = mysqli_num_rows($checkDatabase);

	if ($validateRows > 0) {
		$_SESSION['log'] = 'true';
		header('location:index.php');
	} else {
		header('location:login.php');
	}
}

//function mengecek sesi login
if (!isset($_SESSION['log'])) {

} else {
	header('location:index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Login Aplikasi Inventory</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="img/icons/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body style="background-color: #666666;">

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form method="post" class="login100-form validate-form">
					<span class="login100-form-title p-b-43">
						Login to Inventory Application
					</span>
					<div class="form-group">
						Email
						<input type="email" class="form-control form-control-user" id="exampleInputEmail"
							aria-describedby="emailHelp" name="email" placeholder="Enter Email Address...">
					</div>

					<div class="form-group">
						Password
						<input type="password" class="form-control form-control-user" id="exampleInputPassword"
							placeholder="Password" name="pass">
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="login">
							Login
						</button>
					</div>
				</form>

				<div class="login100-more" style="background-image: url('img/bg-01.jpg');">
				</div>
			</div>
		</div>
	</div>

	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<script src="js/main.js"></script>
</body>

</html>