<?php
if(!isset($_SESSION))
{
session_start();
}
?>
<!DOCTYPE HTML>
<html lang="en">

<head>
    <title>Albums</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="style_albumview.css" />
    <link rel="stylesheet" href="Album.css" />
    <link rel="stylesheet" href="style_menu(Seb).css" />
</head>

<body>
        <header>
            <div class="menu-header">
                <div class="menu">
                    <a href="#statistics"  onClick="document.location.href='statistics2.php'">Statistics</a>
                    <a href="#collection"  onClick="document.location.href='Collection.php'">Collection</a>
                    <a class="active" href="#albums"  onClick="document.location.href='Album.php'">Albums</a>
                    <a href="#about" onClick="document.location.href='about.php'">About</a>
                    <a href="logoutConfirm.php" onClick="document.location.href='logout.php'">Log Out</a>
                </div>
                <div class="Logo"> <img src='img/Logo white.png'></div>
        </header>

        <div class="content">
        <?php  
                   if(!isset($_SESSION['userId'])){
                    echo "<p>You need to log in first! (:</p> ";
                    }
                else
                    {

        include_once 'db.php';
        $var_G = $_GET['plantGroup'];
   
        $var_F = $_GET['plantFamily'];

        $var_S = $_GET['plantSpecies'];
  
        $sql = "SELECT * FROM plants where idUser='$_SESSION[userId]'
        and PlantGroup='$var_G' and Family='$var_F' and Species='$var_S'";
       
       $result = $conn->query($sql);

       if ($result->num_rows > 0) {
       while($row = $result->fetch_row()){

        echo 
        '<section>';
        echo '<img src="img/plants/'; echo $row[7]; echo'">';
        echo '<h1>'; echo"Family: "; echo $row[4]; echo'</h1>';
        echo '<h1>'; echo $row[5]; echo'</h1>';
        echo '</section>';
           }
       }
    }?>
        
        
</body>
</html> 