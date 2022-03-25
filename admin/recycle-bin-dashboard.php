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
	<link rel="stylesheet" type="text/css" href="../css/recycle-bin.css">
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
				<a href="announcement.php">
				        <i class="fa-solid fa-bullhorn"></i>
					<span class="link-name">Announcements</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class="fa-solid fa-trash text-white"></i>
					<span class="link-name text-white">Recycle Bin</span>
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
				<span class="dashboard">RECYCLE BIN</span>
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


		<!-- HOME CONTENTS -->
		<div class="center container-fluid px-4">
			<div class="row g3 my-3">
				<div class="col-md-6 overview">
					<div class="p-3 shadow-sm d-flex justify-content-around align-items-center rounded text-white" style="background: #6990F2">
						<div>
							<h3 class="fs-2">42069</h3>
							<p class="fs-3">Deleted Files</p>
						</div>
						<i class="fa-solid fa-file text-white p-3" style="font-size: 40px;"></i>
					</div>
				</div>
                <div class="col-md-6 overview">
                </div>
			</div>
		</div>
		
	<!-- ATTENDANCE REPORT -->	
	<div class="trash-tab-header px-4">
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
		<div class="col px-4 trash-table">
                        <table class="table sortable table-responsive-md table-bordered bg-white rounded shadow-sm  table-striped text-center">
                            <thead class="thead-color">
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">File Name</th>
                                    <th scope="col">File Type</th>
                                    <th scope="col">Date Removed</th>
                                    <th scope="col">File Size</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>01</td>
                                    <td>Project-IT-02</td>
                                    <td>.pptx</td>
                                    <td>March 11, 2022</td>
                                    <td>69KB</td>
                                    <td>
                                    	<a href="">
                                    		<i class="fa-solid fa-trash-can text-dark"></i>
                                    	</a>
                                    	<a href="">
                                    		<i class="fa-solid fa-clock-rotate-left text-dark"></i>
                                    	</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>02</td>
                                    <td>Application_Letter</td>
                                    <td>.pdf</td>
                                    <td>March 13, 2022</td>
                                    <td>69KB</td>
                                    <td>
                                    	<a href="">
                                    		<i class="fa-solid fa-trash-can text-dark"></i>
                                    	</a>
                                    	<a href="">
                                    		<i class="fa-solid fa-clock-rotate-left text-dark"></i>
                                    	</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>03</td>
                                    <td>Resume</td>
                                    <td>.pdf</td>
                                    <td>March 10, 2022</td>
                                    <td>69KB</td>
                                    <td>
                                    	<a href="">
                                    		<i class="fa-solid fa-trash-can text-dark"></i>
                                    	</a>
                                    	<a href="">
                                    		<i class="fa-solid fa-clock-rotate-left text-dark"></i>
                                    	</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>04</td>
                                    <td>Codes</td>
                                    <td>.zip</td>
                                    <td>March 14, 2022</td>
                                    <td>69KB</td>
                                    <td>
                                    	<a href="">
                                    		<i class="fa-solid fa-trash-can text-dark"></i>
                                    	</a>
                                    	<a href="">
                                    		<i class="fa-solid fa-clock-rotate-left text-dark"></i>
                                    	</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>05</td>
                                    <td>Codes</td>
                                    <td>.zip</td>
                                    <td>March 14, 2022</td>
                                    <td>69KB</td>
                                    <td>
                                    	<a href="">
                                    		<i class="fa-solid fa-trash-can text-dark"></i>
                                    	</a>
                                    	<a href="">
                                    		<i class="fa-solid fa-clock-rotate-left text-dark"></i>
                                    	</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>06</td>
                                    <td>Codes</td>
                                    <td>.zip</td>
                                    <td>March 16, 2022</td>
                                    <td>1MB</td>
                                    <td>
                                    	<a href="">
                                    		<i class="fa-solid fa-trash-can text-dark"></i>
                                    	</a>
                                    	<a href="">
                                    		<i class="fa-solid fa-clock-rotate-left text-dark"></i>
                                    	</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>07</td>
                                    <td>Resume</td>
                                    <td>.pdf</td>
                                    <td>March 18, 2022</td>
                                    <td>69KB</td>
                                    <td>
                                    	<a href="">
                                    		<i class="fa-solid fa-trash-can text-dark"></i>
                                    	</a>
                                    	<a href="">
                                    		<i class="fa-solid fa-clock-rotate-left text-dark"></i>
                                    	</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
	</section>

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://www.kryogenix.org/code/browser/sorttable/sorttable.js"></script>
	<!-- LOCAL JS -->
	<script type="text/javascript" src="../js/sidebar.js"></script>
	<script type="text/javascript" src="../js/trash-pie-chart.js"></script>

</body>
</html>