<?php
    $connections = mysqli_connect("sql6.freesqldatabase.com","sql6481165","NN9KcqfkE3","sql6481165");

        if($connections){
             echo "";
        } else{
            die(mysqli_error($connections));
        }
?>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>