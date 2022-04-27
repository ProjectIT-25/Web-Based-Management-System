<?php 
include('../connection.php');
session_start();

 if (!isset($_SESSION['id']))
  {
    if (!isset($_SESSION['Email']))
    {
     echo "<script type='text/javascript'>alert('You must login first!');</script>";
     echo "<script type='text/javascript'> document.location = '../index.php'; </script>";
}
}
if($_SESSION["UserLevel"] == 1 ){  
header("location:javascript://history.go(-1)"); //return to previous page
} 
?>
<!DOCTYPE html>
<html>
<head>
	<title>MCC: Announcement & Events</title>
	<link type="image/png" rel="icon" href="../img/homeicon.png">
	<meta name="viewport" content="width=device-witdth, initial-scale=1.0">
	<!-- BOXICONS CDN -->
	<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
	<!-- FONTAWESOME CDN -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!-- BOOTSTRAP 4 CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<!-- BOOTSTRAP 3 CSS -->
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- LOCAL CSS -->
	<link rel="stylesheet" type="text/css" href="../css/a-announcements.css?v1">
</head>
<body>
	<!-- SIDEBAR START -->
	<div class="sidebar" style="border-right: 1px solid #003860;">
		<div class="menu-details">
			<i class='bx bx-menu sidebarBtn'></i>
			<span class="menu-name">Menu</span>
		</div>
		<ul class="nav-links">
			<li>
				<a href="mcc-files.php">
					<i class='bx bx-grid-alt'></i>
					<span class="link-name">Home</span>
				</a>
			</li>
			<li>
				<a href="account-management.php">
					<i class='bx bxs-user-detail'></i>
					<span class="link-name">Accounts</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class="fa-solid fa-bullhorn text-white"></i>
					<span class="link-name text-white">Announcements</span>
				</a>
			</li>
			<li>
				<a href="recycle-bin-dashboard.php">
					<i class="fa-solid fa-trash"></i>
					<span class="link-name">Recycle Bin</span>
				</a>
			</li>
			<li>
				<a href="../logout.php">
					<i class='bx bx-log-out'></i>
					<span class="link-name">Logout</span>
				</a>
			</li>
		</ul>
	</div>
	<!-- SIDEBAR END -->
	<!-- TOPBAR START AND SECTION START -->
	<section class="home-section">
		<nav class="">
			<div class="sidebar-button">
				<span class="dashboard">ANNOUNCEMENTS</span>
			</div>

			<div class="d-flex justify-content-center align-items-center">

				<span class="name"><?php echo $_SESSION['FirstName']?></span>
			</div>
		</nav>
		<!-- TOPBAR END -->
		<!-- TABS FOR POSTING START -->
		<div class="tab">
			<button type="button" data-toggle="modal" data-target="#Announcement">COMPOSE AN ANNOUNCEMENT</button>
		</div>
		<div class="tab">
			<button type="button" data-toggle="modal" data-target="#Event">COMPOSE AN EVENT</button>
		</div>
		<!-- TABS FOR POSTING END -->
		<!-- TABS TEXTFIELD START -->
		<!-- COMPOSE ANNOUNCEMENT START -->
		<form method="post" action="register-announcement.php">
			<div class="modal fade" id="Announcement" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="width: 100%;">
				<div class="modal-dialog modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLongTitle">Compose Announcement</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="form-group">
								<input type="number" name="announcement_type" value="0" hidden>
								<label for="title">Announcement Title</label>
								<input class="form-control" type="text" name="title" placeholder="Announcement Title">
							</div>
							<label for="content">Compose Anouncement</label>
							<textarea class="form-control" name="content" placeholder="Description"></textarea>
						</div>
						<div class="modal-footer">
							<select class="mr-auto" name="team" style="width: 30%;">
								<option disabled selected value="">Select a team</option>
								<option value="">Project-IT-25</option>
							</select>
							<button type="submit" class="btn btn-primary" name="post-announcement">Publish</button>
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
		</form>
		<!-- COMPOSE ANNOUNCEMENT END -->
		
		<!-- COMPOSE EVENT START -->
		<form  method="POST" action="register-announcement.php">
			<div class="modal fade" id="Event" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="width: 100%;">
				<div class="modal-dialog modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLongTitle">Compose Event</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">

							<div class="form-group">
								<input type="number" name="announcement_type" value="1" hidden>
								<label for="title">Event Title</label>
								<input class="form-control" type="text" name="title" placeholder="Event Title">
							</div>
							<div class="form-group">
								<label for="schedule">Schedule</label>
								<input class="form-control" type="datetime-local" name="Schedule">
							</div>
							<label for="content">Compose Event</label>
							<textarea class="form-control" name="content" placeholder="Description"></textarea>
						</div>
						<div class="modal-footer">
							<button type="submit" class="btn btn-primary" name="post-announcement">Publish</button>
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						</div>

					</div>
				</div>
			</div>
		</form>
		<!-- COMPOSE EVENT START -->
		<!-- TABS TEXTFIELD END -->
		<hr>
		<!-- TABS ANNOUNCEMENTS AND EVENTS -->
		<div class="container feeds">
			<form class="search-feed">
				<input type="date" name="">
				<input type="text" name="">
				<button>Search</button>
			</form>
			<hr>
			<div class="tab-feeds">
				<button class="tablinks active" onclick="tabs(event, 'announcement-feed')">ANNOUNCEMENTS</button>
				<button class="tablinks" onclick="tabs(event, 'event-feed')">EVENTS</button>
			</div>
			<!-- ANNOUNCEMENT FEEDS START -->
			<div id="announcement-feed" class="tabcontent" style="display: block;">
				<?php 

				// DATA LIMIT SET TO 5
				$limit = 5;  
				if (isset($_GET["announcement_page"])) {
					$announcement_page  = $_GET["announcement_page"]; 
				} 
				else{ 
					$announcement_page=1;
				};  
				$start_from = ($announcement_page-1) * $limit;  

				$result = mysqli_query($connections, "SELECT * FROM announcementtbl WHERE AnnouncementType = 0 ORDER BY Date DESC LIMIT $start_from, $limit");

				if ($result) {
					while ($row = mysqli_fetch_assoc($result)) {
						$announcementID = $row['Announcement_ID'];
						$team = $row['team'];
						$title = $row['title'];
						$content = $row['content'];
						$date = $row['Date'];
						$date = date_format(new DateTime($date), 'F d, Y, h:i A');


						echo '<div class="card">
						<div class="card-header text-white" style="background: #00243E;">
						<strong>'.$title.'</strong>
						<span class="dropleft">
						<i class="fa-solid fa-ellipsis drop" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
						<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						<a class="dropdown-item" href="#"  data-toggle="modal" data-target="#'.$announcementID.'">Edit</a>
						<a class="dropdown-item" href="announcement-management.php?announcementID='.$announcementID.'">Delete</a>
						</div>
						</span>
						</div>
						<div class="card-body">
						<h5>'.nl2br($content).'</h5>
						</div>
						<div class="card-footer text-white" style="background: #778899;">
						<strong>'.$date.'</strong>
						</div>
						</div>

						<form method="POST" action="announcement-management.php">
						<div class="modal fade" id="'.$announcementID.'" role="dialog">
						<input type="number" name="id" value="'.$announcementID.'" hidden></input>
						<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">
						<div class="modal-header" style="background: #00243E;">
						<h4 class="modal-title"><input type="text" name="new-title" value="'.$title.'"></h4>
						<button type="button" class="btn close text-white" data-dismiss="modal" aria-label="Close">&times;</button>
						</div>
						<div class="modal-body">
						<h5><textarea type="text" name="new-content" style="width: 100%;">'.nl2br($content).'</textarea></h5>
						</div>
						<div class="modal-footer">
						<button type="submit" class="btn btn-success" name="announcement-update">Update</button>
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
						</div>
						</div>
						
						</div>
						</form>';

						}
				}
				?>
				<!-- PAGINATION START -->
				<div class="page d-flex justify-content-around">
					<?php
					$result_db = mysqli_query($connections,"SELECT COUNT(*) FROM announcementtbl WHERE AnnouncementType = 0"); 
					$row_db = mysqli_fetch_row($result_db);  
					$total_records = $row_db[0];  
					$total_pages = ceil($total_records / $limit); 
					/* echo  $total_pages; */
					?>
					<strong>Page <?php echo $announcement_page." of ".$total_pages; ?></strong>
					<?php
					$pagLink = "<ul class='pagination'>";  
					for ($i=1; $i<=$total_pages; $i++) {
						$pagLink .= "<li class='page-item'><a class='page-link' href='announcement.php?announcement_page=".$i."'>".$i."</a></li>";   
					}
					echo $pagLink . "</ul>";  

					?>
				</div>
				<!-- PAGINATION END -->
			</div>
			<!-- ANNOUNCEMENT FEEDS END -->
			<!-- EVENT FEEDS START -->
			<div id="event-feed" class="tabcontent">
				<?php 

				// DATA LIMIT SET TO 5
				$limit = 5;  
				if (isset($_GET["event_page"])) {
					$event_page  = $_GET["event_page"]; 
				} 
				else{ 
					$event_page=1;
				};  
				$start_from = ($event_page-1) * $limit;

				$result = mysqli_query($connections, "SELECT * FROM announcementtbl WHERE AnnouncementType = 1 ORDER BY Schedule DESC LIMIT $start_from, $limit");

				if ($result) {
					while ($row = mysqli_fetch_assoc($result)) {
						$announcementID = $row['Announcement_ID'];
						$team = $row['team'];
						$title = $row['title'];
						$content = $row['content'];
						$schedule = $row['Schedule'];
						$schedule = date_format(new DateTime($schedule), 'F d, Y, h:i A');

						echo '<div class="card">
						<div class="card-header text-white" style="background: #00243E;">
						<strong>'.$title.'</strong>
						<span class="dropleft">
						<i class="fa-solid fa-ellipsis drop" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
						<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						<a class="dropdown-item" href="#"  data-toggle="modal" data-target="#'.$announcementID.'">Edit</a>
						<a class="dropdown-item" href="announcement-management.php?announcementID='.$announcementID.'">Delete</a>
						</div>
						</span>
						</div>
						<div class="card-body">
						<h5 class="card-title">'.nl2br($content).'</h5>
						</div>
						<div class="card-footer text-white" style="background: #778899;">
						<strong>'.$schedule.'</strong>
						</div>
						</div>

						<form method="POST" action="announcement-management.php">
						<div class="modal fade" id="'.$announcementID.'" role="dialog">
						<input type="number" name="id" value="'.$announcementID.'" hidden></input>
						<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">
						<div class="modal-header" style="background: #00243E;">
						<h4 class="modal-title"><input type="text" name="new-title" value="'.$title.'"></h4>
						<button type="button" class="btn close text-white" data-dismiss="modal" aria-label="Close">&times;</button>
						</div>
						<div class="modal-body">
						<h5><textarea type="text" name="new-content" style="width: 100%;">'.nl2br($content).'</textarea></h5>
						</div>
						<div class="modal-footer">
						<input class="mr-auto date" type="datetime-local" name="newschedule" value="'.date("Y-m-d\TH:i:s", strtotime($schedule)).'">
						<button type="submit" class="btn btn-success" name="event-update">Update</button>
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
						</div>
						</div>
						</div>
						</form>';

					}
				}
				?>
				<!-- PAGINATION START -->
				<div class="page d-flex justify-content-around">
					<?php
					$result_db = mysqli_query($connections,"SELECT COUNT(*) FROM announcementtbl WHERE AnnouncementType = 1"); 
					$row_db = mysqli_fetch_row($result_db);  
					$total_records = $row_db[0];  
					$total_pages = ceil($total_records / $limit); 
					/* echo  $total_pages; */
					?>
					<strong>Page <?php echo $event_page." of ".$total_pages; ?></strong>
					<?php
					$pagLink = "<ul class='pagination'>";  
					for ($i=1; $i<=$total_pages; $i++) {
						$pagLink .= "<li class='page-item'><a class='page-link' href='announcement.php?event_page=".$i."'>".$i."</a></li>";   
					}
					echo $pagLink . "</ul>";  
					?>
				</div>
				<!-- PAGINATION END -->
			</div>
			<!-- EVENT FEEDS END -->
		</div>
	</div>
</section>
<!-- SECTION END -->

<!-- FOOTER -->
<!-- <footer>&copy; Copyright 2022 - Project-IT-25 - Melham Construction Interns</footer> -->

<!-- BOOTSTRAP JS -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://www.kryogenix.org/code/browser/sorttable/sorttable.js"></script>
<!-- LOCAL JS -->
<script type="text/javascript" src="../js/sidebar.js"></script>
<script type="text/javascript" src="../js/tabswitch.js"></script>
</body>
</html>