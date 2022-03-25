<?php
include("connection.php");

if (isset($_GET['deleteid'])) {
	$File_ID=$_GET['deleteid'];
	$sql = "INSERT INTO recycletbl SELECT * FROM filetbl WHERE File_ID = $File_ID";
	$result = mysqli_query($connections, $sql);
	if ($result) {
		$date_removed = date('Y-m-d H:i:s');
		$expiraton = date('Y-m-d H:i:s', strtotime('+7 days'));
		mysqli_query($connections, "UPDATE recycletbl SET LastModified = '".$date_removed."', Expiration = '".$expiraton."' WHERE File_ID = '".$File_ID."'");
		mysqli_query($connections, "DELETE FROM filetbl WHERE File_ID=$File_ID");
		echo "Deleted Successfully";
		header('location: intern/mcc-files.php');
	}else{
		die(mysqli_error($connections));
	}
}
?>