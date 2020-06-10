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
    <link rel="stylesheet" href="style_albumview" />
</head>

<body>
        <header>
            <div class="menu-header">
                <div class="menu">
                    <a href="#statistics"  onClick="document.location.href='statistics.php'">Statistics</a>
                    <a href="#collection"  onClick="document.location.href='Colletion.php'">Collection</a>
                    <a class="active" href="#albums"  onClick="document.location.href='Album.php'">Albums</a>
                    <a href="#about" onClick="document.location.href='about.php'">About</a>
                    <a href="logoutConfirm.php" onClick="document.location.href='logout.php'">Log Out</a>
                </div>
                <div class="Logo"> <img src='img/Logo white.png'></div>
        </header>

        <div class="content">
        <?php  

        
        include_once 'db.php';
        include 'create_album.php';
       
        
        $sql = "SELECT * FROM albums where idUser='$_SESSION[userId]' AND nume=$name;";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)) {
            echo "SQL statement failed!";
        } else {
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            $pspecies = PSpecies($row[5],$_SESSION['userId']);
            $sql = "SELECT * FROM plants where idUser='$_SESSION[userId]' and Species='$pspecies'";

            while ($row = mysqli_fetch_assoc($result))  {
                echo 
                    '<section>
                    <img src="img/plants/'.$row["imageName"].'">
                    <h1>'.$row["PlantGroup"].'</h1>
                    <h2>'.$row["Family"].'</h2>
              
                </section>';
                echo View($_SESSION['userId'],$row['PlantGroup'],$row['Family'],$row['Species']);
            }
        }
    
        ?>
        
        
</body>
</html> 