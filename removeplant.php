<?php
if(isset($_POST['Remove'])){

    require 'db.php';
    $idpl=$_POST["Remove"];
    echo $idpl;
    echo 'test';
    $sql="DELETE FROM  plants WHERE idPlant=$idpl";

    if(mysqli_query($conn, $sql)){
        header("Location:collection.php");
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }
}