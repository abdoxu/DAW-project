<?php 

function emptyInputSingup($name, $email, $username, $pwd, $pwdconfirm){
  
    

     if (empty($name) || empty($email) || empty($username) || empty($pwd) || empty($pwdconfirm) ){
        $result=true;

     }else 
     $result=false;
return $result;
}

function pwdMatch($pwd, $pwdconfirm){
  

    if( $pwd !== $pwdconfirm){
        $result= true;
    }else {
        $result = false;
    }
    return $result;
}

function createUser($conn, $name, $email, $username, $pwd){
    $sql = "INSERT INTO users (usersName, usersEmail, usersUsr, usersPwd ) VALUES (? , ?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);
    if( !mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../singup.php?error=stmtFailed");
        exit();
    }

    $hashedPwd = password_hash($pwd , PASSWORD_DEFAULT);

       mysqli_stmt_bind_param($stmt, "sss", $name, $email, $username, $pwd);
       mysqli_stmt_execute($stmt);
       mysqli_stmt_close($stmt);
       
       header("location: ../singup.php?error=none");
       exit();


}