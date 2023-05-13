<?php

// Create connection
$conn = mysqli_connect('localhost', 'root', '', 'login_sys',3306);

    if(!$conn){
        die("Connection failed:  " .mysqli_connect_error());
    }
?>