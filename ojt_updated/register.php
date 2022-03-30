<?php 
include("connection.php");
// REGISTER START
if(isset($_REQUEST['register'])){
	// ASSIGNING VARIABLES
	$appNumber = mysqli_real_escape_string($connections, $_POST['appNumber']);
	$team = mysqli_real_escape_string($connections, $_POST['team']);
	$userLvl = mysqli_real_escape_string($connections, $_POST['userLvl']);
	$fname = mysqli_real_escape_string($connections, $_POST['fname']);
	$mname = mysqli_real_escape_string($connections, $_POST['mname']);
	$lname = mysqli_real_escape_string($connections, $_POST['lname']);
	$suffix = mysqli_real_escape_string($connections, $_POST['suffix']);
	$email = mysqli_real_escape_string($connections, $_POST['email']);
	$password = mysqli_real_escape_string($connections, $_POST['password']);
	$cpassword = mysqli_real_escape_string($connections, $_POST['cpassword']);

	$query = "INSERT INTO pending_request_tbl VALUES ('', '$appNumber', '$team', '$userLvl','$fname', '$mname', '$lname', '$suffix', '$email', '$password')";


	if ($password == $cpassword) {
		mysqli_query($connections, $query);
		echo "<script>alert('Account is registered! Wait for confirmation!');</script>";
		echo "<script>window.location.href='index.php';</script>";
	}

	if ($password !== $cpassword) {
		echo "<script>alert('Password not match!');</script>";
		echo "<script>window.location.href='index.php';</script>";
	}
}
// REGISTER END
?>