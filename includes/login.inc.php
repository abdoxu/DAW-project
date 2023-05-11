
<?php


$mysqli=new  mysqli("localhost","root","","login_sys");
if($mysqli -> connect_errno){
    echo"failed". $mysqli -> connect_error;
    exit();
}
echo"washha" 

?>