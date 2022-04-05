<?php
include("connection.php");

if (isset($_GET['applicantID'])) {
	$id=$_GET['applicantID'];
	$team=$_GET['team'];
	$fname=$_GET['fname'];
	$mname=$_GET['mname'];
	$lname=$_GET['lname'];
	$suffix=$_GET['suffix'];
	$email=$_GET['email'];
	$password=$_GET['password'];
	$userLvl=$_GET['userLvl'];


	$admin = "INSERT INTO admintbl VALUES ('', '$fname', '$mname', '$lname', '$suffix', '$email', '$password', '$userLvl')";
	$intern = "INSERT INTO interntbl VALUES ('', '$fname', '$mname', '$lname', '$suffix','$team', '$email', '$password', '$userLvl')";

	$name = $fname.' '.$mname.' '.$lname.' '.$suffix;

	if ($userLvl == 0) {
		mysqli_query($connections, $admin);
		echo "<script>alert('".$name." is registered as Admin!');</script>";
		mysqli_query($connections, "DELETE FROM pending_request_tbl WHERE id=$id");
		echo '<script>window.location.href="sendmail.php?email='.$email.'&password='.$password.'&fname='.$fname.'";</script>';

	}
	else{
		mysqli_query($connections, $intern);
		echo "<script>alert('".$name." is registered as Intern!');</script>";
		mysqli_query($connections, "DELETE FROM pending_request_tbl WHERE id=$id");
		echo '<script>window.location.href="sendmail.php?email='.$email.'&password='.$password.'&fname='.$fname.'";</script>';

	}

	 
}
?>
















