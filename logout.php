<?php
session_start();
if (isset($_SESSION['id']))
  {
session_unset();
session_destroy();
echo "<script type='text/javascript'> document.location = 'index.php'; </script>";
exit();
}
else {
	die();
}
?>