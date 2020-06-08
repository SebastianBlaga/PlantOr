<?php


  $id = $_GET['id'];
  // do some validation here to ensure id is safe


$servername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "plantordb";
$conn = mysqli_connect($servername,$dBUsername, $dBPassword, $dBName);
  $sql = "SELECT Picture FROM plants WHERE idPlant=4";
  $result = mysql_query("$sql");
  $row = mysql_fetch_array($result);

  header("Content-type: image/jpeg");
  echo $row['Picture'];
exit();
?>