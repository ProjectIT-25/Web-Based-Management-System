<?php

$connections = mysqli_connect("localhost","root","jansen31","ojt");

        if($connections){
             echo "";
        } else{
            die(mysqli_error($connections));
        }
?>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
