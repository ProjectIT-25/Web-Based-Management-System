<?php
include("connection.php");
// LOGIN START

$email = $password = "";
$emailErr = $passwordErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST"){ 
	if(empty ($_POST["email"])){	 
		$emailErr = "Email is required!";
	}else{
		$email = $_POST["email"];
	}
	if(empty($_POST["password"])){
		$passwordErr = "Password is required!";
	}else{
		$password = $_POST["password"];
	}
}

if($email && $password){
	$check_email = mysqli_query($connections,"SELECT id, Email, Password, UserLevel FROM interntbl where Email='$email' UNION SELECT id, Email, Password, UserLevel FROM admintbl where Email='$email'");
	$check_email_row = mysqli_num_rows($check_email);

	if ($check_email_row > 0) { 
		while($row = mysqli_fetch_assoc($check_email)){
			$user_id = $row["id"];

			$db_password = $row["Password"];
			$db_account_type = $row["UserLevel"];

			if($password == $db_password){
				session_start();
				$_SESSION["id"] = $user_id;
				if($db_account_type == 0){

					echo "
					<script type='text/javascript'>setTimeout(function () { 
						const Toast = Swal.mixin({
							toast: true,
							position: 'top-end',
							showConfirmButton: false,
							timer: 10000,
							timerProgressBar: true,
							})
							Toast.fire({
								icon: 'success',
								title: 'Signed in successfully'

								}); 
								},100)</script>;

								<script>window.location.href='admin/mcc-files.php';</script>";
				}
				else{
					echo "
					<script type='text/javascript'>setTimeout(function () { 
						const Toast = Swal.mixin({
							toast: true,
							position: 'top-end',
							showConfirmButton: false,
							timer: 10000,
							timerProgressBar: true,
							})
							Toast.fire({
								icon: 'success',
								title: 'Signed in successfully'

								}); 
								},100)</script>;

								<script>window.location.href='intern/mcc-files.php';</script>";
								
							}
						}else{
							echo 
							" <script type='text/javascript'>setTimeout(function () { 
								Swal.fire({
									title: 'Oops...',
									icon: 'error',
									text: 'Wrong email/password combination!',
									allowOutsideClick: true,
									allowEscapeKey: true,
									allowEnterKey: false,
									timerProgressBar: true,
									timer: 6000,
									showConfirmButton: false,
									}); 
								},100)</script>";

							}

						}

					}else{
						echo 
						" <script type='text/javascript'>setTimeout(function () { 
							Swal.fire({
								title: 'Oops...',
								icon: 'error',
								text: 'Wrong email/password combination!',
								allowOutsideClick: true,
								allowEscapeKey: true,
								allowEnterKey: false,
								timerProgressBar: true,
								timer: 6000,
								showConfirmButton: false,
								}); 
							},100)</script>";

						}
					}
				?>
<!DOCTYPE html>
<html>
<head>
	<link type="image/png" rel="icon" href="img/uip-logo.jpg">
	<title>MCC: File Monitoring</title>
	<!-- LOCAL CSS -->
	<link rel="stylesheet" type="text/css" href="css/login-register.css">
</head>
<body>
	<div class="hero">
		<div class="form-box">
			<div class="button-box">
				<div id="btn"></div>
				<button type="button" class="toggle-btn" onclick="Login()">Login</button>
				<button type="button" class="toggle-btn" onclick="Register()">Register</button>
			</div>
			<!-- LOGIN FORM START -->
			<form id="login" class="input-group form-group" form method = "POST" action = "index.php">
				<p>Login to Dashboard</p>
				<input type="text" class="input-field" placeholder="Email" name="email" required autofocus></input>
				<input type="password" class=" input-field" placeholder="Password" name="password" required></input>
				<button type="submit" class="submit-btn" name="login">Log in</button>
			</form>
			<!-- LOGIN FORM END -->
			<!-- REGISTER FORM START -->
			<form id="register" class="input-group" method="post" action="register.php">
				<p>Create an Account</p>
				<input type="text" class="input-field" placeholder="Application Number" name="appNumber" required autofocus></input>
				<select name="team" required>
					<option value="" disabled selected>Choose team</option>
					<option value="MCC IT Course">MCC IT Course</option>
				</select>
				<select name="userLvl" required>
					<option value="" disabled selected>Choose User Level</option>
					<option value="0">Admin</option>
					<option value="1">Intern</option>
				</select>
				<input type="text" class="input-field" placeholder="First Name" name="fname" required autofocus></input>
				<input type="text" class="input-field" placeholder="Middle Name" name="mname" required></input>
				<input type="text" class="input-field" placeholder="Last Name" name="lname" required></input>
				<input type="text" class="input-field" placeholder="Suffix"name="suffix"></input>
				<input type="text" class="input-field" placeholder="Email" name="email" required></input>
				<input type="password" class="input-field" placeholder="Password" name="password" required></input>
				<input type="password" class="input-field" placeholder="Confirm Password" name="cpassword" required></input>
				<button type="submit" class="submit-btn" name="register">Register</button>
			</form>
			<!-- REGISTER FORM START -->
		</div>
	</div><a href="#"><i class="fa-regular fa-eye"></i></a>
					<script type="text/javascript">
					$(document).ready(function() {
						$("#show_hide_password a").on('click', function(event) {
							event.preventDefault();
							if($('#show_hide_password input').attr("type") == "text"){
								$('#show_hide_password input').attr('type', 'password');
								$('#show_hide_password i').addClass( "fa-eye-slash" );
								$('#show_hide_password i').removeClass( "fa-eye" );
							}else if($('#show_hide_password input').attr("type") == "password"){
								$('#show_hide_password input').attr('type', 'text');
								$('#show_hide_password i').removeClass( "fa-eye-slash" );
								$('#show_hide_password i').addClass( "fa-eye" );
							}
						});
					});
				</script>
	<footer>
		<div class="flinks">
			<a href="http://uip.melhamconstruction.ph/">UIP Dashboard</a>
			<a href="https://melhamconstruction.ph/">Melham Construction</a>
			<a href="http://anafara.com/">Anafara</a>
		</div>
		&copy; Copyright 2022 - Project-IT-25 - Melham Construction Interns
	</footer>
	<!-- LOCAL CSS -->
	<script type="text/javascript" src="js/switch-form.js"></script>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>
