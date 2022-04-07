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


	$register = "INSERT INTO accountstbl VALUES ('', '$fname', '$mname', '$lname', '$suffix','$team', '$email', '$password', '$userLvl')";

	$name = $fname.' '.$mname.' '.$lname.' '.$suffix.' ';


	mysqli_query($connections, $register);
	#TOAST ALERT STARTS HERE#
	echo '
	<script type="text/javascript">setTimeout(function () { 
		const Toast = Swal.mixin({
			toast: true,
			position: "top-end",
			showConfirmButton: false,
			timer: 10000,
			timerProgressBar: true
			})
			Toast.fire({
				icon: "success",
				title: "'.$name.'is successfully registered as Admin!"

				}); 
				},100);</script><color=#ffffff>

				<script>window.location.href="sendmail.php?email='.$email.'&password='.$password.'&fname='.$fname.'";</script>';

				mysqli_query($connections, "DELETE FROM pending_request_tbl WHERE id=$id");

			}
			

			?>

			<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>