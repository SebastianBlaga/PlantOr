<?php

if(isset($_POST['submit2'])) {

    require 'db.php';
    $name = $_POST['albumname'];
    $group = $_POST['plantGroup'];
    $family = $_POST['plantFamily'];
    $species = $_POST['plantSpecies'];
    
    

    $idU = $_SESSION['userId'];

    if(empty($name) || empty($group) || empty($family) || empty($species))
    {
        header("Location:Album.php?error=emptyfields");
        exit();
    }
    else
        {
        $sql = "INSERT INTO albums 
        (idUser,nume,plantGroup,plantFamily,plantSpecies)
        VALUES ( '$idU','$name', '$group','$family','$species');";
 
       if(mysqli_query($conn, $sql)){
       header("Location:Album.php");
       exit();
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }
        }
    }

