<?php
  include ("../connection.php");

// The location of the PDF file
// on the server
  $FileName = $_GET["FileName"];

$filename = "../upload/".$FileName;
  
// Header content type
header("Content-type: application/pdf");
  
header("Content-Length: " . filesize($filename));
  
// Send the file to the browser.
readfile($filename);
?> 