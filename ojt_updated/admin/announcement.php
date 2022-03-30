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
	<link rel="stylesheet" type="text/css" href="../css/a-announcements.css">
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
				<a href="#">
					<i class='bx bx-log-out'></i>
					<span class="link-name">Logout</span>
				</a>
			</li>
		</ul>
	</div>
		<form action="/html/tags/html_form_tag_action.cfm" method="post">
			<form>  
				<label> Select Team: </label>  
				<select>  
					<option value = "Project-IT-1"> Group 1   
					</option>  
					<option value = "Project-IT-2"> Group 2   
					</option>  
					<option value = "Project-IT-3"> Group 3  
					</option>  
					<option value = "Project-IT-4"> Group 4  
					</option>  
				</select> 

				<!-- ENDING OF ANNOUNCMENT & EVENTS PUBLISH -->
				<!-- PUBLISH & CLEAR -->
				<button class="button">Submit</button>
				<button class="button1">Clear</button>
			</form>  
		</form>  
	</div>
	<!-- SIDEBAR END -->
	<!-- TOPBAR START AND SECTION START -->
	<section class="home-section">
		<nav class="">
			<div class="sidebar-button">
				<span class="dashboard">ANNOUNCEMENTS</span>
			</div>

			<div class="d-flex justify-content-center align-items-center">

				<span class="name">Admin</span>
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
						<form action="announcement.php" method="GET">
							<div class="form-group">
								<label for="announcement-title">Announcement Title</label>
								<input class="form-control" type="text" name="announcement-title" placeholder="Announcement Title">
							</div>
							<label for="compose-announcement">Compose Anouncement</label>
							<textarea class="form-control" name="compose-announcement" placeholder="Description"></textarea>
						</div>
						<div class="modal-footer">
							<select class="mr-auto" style="width: 30%;">
								<option disabled selected>Select a team</option>
    							<option value="">Project-IT-25</option>
							</select>
							<button type="submit" class="btn btn-primary">Publish</button>
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						</div>	
						<h1>Date: <?php date_default_timezone_set('Asia/Manila'); echo date('F d, Y, h:i A'); ?></h1>
						<h1>Announcement Title: <?php echo $_GET["announcement-title"]; ?></h1>
						<h1>Announcement Content: <?php echo $_GET["compose-announcement"]; ?></h1>
					</form>
				</div>
					
			</div>
		</div>
		<!-- COMPOSE ANNOUNCEMENT END -->
		
		<!-- COMPOSE EVENT START -->
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
						<form action="announcement.php" method="GET">
							<div class="form-group">
								<label for="event-title">Event Title</label>
								<input class="form-control" type="text" name="event-title" placeholder="Event Title">
							</div>
							<div class="form-group">
								<label for="schedule">Schedule</label>
								<input class="form-control" type="datetime-local" name="schedule">
							</div>
							<label for="compose-event">Compose Event</label>
							<textarea class="form-control" name="compose-event" placeholder="Description"></textarea>
						</div>
						<div class="modal-footer">
							<button type="submit" class="btn btn-primary">Publish</button>
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						</div>
						<h1>Date: <?php date_default_timezone_set('Asia/Manila'); echo date('F d, Y, h:i A'); ?></h1>
						<h1>Event Title: <?php echo $_GET["event-title"]; ?></h1>
						<h1>Schedule: <?php echo $_GET["schedule"]; ?></h1>
						<h1>Event Description: <?php echo $_GET["compose-event"]; ?></h1>
					</form>
				</div>
			</div>
		</div>
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
				<div class="card">
					<div class="card-header">
						<strong><?php echo $_GET["announcement-title"]; ?></strong>
						<span class="dropleft">
							<i class="fa-solid fa-ellipsis drop" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
							<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
								<a class="dropdown-item" href="#">Edit</a>
								<a class="dropdown-item" href="#">Delete</a>
							</div>
						</span>
					</div>
					<div class="card-body">
						<h5 class="card-title"><?php echo $_GET["compose-announcement"]; ?></h5>
					</div>
					<div class="card-footer text-muted">
					<?php date_default_timezone_set('Asia/Manila'); echo date('F d, Y, h:i A'); ?>
					</div>
				</div>
			</div>
			<!-- ANNOUNCEMENT FEEDS END -->
			<!-- EVENT FEEDS START -->
			<div id="event-feed" class="tabcontent">
				<div class="card">
					<div class="card-header">
						<strong><?php echo $_GET["event-title"]; ?></strong>
						<span class="dropleft">
							<i class="fa-solid fa-ellipsis" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
							<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
								<a class="dropdown-item" href="#">Edit</a>
								<a class="dropdown-item" href="#">Delete</a>
							</div>
						</span>
					</div>
					<div class="card-body">
						<h5 class="card-title"><?php echo $_GET["compose-event"]; ?></h5>
					</div>
					<div class="card-footer text-muted">
						<?php echo $_GET["schedule"]; ?>
					</div>
				</div>
			</div>
			<!-- EVENT FEEDS END -->
			</div>
		</div>
	</section>
	<!-- SECTION END -->

	<!-- FOOTER -->
	<footer>&copy; Copyright 2022 - Project-IT-25 - Melham Construction Interns</footer>
	
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

