<?php
function TN($idPlant,$idUser){
 require 'db.php';   
            
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$sql="SELECT TechnicalName FROM plants where idPlant=$idPlant and idUser=$idUser";

if ($result=mysqli_query($conn,$sql))
  {
  $row=mysqli_fetch_row($result);

  printf ("%s\n", $row[0]);

  // Free result set
  mysqli_free_result($result);
}
}

function CN($idPlant,$idUser){
 require 'db.php';   
            
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$sql="SELECT CommonName FROM plants where idPlant=$idPlant  and idUser=$idUser";

if ($result=mysqli_query($conn,$sql))
  {
  $row=mysqli_fetch_row($result);

  printf ("%s\n", $row[0]);

  // Free result set
  mysqli_free_result($result);
}
}

function PG($idPlant,$idUser){
 require 'db.php';   
            
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$sql="SELECT PlantGroup FROM plants where idPlant=$idPlant  and idUser=$idUser";

if ($result=mysqli_query($conn,$sql))
  {
  $row=mysqli_fetch_row($result);

  printf ("%s\n", $row[0]);

  // Free result set
  mysqli_free_result($result);
}
}
function Family($idPlant,$idUser){
 require 'db.php';   
            
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$sql="SELECT Family FROM plants where idPlant=$idPlant  and idUser=$idUser";

if ($result=mysqli_query($conn,$sql))
  {
  $row=mysqli_fetch_row($result);

  printf ("%s\n", $row[0]);

  // Free result set
  mysqli_free_result($result);
}
}
function Species($idPlant,$idUser){
 require 'db.php';   
            
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$sql="SELECT Species FROM plants where idPlant=$idPlant  and idUser=$idUser";

if ($result=mysqli_query($conn,$sql))
  {
  $row=mysqli_fetch_row($result);

  printf ("%s\n", $row[0]);

  // Free result set
  mysqli_free_result($result);
}
}
?>