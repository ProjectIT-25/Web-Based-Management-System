<?php
include("connection.php");


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
				echo "<script>window.location.href='admin/mcc-files.php';</script>";
			}
			else{
				echo "<script>window.location.href='intern/mcc-files.php';</script>";
			}
		}
		else{
			$passwordErr = "Password is incorrect!";
		}

	}

}else{
	$emailErr = "Email is is incorrect!";

}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>UIP Login Page</title>
	<link rel="icon" href="uip-logo.jpg">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="css/login-page.css">
</head>
<body>
	<div class="login-form">
		<form method = "POST" action = "<?php htmlspecialchars ($_SERVER["PHP_SELF"]); ?>">
			<header class="pb-4">Login into Dashboard</header>
			<div class="form-group pb-4">
				<input type="text" class="form-control" placeholder="Email Address" name="email" required autofocus>
				<span class = "error"><?php echo $emailErr; ?></span><br>
			</div>
			<div class="form-group input-group" id="show_hide_password" style="margin-bottom: 0;">
				<input class="form-control" type="password" name="password" placeholder="Password" required>
				<div class="input-group-addon">
					<a href=""><i class="fa-regular fa-eye"></i></a>
				</div>
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
			</div>
			<span class = "error"><?php echo $passwordErr; ?></span><br>
			<button type="submit" class="btn btn-block mt-4" name="login">Login</button>
		</form>
	</div>
	<footer>
		<div class="flinks">
			<a href="http://uip.melhamconstruction.ph/intern-application/">UIP Application</a>
			<a href="https://melhamconstruction.ph/">Melham Construction</a>
			<a href="http://anafara.com/">Anafara</a>
		</div>
		&copy; Copyright 2022 - Project-IT-25 - Melham Construction Interns
	</footer>
</body>
</html>