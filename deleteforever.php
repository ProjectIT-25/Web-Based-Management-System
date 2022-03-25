<?php
include("connection.php");

if (isset($_GET['deleteid'])) {
	$File_ID=$_GET['deleteid'];
	$sql = "DELETE FROM recycletbl WHERE File_ID=$File_ID";
	$result = mysqli_query($connections, $sql);
	if ($result) {
		echo "Deleted Successfully";
		header('location: intern/recycle-bin-dashboard.php');
	}else{
		die(mysqli_error($connections));
	}
}
?>