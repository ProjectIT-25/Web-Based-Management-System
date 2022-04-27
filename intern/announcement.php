<!DOCTYPE html>
<?php include("../connection.php");
session_start();

 if (!isset($_SESSION['id']))
  {
    if (!isset($_SESSION['Email']))
    {
     echo "<script type='text/javascript'>alert('You must login first!');</script>";
     echo "<script type='text/javascript'> document.location = '../index.php'; </script>";
}
}

if($_SESSION["UserLevel"] == 0 ){  
header("location:javascript://history.go(-1)"); //return to previous page
} 
?>
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
  <link rel="stylesheet" type="text/css" href="../css/announcements.css?v">
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
    <div class="container-fluid px-4">
      <div class="row g3 my-3">
        <div class="col-md-6 overview">
          <div class="tab-content">
            <div class="tab-pane fade in active show" id="announce">
              <?php
              $result = mysqli_query($connections, "SELECT * FROM announcementtbl WHERE AnnouncementType = 0 AND Date <= NOW() ORDER BY Date DESC LIMIT 1");

              if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                  $team = $row['team'];
                  $title = $row['title'];
                  $content = $row['content'];
                  $date = $row['Date'];
                  $date = date_format(new DateTime($date), 'F d, Y, h:i A');


                  echo '<h1 class="text-center">Announcement</h1>
                  <div class="card">
                  <div class="card-header text-white" style="background: #00243E;">
                  <strong>'.$title.'</strong>
                  </div>
                  <div class="card-body">
                  <h5 class="card-title">'.nl2br($content).'</h5>
                  </div>
                  <div class="card-footer text-white" style="background: #778899;">
                  <strong>'.$date.'</strong>
                  </div>
                  </div>';
                }
              }
              ?>
            </div>
            <div class="tab-pane fade in" id="event">
              <?php
              $result = mysqli_query($connections, "SELECT * FROM announcementtbl WHERE AnnouncementType = 1 AND Schedule >= NOW() ORDER BY Schedule ASC LIMIT 1");

              if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                  $team = $row['team'];
                  $title = $row['title'];
                  $content = $row['content'];
                  $schedule = $row['Schedule'];
                  $schedule = date_format(new DateTime($schedule), 'F d, Y, h:i A');


                  echo '<h1 class="text-center">Event</h1>
                  <div class="card">
                  <div class="card-header text-white" style="background: #00243E;">
                  <strong>'.$title.'</strong>
                  </div>
                  <div class="card-body">
                  <h5 class="card-title">'.nl2br($content).'</h5>
                  </div>
                  <div class="card-footer text-white" style="background: #778899;">
                  <strong>'.$schedule.'</strong>
                  </div>
                  </div>';
                }
              }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- TABS START -->
    <div class="container px-4">
      <div class="row px-4">
        <div class="col-md-6 overview">
          <ul class="nav nav-pills nav-fill" role="tablist">
            <li class="nav-item active">
              <a id="announceclick" data-toggle="tab" role="tab" href="#announce" hidden>Announcement</a>
              <a class="nav-link show" data-toggle="tab" role="tab" href="#announcement" onclick="topannounce()">Announcement</a>
              <script type="text/javascript">
                function topannounce(){
                  document.getElementById('announceclick').click();
                }
              </script>
            </li>
            <li class="nav-item">
              <a id="eventclick" data-toggle="tab" role="tab" href="#event" hidden>Events</a>
              <a class="nav-link" data-toggle="tab" role="tab" href="#events" onclick="topevent()">Events</a>
              <script type="text/javascript">
                function topevent(){
                  document.getElementById('eventclick').click();
                }
              </script>
            </li>
          </ul>
        </div>
      </div>

      <hr>
      <!-- TABS END -->
      <!-- TABS CONTENT START -->
      <div class="tab-content">
        <!-- ANNOUNCEMENTS CONTENT START -->
        <div class="tab-pane fade in active" id="announcement" class="announce">
          <!-- ANNOUNCEMENT FEEDS START -->

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
              $team = $row['team'];
              $title = $row['title'];
              $content = $row['content'];
              $date = $row['Date'];
              $date = date_format(new DateTime($date), 'F d, Y, h:i A');


              echo '<div class="card">
              <div class="card-header text-white" style="background: #00243E;">
              <strong>'.$title.'</strong>
              </div>
              <div class="card-body">
              <h5 class="card-title">'.nl2br($content).'</h5>
              </div>
              <div class="card-footer text-white" style="background: #778899;">
              <strong>'.$date.'</strong>
              </div>
              </div>';
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
        <div class="tab-pane fade in" id="events" class="event">
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
              $team = $row['team'];
              $title = $row['title'];
              $content = $row['content'];
              $schedule = $row['Schedule'];
              $schedule = date_format(new DateTime($schedule), 'F d, Y, h:i A');

              echo '<div class="card">
              <div class="card-header text-white" style="background: #00243E;">
              <strong>'.$title.'</strong>
              </div>
              <div class="card-body">
              <h5 class="card-title">'.nl2br($content).'</h5>
              </div>
              <div class="card-footer text-white" style="background: #778899;">
              <strong>'.$schedule.'</strong>
              </div>
              </div>';
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

  <!-- BOOTSTRAP JS -->
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://www.kryogenix.org/code/browser/sorttable/sorttable.js"></script>
  <!-- LOCAL JS -->
  <script type="text/javascript" src="../js/sidebar.js"></script>
</body>
</html>