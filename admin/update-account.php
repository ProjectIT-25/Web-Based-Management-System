<?php 
include("../connection.php");

$id = $_GET['id'];
$getrecord = mysqli_query($connections, "SELECT * FROM accountstbl WHERE id = $id");


while ($row = mysqli_fetch_assoc($getrecord)) {
$id = $row['id'];
$team = $row['team'];
$userLvl = $row['UserLevel'];
$fname = $row['FirstName'];
$mname = $row['MiddleName'];
$lname = $row['LastName'];
$suffix = $row['Suffix'];
$email = $row['Email'];
$password = $row['Password'];
}
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
	<link rel="stylesheet" type="text/css" href="../css/update-account.css">
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
					<i class= "bx bx-grid-alt"></i>
					<span class="link-name">Home</span>
				</a>
			</li>
            <li>
                <a href="account-management.php">
                    <i class='bx bxs-user-detail text-white'></i>
                    <span class="link-name text-white">Accounts</span>
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
				<span class="dashboard">UPDATE ACCOUNT</span>
			</div>
			<div class="d-flex justify-content-center align-items-center">
				<span class="name">ADMIN USER</span>
			</div>
		</nav>

		<div class="container-fluid">
			<form method="POST">
				<div class="row">
					<div class="col-md-3">
						<label for="fname">First Name</label>
						<input class="form-control" type="text" name="fname" value="<?php echo $fname; ?>" placeholder="First Name"></input>
					</div>
					<div class="col-md-3">
						<label for="mname">Middle Name</label>
						<input class="form-control" type="text" name="mname" value="<?php echo $mname; ?>" placeholder="Middle Name"></input>
					</div>
					<div class="col-md-3">
						<label for="lname">Last Name</label>
						<input class="form-control" type="text" name="lname" value="<?php echo $lname; ?>" placeholder="Last Name"></input>
					</div>
					<div class="col-md-3">
						<label for="suffix">Suffix</label>
						<input class="form-control" type="text" name="suffix" value="<?php echo $suffix; ?>" placeholder="Suffix"></input>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<label for="team">Team</label>
						<input class="form-control" type="text" name="team" value="<?php echo $team; ?>" placeholder="Team"></input>
					</div>
					<div class="col-md-6">
						<label for="UserLevel">User Level</label>
						<select name="UserLevel" class="form-control">
							<option value="0" <?php if ($userLvl == 0) {echo 'selected';} ?>>Admin</option>
							<option value="1" <?php if ($userLvl == 1) {echo 'selected';} ?>>Intern</option>
						</select>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<label for="email">Email</label>
						<input class="form-control" type="email" name="email" value="<?php echo $email; ?>" placeholder="Email"></input>
					</div>
					<div class="col-md-6">
						<label for="password">Password</label>
						<input class="form-control" type="text" name="password" value="<?php echo $password; ?>" placeholder="Password"></input>
					</div>
				</div>
				<button class="btn btn-block btn-warning mt-4" type="submit" name="update">Update</button>
			</form>
			<?php 
			
			if(isset($_POST['update'])){

			$new_fname = $_POST['fname'];
			$new_mname = $_POST['mname'];
			$new_lname = $_POST['lname'];
			$new_suffix = $_POST['suffix'];
			$new_team = $_POST['team'];
			$new_email = $_POST['email'];
			$new_password = $_POST['password'];
			$new_userLvl = $_POST['UserLevel'];

			mysqli_query($connections, "UPDATE accountstbl SET FirstName='$new_fname',MiddleName='$new_mname',LastName='$new_lname',Suffix='$new_suffix',team='$new_team',Email='$new_email',Password='$new_password',Userlevel='$new_userLvl' WHERE id='$id'");
			echo "<script>window.location.href='account-management.php';</script>";
		}

		?>	
	</div>
</section>

<!-- BOOTSTRAP JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://www.kryogenix.org/code/browser/sorttable/sorttable.js"></script>
<!-- LOCAL JS -->
<script type="text/javascript" src="sidebar.js"></script>
</body>
</html>