<?php
if(isset($_POST['login-submit'])){

require 'db.php';

$email = $_POST['email'];
$password = $_POST['pwd'];

if(empty($email) || empty($password)){
    header("Location:login.page.php?error=emptyfields&email=".$email);
    exit();
}
else
{
    $sql = "SELECT * FROM users WHERE emailUsers=?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("Location:login.page.php?error=sqlError");
        exit();
    }
    else
    {
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if($row = mysqli_fetch_assoc($result)){
            $pwdCheck = password_verify($password, $row['pwdUsers']);
            if($pwdCheck == false){
                header("Location:login.page.php?error=wrongPassword");
                exit();
            }
            else if($pwdCheck == true){
                session_start();
                $_SESSION['userId'] = $row['idUsers'];
                $_SESSION['userEmail'] = $row['emailUsers'];

                header("Location:homepage.php?login=success");
                exit();
            }
            else
            {
                header("Location:login.page.php?error=wrongPassword");
                exit();  
            }
        }
        else{
            header("Location:login.page.php?error=noUser");
            exit(); 
        }
    }
}
}
else{
    header("Location:homepage.php");
    exit();
}
