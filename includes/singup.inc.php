<?php

    if ( isset($_POST["submit"])){
        $name =$_POST["name"];
        $email = $_POST["email"];
        $username = $_POST["usr"];
        $pwd = $_POST["pwd"];
        $pwdconfirm = $_POST["pwdconfirm"];
             
        require_once 'dbh.inc.php' ; 
        require_once 'functions.inc.php';

            if (emptyInputSingup($name,$email,$username,$pwd,$pwdconfirm)!==false){
                header("location : ../singup.php");
            }

            if (pwdMatch($pwd, $pwdconfirm) !== false){
                header("location: ../singup.php?error=passwordDontMatch");
                exit();
            }

                createUser($conn, $name, $email, $username, $pwd);
    
    
    
        }
    else{
        echo"failed to connect";
        header("location:../singup.php");

    }


   
    
    ?>