<?php



function PGC($idUser,$PG){
 require 'db.php';   
            
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$sql="SELECT * FROM plants where idUser=$idUser and PlantGroup='$PG'";

if ($result=mysqli_query($conn,$sql))
  {
  $rowcount=mysqli_num_rows($result);
  printf("%d",$rowcount);

  // Free result set
  mysqli_free_result($result);
}
}

function FamilyC($idUser,$PG){
 require 'db.php';   
            
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$sql="SELECT * FROM plants where idUser=$idUser and Family='$PG'";

if ($result=mysqli_query($conn,$sql))
  {
  $rowcount=mysqli_num_rows($result);
  printf("%d",$rowcount);

  // Free result set
  mysqli_free_result($result);
}
}

function SpeciesC($idUser,$PG){
 require 'db.php';   
            
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$sql="SELECT * FROM plants where idUser=$idUser and Species='$PG'";

if ($result=mysqli_query($conn,$sql))
  {
  $rowcount=mysqli_num_rows($result);
  printf("%d",$rowcount);

  // Free result set
  mysqli_free_result($result);
}
}

function NROPC($idUser){
 require 'db.php';   
            
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$sql="SELECT * FROM plants where idUser=$idUser";

if ($result=mysqli_query($conn,$sql))
  {
 $rowcount=mysqli_num_rows($result);
  printf("%d Plants\n",$rowcount);

  // Free result set
  mysqli_free_result($result);
}
}

function MPPG($idUser){
 require 'db.php';   
            
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$sql="select PlantGroup, count(PlantGroup) from plants where idUser=$idUser group by PlantGroup order by count(PlantGroup) desc limit 1";

if ($result=mysqli_query($conn,$sql))
  {
 $row=mysqli_fetch_row($result);

  printf ("%s", $row[0]);

  // Free result set
  mysqli_free_result($result);
}
}

function MPF($idUser){
 require 'db.php';   
            
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$sql="select Family, count(Family) from plants where idUser=$idUser group by Family order by count(Family) desc limit 1";

if ($result=mysqli_query($conn,$sql))
  {
 $row=mysqli_fetch_row($result);

  printf ("%s", $row[0]);

  // Free result set
  mysqli_free_result($result);
}
}

function MPS($idUser){
 require 'db.php';   
            
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$sql="select Species, count(Species) from plants where idUser=$idUser group by Species order by count(Species) desc limit 1";

if ($result=mysqli_query($conn,$sql))
  {
 $row=mysqli_fetch_row($result);

  printf ("%s", $row[0]);

  // Free result set
  mysqli_free_result($result);
}
}


?>