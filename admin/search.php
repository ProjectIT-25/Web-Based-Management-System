<?php
	
include("../connection.php");

$searh_file = $_POST['search_file'];
	
if(isset($search_file)){

 	}else{
         $check = $searh_file;

         $terms = explode(" ", $check);
         $q = "SELECT * FROM filetbl WHERE ";
         $i = 0;

         foreach ($terms as $each){
             $i++;

             if($i==1){
                 $q .= "FileName LIKE '%$each%' ";
                }
                else{
                    $q .= "OR FileName LIKE '%$each%'";
                }
         }

         $query = mysqli_query($connections, $q);
         $c_q = mysqli_num_rows($query);

         if($c_q > 0 && $check!=" "){
             while($row = mysqli_fetch_assoc($query)){
                 echo $name = $row["FileName"] . "<br>";
             }
         }
         else{
             echo "No result!";
         }
}
?>