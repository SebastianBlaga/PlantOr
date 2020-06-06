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
}
else{
    header("Location:Collection.php");
    exit();
}