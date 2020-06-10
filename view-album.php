<?php
/*
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
        $sql = "SELECT * from plants where idUser=$idU AND PlantGroup=$group AND Family=$family AND Species=$species;"
 
       if(mysqli_query($conn, $sql)){
       header("Location:Album.php");
       exit();
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }
        }
    }*/

    function PSpecies($species,$idUser){
        require 'db.php';   
                   
       if (mysqli_connect_errno())
         {
         echo "Failed to connect to MySQL: " . mysqli_connect_error();
         }
       $sql="SELECT plantSpecies FROM album where plantSpecies=$species  and idUser=$idUser";
       
       if ($result=mysqli_query($conn,$sql))
         {
         $row=mysqli_fetch_row($result);
       
         printf (
       
         // Free result set
         mysqli_free_result($result);
       }
       }
       