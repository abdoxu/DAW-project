<?php
echo "something";
    if ( isset($_POST["submit"])){
        echo"it works";
    }
    else{
        header("location: ../singup.php");

    }
    ?>