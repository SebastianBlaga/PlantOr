<?php
if(isset($_POST['Submit1'])){

require 'db.php';

$TN = $_POST['TN'];
$CN = $_POST['CN'];
$PG = $_POST['PG'];
$Family = $_POST['Family'];
$Species = $_POST['Species'];
$img = $_POST['img'];

if(empty($TN) || empty($CN) || empty($PG) || empty($Family) || empty($Species))
{
    header("Location:CollectionPopup.php?error=emptyfields");
    exit();
}
else
{
    $sql = "INSERT INTO plants 
    ( idUser,TechnicalName,CommonName,PlantGroup,Species,Family,Picture)
VALUES 
( 1,'$TN', '$CN','$PG','$Species','$Family','$img');";
    
   if(mysqli_query($conn, $sql)){
    header("Location:Collection.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
}
}
else{
    header("Location:Collection.php");
    exit();
}