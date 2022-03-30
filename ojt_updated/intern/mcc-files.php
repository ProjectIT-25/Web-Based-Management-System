<?php 
include("../connection.php");
   
        ?>
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
    <span class="dashboard">INTERN DASHBOARD</span>
</div>
            <!-- <div class="search-box">
                <input type="text" name="" placeholder="Search">
                <i class='bx bx-search'></i>
            </div> -->
            <div class="d-flex justify-content-center align-items-center">
                <span class="name">Intern</span>
            </div>
        </nav>

        <div class="container-fluid px-4">
            <div class="row g3 my-3">
                <div class="col-md-6 overview">
                   <a href="announcement.php">
                    <div class="p-3 shadow-sm d-flex justify-content-around align-items-center rounded" style="background-color: #6990F2; padding: 36px !important;">
                        <div>
                            <h3 class="fs-2 text-white">ANNOUNCEMENT AND EVENTS</h3>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 overview">
                <div class="shadow-sm d-flex justify-content-around align-items-center rounded">
                    <div class="wrapper" style="height: 117px;">
                        <form method="post" enctype="multipart/form-data">
                            <input type="file" name="file" id="files">
                            <button type="submit" name="upload">UPLOAD</button>
                        </form>
                    </div>    
                </div>
            </div>
        </div>
    </div>
    <!-- SEARCH FILE FUNCTION -->
    <div class="attendance-tab-header px-4">
        <div class="row">
            <div class="col-md-6">
                <input type="date">
            </div> 
            <div class="col-md-6 d-flex justify-content-end">
                <input type="text" id="Search" onkeyup = "tblFunction()" placeholder = "Search">
            </div>
        </div>
    </div>
    <!-- TABLE -->
    <div class="col documents-table">
        <table class='table sortable table-responsive-md table-bordered bg-white rounded shadow-sm  table-striped text-center' id="Table">

            <thead class='thead-color' style='position: sticky; top: 0;'>
                <tr>
                    <th>File Name</th>
                    <th>File Type</th>
                    <th>File Size</th>
                    <th>Last Date Modified</th> 

                    <th style="pointer-events: none;">Action</th>

                </tr>
            </thead>
            <tbody>

                <?php
                function formatSizeUnits($bytes) { 
                    if ($bytes >= 1024) {
                        $bytes = number_format($bytes / 1024, 2) . ' MB'; 
                    } elseif ($bytes >= 0) {
                        $bytes = number_format($bytes, 2) . ' KB'; 
                    } else { 
                        $bytes = '0 bytes';
                    } return $bytes; 
                }

                $result = mysqli_query($connections, "SELECT * FROM filetbl");
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)){
                        $File_ID = $row['File_ID'];
                        $FileName = $row['FileName'];
                        $FileType = $row['FileType'];
                        $FileSize = $row['FileSize'];
                        $LastModified = $row['LastModified'];
                        $expiration_date = $row['Expiration'];
                        

                        echo ' <tr>
                        <td> '.$FileName.' </td>
                        <td> '.$FileType.' </td>
                        <td> '.formatSizeUnits($FileSize).' </td>
                        <td> '.$LastModified.' </td>
                        <td class="mx-auto d-flex justify-content-around"><a href="#"><i class="fa-solid fa-eye text-dark" style="font-size: 20px;"></i></a>
                        <a onclick="javascript:confirmationDelete($(this));return false;" href="../delete.php?deleteid='.$File_ID.'"><i class="fa-solid fa-trash text-dark" style="font-size: 20px;"></i></a></td>
                        </tr> ';

                        // DELETE IF FILE EXPIRED
                        $dateToday = date('Y-m-d H:i:s');
                        if($dateToday >= $expiration_date){
                            mysqli_query($connections, "DELETE FROM recycletbl WHERE Expiration = '".$dateToday."'");
                        }

                    }

        }
        ?>
        <!-- DELETE CONFIRMATION SCRIPT START -->
        <script type="text/javascript">
            function confirmationDelete(anchor)
            {
             var conf = confirm('Are you sure want to delete this file?');
             if(conf)
              window.location=anchor.attr("href");
      }

  </script>
  <!-- DELETE CONFIRMATION SCRIPT END -->
</tbody>
</table>
</div>
</div>
</section>


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
<script type="text/javascript" src="../js/update-modal.js"></script>
<script type="text/javascript" src="../js/search.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>

<?php
if(isset($_POST['upload']))
{   

    $file = $_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
    $file_size = $_FILES['file']['size'];
    $folder="../upload/";
    $extension = pathinfo($file, PATHINFO_EXTENSION);
    $LastModified = date('Y-m-d H:i:s');
    $expiration = date('Y-m-d H:i:s', strtotime('+30 days'));

    if ($extension == "docx"){
        $file_type = "Word Document";
    } 
    elseif ($extension == "pdf"){
        $file_type = "PDF";
    } 
    elseif ($extension == "pptx"){
        $file_type = "Powerpoint Presentation";
    } 
    elseif ($extension == "txt"){
        $file_type = "Text File";
    }
    else{
        $file_type = strtoupper($extension);
    }
    
    /* new file size in KB */
    $new_size = $file_size/1024;  
    /* new file size in KB */
    
    if(move_uploaded_file($file_loc,$folder.$file))
    {
        $sql="INSERT INTO filetbl(FileName,FileType,FileSize, LastModified, Expiration) VALUES('$file','$file_type','$new_size', '$LastModified', '$expiration')";
        mysqli_query($connections,$sql);
        
        echo "<script>window.location.href='mcc-files.php';
        alert('File Uploaded Successfully');</script>";
    }
    else
    {
        echo "<script>window.location.href='mcc-files.php';
        alert('Error! Please Try Again!');</script>";
    }
}
?>