<?php 
error_reporting(E_ERROR);
include("../connection.php");
// REGISTER START
if(isset($_POST['post-announcement'])){
	// ASSIGNING VARIABLES
	$announcement_type = $_POST['announcement_type'];
	$team = $_POST['team'];
	$title = $_POST['title'];
	$content = $_POST['content'];
	$date = date_default_timezone_set('Asia/Manila');
	$date = date("Y-m-d H:i:s");
	$schedule = $_POST['Schedule'];

	$query = "INSERT INTO announcementtbl VALUES ('', '$announcement_type', '$team', '$title', '$content', '$date', '$schedule')";

	if ($announcement_type == 0) {
		mysqli_query($connections, $query);
		echo "<script>alert('Announcement has been published!');</script>";
		echo "<script>window.location.href='announcement.php';</script>";
	}

	if ($announcement_type == 1) {
		mysqli_query($connections, $query);
		echo "<script>alert('Event has been published!');</script>";
		echo "<script>window.location.href='announcement.php';</script>";
	}
}
// REGISTER END
?>