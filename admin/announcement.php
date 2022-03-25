<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>UIP Dashboard</title>
	<meta name="viewport" content="width=device-witdth, initial-scale=1.0">
	<!-- BOXICONS CDN -->
	<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
	<!-- FONTAWESOME CDN -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!-- BOOTSTRAP 4 CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<!-- LOCAL CSS -->
	<link rel="stylesheet" type="text/css" href="../css/filesdashboard.css">
</head>
<body>
	<div class="sidebar" style="border-right: 1px solid #003860;">
		<div class="menu-details">
			<i class='bx bx-menu sidebarBtn'></i>
			<span class="menu-name">Menu</span>
		</div>
		<ul class="nav-links">
			<li>
				<a href="mcc-files.php">
					<i class='bx bx-grid-alt'></i>
					<span class="link-name">Files</span>
				</a>
			</li>
      			<li>
				<a href="#">
				        <i class="fa-solid fa-bullhorn text-white"></i>">
					<span class="link-name">Announcements</span>
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
	<!-- Main Content -->
	<section class="home-section">
		<nav class="">
			<div class="sidebar-button">
				<span class="dashboard">DASHBOARD</span>
			</div>
			<!-- <div class="search-box">
				<input type="text" name="" placeholder="Search">
				<i class='bx bx-search'></i>
			</div> -->
			<div class="d-flex justify-content-center align-items-center">
                <a href="#" style="color: #ED682A;"><i class="fa-solid fa-bullhorn mr-4"></i></a>
				<span class="name">INTERN</span>
			</div>
		</nav>
		<div class="container-fluid px-4">
		<div class="col-md-6 overview">			
     			 <ul class="nav nav-pills" role="tablist">
				 <div class="row g3 my-3">
       				 <li class="active">
				 <div class="p-3 shadow-sm d-flex justify-content-around align-items-center rounded" style="background-color: #00243e; padding: 36px !important;">
         			 <a data-toggle="tab" href="#tab1" role="tab"><h3 class="fs-2 text-white">Announcements</a>
			</div>
			</div>
       			 </li> 
      	  		<li>
				<div class="row g3 my-3">
				<div class="p-3 shadow-sm d-flex justify-content-around align-items-center rounded" style="background-color: #00243e; padding: 36px !important;">
          			<a data-toggle="tab" href="#tab2" role="tab"><h3 class="fs-2 text-white">Events</a>
			</div>
			</div>
			</div>
        		</li>
     			 </ul>
    		</div>
            </div>
		</div>
		<!-- ATTENDANCE REPORT -->
		<div class="attendance-tab-header px-4">
            <div class="row">
                <div class="col-md-6">
                    <input type="date">
                </div> 
                <div class="col-md-6 d-flex justify-content-end">
                    <input type="text" name="" placeholder="Search">
                    <button>Search</button>
                </div>
            </div>
        </div>
	<footer>&copy; Copyright 2022 - Project-IT-25 - Melham Construction Interns</footer>
	<!-- CHART JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@0.7.0"></script>
	<!-- BOOTSTRAP JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="https://www.kryogenix.org/code/browser/sorttable/sorttable.js"></script>
	<!-- LOCAL JS -->
    <script type="text/javascript" src="../js/sidebar.js"></script>
	<script type="text/javascript" src="piechart.js"></script>
</body>
</html>