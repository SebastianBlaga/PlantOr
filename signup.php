<?php
if(isset($_POST['signup-submit'])){

    require 'db.php';

    $email = $_POST['email'];
    $password = $_POST['pwd'];
    $passwordRepeat = $_POST['pwd-repeat'];

    if(empty($email) || empty($password) || empty($passwordRepeat)){
        header("Location:homepage.php?error=emptyfields&email=".$email);
        exit();
    }
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        header("Location:homepage.php?error=invalidmail&email=".$email);
        exit();
    }
    else if ($password !== $passwordRepeat)
    {
        header("Location:homepage.php?error=passwordcheck&email=".$email);
        exit();
    }
    else
    {
       $sql = "SELECT emailUsers FROM users WHERE emailUsers=?";
       $stmt = mysqli_stmt_init($conn);
       if(!mysqli_stmt_prepare($stmt,$sql)){
        header("Location:homepage.php?error=sqlError");
        exit();
       }
       else{
           mysqli_stmt_bind_param($stmt,"s",$email);
           mysqli_stmt_execute($stmt);
           mysqli_stmt_store_result($stmt);
           $resultCheck = mysqli_stmt_num_rows($stmt);
           if($resultCheck > 0)
           {
            header("Location:homepage.php?error=emailAlreadyUsed&email=".$email);
            exit(); 
           }
           else
           {
            $sql = "INSERT INTO users(emailUsers, pwdUsers) VALUES (?,?)";
            $stmt = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt,$sql)){
                header("Location:homepage.php?error=sqlError");
                exit();
               }
               else{
                $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
                mysqli_stmt_bind_param($stmt,"ss",$email, $hashedPwd);
                mysqli_stmt_execute($stmt);
                header("Location:homepage.php?signup=success");
                exit();
               }
           }
       }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
else{
    header("Location:homepage.php");
    exit;
}
