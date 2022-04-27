<?php
include("../connection.php");

if (isset($_GET['announcementID'])) {
	$ID=$_GET['announcementID'];
	$sql = "DELETE FROM announcementtbl WHERE Announcement_ID = $ID";
	$result=mysqli_query($connections, $sql);

	if ($result) {
		echo "Deleted Successfully";
		header('location: announcement.php');
	}else{
		die(mysqli_error($connections));
	}
}

if(isset($_POST['announcement-update'])){

	$id = $_POST['id'];
	$newtitle = $_POST['new-title'];
	$newcontent = $_POST['new-content'];
	$date = date_default_timezone_set('Asia/Manila');
	$date = date("Y-m-d H:i:s");


	mysqli_query($connections, "UPDATE announcementtbl SET title='$newtitle',content='$newcontent', Date='$date' WHERE Announcement_ID='$id'");
	echo "<script>window.location.href='announcement.php';</script>";
	
}


if(isset($_POST['event-update'])){

	$id = $_POST['id'];
	$newtitle = $_POST['new-title'];
	$newcontent = $_POST['new-content'];
	$newschedule = $_POST['newschedule'];

	mysqli_query($connections, "UPDATE announcementtbl SET title='$newtitle',content='$newcontent', Schedule='$newschedule' WHERE Announcement_ID='$id'");
	echo "<script>window.location.href='announcement.php';</script>";
	
}



?>