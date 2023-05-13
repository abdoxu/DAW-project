<?php

//main connection file for both admin & front end
$servername = "localhost"; //server
$username = "root"; //username
$password = ""; //password
$dbname = "login_sys";  //database

// Create connection
$conn =  mysqli_connect($servername, $username, $password, $dbname,"3306"); // connecting 
// Check connection
if (!$conn) {       //checking connection to DB	
    die("Connection failed: " . mysqli_connect_error());
}

?>