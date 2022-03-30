<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>MCC: File Dashboard</title>
    <link type="image/png" rel="icon" href="../img/homeicon.png">
    <meta name="viewport" content="width=device-witdth, initial-scale=1.0">
    <!-- BOXICONS CDN -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <!-- FONTAWESOME CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- BOOTSTRAP 4 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- LOCAL CSS -->
    <link rel="stylesheet" type="text/css" href="../css/a-filesdashboard.css">
  

</head>
<body>
    <div class="sidebar" style="border-right: 1px solid #003860;">
        <div class="menu-details">
            <i class='bx bx-menu sidebarBtn'></i>
            <span class="menu-name">Menu</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="#">
                    <i class= "bx bx-grid-alt text-white"></i>
                    <span class="link-name text-white">Home</span>
                </a>
            </li>
                <li>
                <a href="announcement.php">
                        <i class="fa-solid fa-bullhorn"></i> 
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
                <a href="#">
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
                <span class="dashboard">ADMIN DASHBOARD</span>
            </div>
            <!-- <div class="search-box">
                <input type="text" name="" placeholder="Search">
                <i class='bx bx-search'></i>
            </div> -->
            <div class="d-flex justify-content-center align-items-center">
                <span class="name">Admin</span>
            </div>
        </nav>

        <div class="container-fluid px-4">
            <div class="row g3 my-3">
                <div class="col-md-6 overview">
            <a href="announcement.php">
                        <div class="p-3 shadow-sm d-flex justify-content-around align-items-center rounded" style="background-color: #4682B4; margin:  18px;padding: 115px !important;">
                            <div>
                                <h1 class="fs-2 text-white">TODAY'S EVENT</h3>
                            </div>
                        </div>
            </a>
                    </div>
               
           <div class="col-md-6 overview">
           <canvas id="myChart" style="height:50px;max-width:650px"></canvas>
            </div>
         </div>
        </div>
        <!-- ATTENDANCE REPORT -->
        <div class="attendance-tab-header px-4">
            <div class="row">
                <div class="col-md-6">
                    <input type="text" name="" placeholder="Search">
                    <button>Search</button>
                </div> 
            </div>
        </div>
        <div class="col documents-table">
                        <table class="table sortable table-responsive-md table-bordered bg-white rounded shadow-sm  table-striped text-center">
                            <thead class="thead-color" style="position: sticky; top: 0;">
                                <tr>
                                    <th scope="col">Team</th>
                                    <th scope="col">File Owner</th>
                                    <th scope="col">File Name</th>
                                    <th scope="col">File Type</th>
                                    <th scope="col">File Size</th>
                                    <th scope="col">Last Date Modified</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="item">
                                    <td>Project-IT-12</td>
                                    <td>Julienne Pineda</td>
                                    <td>Brainstorming about Project Proposal</td>
                                    <td>PDF</td>     
                                    <td>0.9 MB</td>                              
                                    <td>03/09/2022</td>
                                    <td><a href="#"><i class="fa-solid fa-eye text-dark" style="font-size: 20px; "></i></a>
                                        <a href="#"><i class="fa-solid fa-trash text-dark" style="font-size: 20px;"></i></a></td>
                                </tr>
                                <tr class="item">
                                    <td>Project-IT-32</td>
                                    <td>Clarisse Berondo</td>
                                    <td>Progress Report Meeting Presentation</td>
                                    <td>PDF</td>
                                    <td>2.0 MB</td>
                                    <td>03/08/2022</td>
                                    <td><a href="#"><i class="fa-solid fa-eye text-dark" style="font-size: 20px;"></i></a>
                                        <a href="#"><i class="fa-solid fa-trash text-dark" style="font-size: 20px;"></i></a></td>
                                </tr>
                                <tr class="item">
                                    <td>Project-IT-6</td>
                                    <td>Norbert Baluya</td>
                                    <td>Preparation for Coding</td>
                                    <td>DOC</td>
                                    <td>1.2 MB</td>
                                    <td>03/07/2022</td>
                                    <td><a href="#"><i class="fa-solid fa-eye text-dark" style="font-size: 20px;"></i></a>
                                        <a href="#"><i class="fa-solid fa-trash text-dark" style="font-size: 20px;"></i></a></td>
                                </tr>
                                <tr class="item">
                                    <td>Project-IT-23</td>
                                    <td>Dave Pineda</td>
                                    <td>Group Meeting about Attendance Tracker</td>
                                    <td>PDF</td>
                                    <td>1.0 MB</td>
                                    <td>03/07/2022</td>

                                    <td><a href="#"><i class="fa-solid fa-eye text-dark" style="font-size: 20px;"></i></a>
                                        <a href="#"><i class="fa-solid fa-trash text-dark" style="font-size: 20px;"></i></a></td>
                                </tr>
                                <tr class="item">
                                    <td>Project-IT-25</td>
                                    <td>Dennis Jacob</td>
                                    <td>Meeting with IT Team</td>
                                    <td>ZIP</td>
                                    <td>2.5 MB</td>
                                    <td>03/06/2022</td>
                                    <td><a href="#"><i class="fa-solid fa-eye text-dark" style="font-size: 20px;"></i></a>
                                        <a href="#"><i class="fa-solid fa-trash text-dark" style="font-size: 20px;"></i></a></td>
                                </tr>
                                </tr>
                                <tr class="item">
                                    <td>Project-IT-1</td>
                                    <td>Jansen Oribello</td>
                                    <td>Mockup for Project Proposal</td>
                                    <td>PDF</td>
                                    <td>1.4 MB</td>
                                    <td>03/03/2022</td>
                                    <td><a href="#"><i class="fa-solid fa-eye text-dark" style="font-size: 20px;"></i></a>
                                        <a href="#"><i class="fa-solid fa-trash text-dark" style="font-size: 20px;"></i></a></td>
                                </tr>
                                </tr>
                                <tr class="item">
                                    <td>Project-IT-18</td>
                                    <td>Ruffa Mae Amparo</td>
                                    <td>How to get a job Webinar</td>
                                    <td>DOC</td>
                                    <td>0.9 MB</td>
                                    <td>03/02/2022</td>
                                    <td><a href="#"><i class="fa-solid fa-eye text-dark" style="font-size: 20px;"></i></a>
                                        <a href="#"><i class="fa-solid fa-trash text-dark" style="font-size: 20px;"></i></a></td>
                                </tr>
                                </tr>
                                <tr class="item">
                                    <td>Project-IT-10</td>
                                    <td>Marc Emil Mores</td>
                                    <td>Development of UIP Login Page</td>
                                    <td>PDF</td>
                                    <td>1 MB</td>
                                    <td>03/02/2022</td>
                                    <td><a href="#"><i class="fa-solid fa-eye text-dark" style="font-size: 20px;"></i></a>
                                        <a href="#"><i class="fa-solid fa-trash text-dark" style="font-size: 20px;"></i></a></td>
                                </tr>
                                </tr>
                                <tr class="item">
                                    <td>Project-IT-28</td>
                                    <td>Kylie Cuadra</td>
                                    <td>Creation of User Profile Page</td>
                                    <td>PDF</td>
                                    <td>1.1 MB</td>
                                    <td>03/01/2022</td>
                                    <td><a href="#"><i class="fa-solid fa-eye text-dark" style="font-size: 20px;"></i></a>
                                        <a href="#"><i class="fa-solid fa-trash text-dark" style="font-size: 20px;"></i></a></td>
                                </tr>
                                </tr>
                                <tr class="item">
                                    <td>Project-IT-25</td>
                                    <td>Renz Anacay</td>
                                    <td>Mockups for Web-Based System</td>
                                    <td>DOC</td>
                                    <td>0.8 MB</td>
                                    <td>02/28/2022</td>
                                    <td><a href="#"><i class="fa-solid fa-eye text-dark" style="font-size: 20px;"></i></a>
                                        <a href="#"><i class="fa-solid fa-trash text-dark" style="font-size: 20px;"></i></a></td>
                                </tr>
                                </tr>
                                <tr class="item">
                                    <td>Project-IT-4</td>
                                    <td>Jericho Banaga</td>
                                    <td>Project Proposal Presentation to Core Team</td>
                                    <td>DOC</td>
                                    <td>0.9 MB</td>
                                    <td>02/28/2022</td>
                                    <td><a href="#"><i class="fa-solid fa-eye text-dark" style="font-size: 20px;"></i></a>
                                        <a href="#"><i class="fa-solid fa-trash text-dark" style="font-size: 20px;"></i></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
    </section>
    <footer>&copy; Copyright 2022 - Project-IT-25 - Melham Construction Interns</footer>
    <!-- CHART JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js">
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
    <script type="text/javascript" src="../js/graph.js"></script>
</body>
</html>