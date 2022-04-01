<?php

$connections = mysqli_connect("MYSQL5025.site4now.net","a84f52_ojt","Jansen31","db_a84f52_ojt");

        if($connections){
             echo "";
        } else{
            die(mysqli_error($connections));
        }
?>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

