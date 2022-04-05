<?php
include("connection.php");

if (isset($_GET['applicantID'])) {
	$id=$_GET['applicantID'];
	$applicantID = $_GET['appID'];

	$sql = "DELETE FROM pending_request_tbl WHERE id=$id";
	$result = mysqli_query($connections, $sql);
	if ($result) {
		echo "<script>alert('Applicant ID: ".$applicantID." is rejected!');</script>";
		echo "<script>window.location.href='admin/pending-accounts.php';</script>";
	}else{
		die(mysqli_error($connections));
	}
}	
?>