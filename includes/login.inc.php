
<?php


$mysqli=new  mysqli("localhost","root","","login_sys",3306);
if($mysqli -> connect_errno){
    echo"failed". $mysqli -> connect_error;
    exit();
}
echo"washha" 

?>