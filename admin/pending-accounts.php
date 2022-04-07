<?php 
include("../connection.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>MCC: Pending Accounts</title>
    <link type="image/png" rel="icon" href="../img/homeicon.png">
    <meta name="viewport" content="width=device-witdth, initial-scale=1.0">
    <!-- BOXICONS CDN -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <!-- FONTAWESOME CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- BOOTSTRAP 4 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- LOCAL CSS -->
    <link rel="stylesheet" type="text/css" href="../css/pending-accounts.css">


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
                    <i class= "bx bx-grid-alt"></i>
                    <span class="link-name">Home</span>
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
                <a href="../index.php">
                    <i class='bx bx-log-out'></i>
                    <span class="link-name">Logout</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- Main Content -->
    <section class="home-section">
        <nav>
            <div class="sidebar-button">
                <span class="dashboard">PENDING ACCOUNTS</span>
            </div>
            <div class="d-flex justify-content-center align-items-center">
                <span class="name">ADMIN USER</span>
            </div>
        </nav>

        <!-- PENDING ACCOUNTS CONTENT START -->
        <div class="container-fluid mt-4">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for Application ID" id="searchInput" onkeyup="searchFilter()">
                <div class="input-group-append">
                    <button class="btn btn-secondary" style="z-index: 0;">Search</button>
                </div>
            </div>
            <table class="table sortable table-responsive-md table-bordered bg-white rounded shadow-sm  table-striped text-center mt-4" id="pendingAccountsTbl">
                <thead class="thead-color" style="position: sticky; top: 0;">
                    <tr id="header">
                        <th scope="col">Application ID</th>
                        <th scope="col">Team</th>
                        <th scope="col">User Level</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Pasword</th>
                        <th scope="col" style="pointer-events: none; width: 200px;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- FETCHING DATA FROM TABLE START -->
                    <?php
                    $limit = 10;  
                    if (isset($_GET["page"])) {
                        $page  = $_GET["page"]; 
                    } 
                    else{ 
                        $page=1;
                    };  
                    $start_from = ($page-1) * $limit;  
                    $result = mysqli_query($connections, "SELECT * FROM pending_request_tbl");

                    if ($result) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $id = $row['id'];
                            $appID = $row['applicationID'];
                            $team = $row['team'];
                            $userLvl = $row['userLvl'];
                            $fname = $row['fname'];
                            $mname = $row['mname'];
                            $lname = $row['lname'];
                            $suffix = $row['suffix'];
                            $email = $row['email'];
                            $password = $row['password'];

                            if($userLvl == 0){
                                $userLvl1 = "Admin";
                            }
                            else{
                                $userLvl1 = "Intern";

                            }

                            $name = $fname.' '.$mname.' '.$lname.' '.$suffix;

                            echo ' <tr>
                            <td> '.$appID.' </td>
                            <td> '.$team.' </td>
                            <td> '.$userLvl1.' </td>
                            <td> '.$name.' </td>
                            <td> '.$email.' </td>
                            <td> '.$password.' </td>
                            <td><a  href="../accept_applicant.php?applicantID='.$id.'&team='.$team.'&userLvl='.$userLvl.'&fname='.$fname.'&mname='.$mname.'&lname='.$lname.'&suffix='.$suffix.'&email='.$email.'&password='.$password.'"><button class="btn btn-success">Accept</button></a>
                            <a onclick="javascript:confirmationDelete($(this));return false;" href="../reject_applicant.php?applicantID='.$id.'&appID='.$appID.'"><button class="btn btn-danger">Reject</button></a>
                            </td>
                            </tr> ';
                        }
                    }

                    ?>
                    <!-- FETCHING DATA FROM TABLE END -->
                    <!-- REJECT CONFIRMATION SCRIPT START -->
                    <script type="text/javascript">
                        function confirmationDelete(anchor)
                        {
                            var conf = confirm('Are you sure want to reject this applicant?');
                            if(conf)
                                window.location=anchor.attr("href");
                        }

                    </script>
                    <!-- REJECT CONFIRMATION SCRIPT END -->

                </tbody>
            </table>

            <div class="page d-flex justify-content-around"> <!-- AYAW GUMANA -->
                <?php

                $result_db = mysqli_query($connections,"SELECT COUNT(*) FROM pending_request_tbl"); 
                $row_db = mysqli_fetch_row($result_db);  
                $total_records = $row_db[0];  
                $total_pages = ceil($total_records / $limit); 
                /* echo  $total_pages; */
                ?>
                <strong>Page <?php echo $page." of ".$total_pages; ?></strong>
                <?php
                $pagLink = "<ul class='pagination'>";  
                for ($i=1; $i<=$total_pages; $i++) {
                  $pagLink .= "<li class='page-item'><a class='page-link' href='pending-accounts.php?page=".$i."'>".$i."</a></li>";   
              }
              echo $pagLink . "</ul>";  

              ?>
            </div>
        </div>
        <!-- PENDING ACCOUNTS CONTENT END -->
    </section>

    <!-- TABLSE SEARCH JS START -->
    <script>
        function searchFilter() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("searchInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("pendingAccountsTbl");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[1];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }       
            }


        }
    </script>
    <!-- TABLE SEARCH JS END -->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://www.kryogenix.org/code/browser/sorttable/sorttable.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- LOCAL JS -->
    <script type="text/javascript" src="../js/sidebar.js"></script>
</body>
</html>