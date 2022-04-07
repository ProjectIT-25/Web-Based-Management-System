<?php
include("../connection.php");

if (isset($_GET['deleteid'])) {
	$id=$_GET['deleteid'];
	$sql = "DELETE FROM accountstbl WHERE id=$id";
	$result = mysqli_query($connections, $sql);
	if ($result) {
		echo "Deleted Successfully";
		header('location: account-management.php');
	}else{
		die(mysqli_error($connections));
	}
}
?>