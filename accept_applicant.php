<?php
include("connection.php");

if (isset($_GET['applicantID'])) {
	$id=$_GET['applicantID'];
	$team=$_GET['team'];
	$fname=$_GET['fname'];
	$mname=$_GET['mname'];
	$lname=$_GET['lname'];
	$suffix=$_GET['suffix'];
	$email=$_GET['email'];
	$password=$_GET['password'];
	$userLvl=$_GET['userLvl'];


	$admin = "INSERT INTO admintbl VALUES ('', '$fname', '$mname', '$lname', '$suffix', '$email', '$password', '$userLvl')";
	$intern = "INSERT INTO interntbl VALUES ('', '$fname', '$mname', '$lname', '$suffix','$team', '$email', '$password', '$userLvl')";

	$name = $fname.' '.$mname.' '.$lname.' '.$suffix;

	if ($userLvl == 0) {
		mysqli_query($connections, $admin);
		echo "<script>alert('".$name." is registered as Admin!');</script>";
		echo "<script>window.location.href='admin/pending-accounts.php';</script>";
		mysqli_query($connections, "DELETE FROM pending_request_tbl WHERE id=$id");

	}
	else{
		mysqli_query($connections, $intern);
		echo "<script>alert('".$name." is registered as Intern!');</script>";
		echo "<script>window.location.href='admin/pending-accounts.php';</script>";
		mysqli_query($connections, "DELETE FROM pending_request_tbl WHERE id=$id");
	}

	require("PHPMailer/src/PHPMailer.php");
    require("PHPMailer/src/SMTP.php");
    require("PHPMailer/src/Exception.php");

    $phpmailer = new PHPMailer\PHPMailer\PHPMailer();
    $phpmailer->IsSMTP(); 

    $phpmailer->CharSet="UTF-8";
    $phpmailer->Host = "smtp.gmail.com";
    $phpmailer->Port = 465; //465 or 587

    $phpmailer->SMTPSecure = 'ssl';  
    $phpmailer->SMTPAuth = true; 
    $phpmailer->IsHTML(true);

    //Authentication
    $phpmailer->Username = "departmentmcc@gmail.com"; //your email
    $phpmailer->Password = 'mccdepartment'; //your password

    //Set Params
    $phpmailer->SetFrom("departmentmcc@gmail.com"); //sender email
    $phpmailer->AddAddress($email); //receiver email
    $phpmailer->IsHTML(true);
    $phpmailer->Subject = "Account Registration";
    $phpmailer->Body = "<h1>Your account has been registered!</h1><br><h3>Here is your login credentials</h3><br>Email: $email<br>Password: $password";


     if(!$phpmailer->Send()) {
        echo "Mailer Error: " . $phpmailer->ErrorInfo;
    } else {
        echo "<script>window.location.href='admin/pending-accounts.php';</script>";
    }
}	
?>
