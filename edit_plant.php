<?php
if(isset($_POST['save-submit'])){

    require 'db.php';
    $idpl=$_POST['save-submit'];
    $tn=$_POST['TN'];
    $cn=$_POST['CN'];
    $pg=$_POST['PG'];
    $sp=$_POST['Species'];
    $fm=$_POST['Family'];
    $sql="UPDATE plants SET TechnicalName=\"".$tn."\",CommonName=\"".$cn."\",PlantGroup=\"".$pg."\",Family=\"".$fm."\",Species=\"".$sp."\"WHERE idPlant=\"".$idpl."\";";
    if(mysqli_query($conn, $sql)){
        header("Location:Collection.php");
     } else{
         echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
     }
     
}