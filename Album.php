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
    <link rel="stylesheet" href="Album.css" />
    <link rel="stylesheet" href="style_albumview" />
</head>

<body>
    
        <header>
            <div class="menu-header">
                <div class="menu">
                    <a href="#statistics" onClick="document.location.href='Statistics.php'">Statistics</a>
                    <a href="#collection" onClick="document.location.href='Collection.php'">Collection</a>
                    <a class="active" href="#albums">Albums</a>
                    <a href="#about" onClick="document.location.href='about.php'">About</a>
                    <a href="logoutConfirm.php">Log Out</a>
                </div>
                <div class="Logo"> <img src='img/Logo white.png'></div>
        </header>

        <div class="description">
            <div class="title">Your plant albums</div>
            <div class="text">
                <p>
                    Here you can see the albums you created based on different criteria. You can also add
                    suggested albums for your or choose to create a new customized album.
                </p>
            </div>
            <div class="createButton">
                <button type="button" onClick="document.location.href='Create_album_popup.php'"> Create Album</button>
            </div>
        </div>
        <div class="suggested">Suggested albums</div>


        <div class="my-albums">
            
           <?php
                require 'db.php';
                require 'create_album.php';
                    $sql1 = "SELECT * FROM plants where idUser='$_SESSION[userId]'
                    and PlantGroup='volvo' and Family='volvo' and Species='volvo'";
                    $result1= $conn->query($sql1);
                    $r1 = $result1->num_rows;
                        echo '<div class="album-test">';
                        echo' <div class="picture">';
                        echo' <img class="art" src="img/frunze.png"/>';
                        echo' <img class="art" src="img/frunze.png"/>';
                        echo' <img class="art" src="img/frunze.png"/>';
                        echo' <img class="art" src="img/frunze.png"/>';
                        echo'</div>';
                        echo'<h1>';
                        echo "Medical";  
                        echo'</h1>';
                        echo'<h2> ';
                        echo $r1; 
                        echo'</h2>';
                        echo'<form method="get" action="albumView.php">';
                        echo'<input type="hidden" name="plantGroup" value='; echo "volvo"; echo'>';
                        echo'<input type="hidden" name="plantFamily" value='; echo "volvo"; echo'>';
                        echo'<input type="hidden" name="plantSpecies" value='; echo "volvo"; echo'>';
                        echo'<input type="submit" value=" ">';
                        echo'</form>';
                        echo'</div>';
                ?>
                <?php
                require 'db.php';
                require 'create_album.php';
                    $sql1 = "SELECT * FROM plants where idUser='$_SESSION[userId]'
                    and PlantGroup='volvo' and Family='volvo' and Species='volvo'";
                    $result1= $conn->query($sql1);
                    $r1 = $result1->num_rows;
                        echo '<div class="album-test">';
                        echo' <div class="picture">';
                        echo' <img class="art" src="img/frunze.png"/>';
                        echo' <img class="art" src="img/frunze.png"/>';
                        echo' <img class="art" src="img/frunze.png"/>';
                        echo' <img class="art" src="img/frunze.png"/>';
                        echo'</div>';
                        echo'<h1>';
                        echo "Medical";  
                        echo'</h1>';
                        echo'<h2> ';
                        echo $r1; 
                        echo'</h2>';
                        echo'<form method="get" action="albumView.php">';
                        echo'<input type="hidden" name="plantGroup" value='; echo "volvo"; echo'>';
                        echo'<input type="hidden" name="plantFamily" value='; echo "volvo"; echo'>';
                        echo'<input type="hidden" name="plantSpecies" value='; echo "volvo"; echo'>';
                        echo'<input type="submit" value=" ">';
                        echo'</form>';
                        echo'</div>';
                ?>
                <?php
                require 'db.php';
                require 'create_album.php';
                    $sql1 = "SELECT * FROM plants where idUser='$_SESSION[userId]'
                    and PlantGroup='volvo' and Family='volvo' and Species='volvo'";
                    $result1= $conn->query($sql1);
                    $r1 = $result1->num_rows;
                        echo '<div class="album-test">';
                        echo' <div class="picture">';
                        echo' <img class="art" src="img/frunze.png"/>';
                        echo' <img class="art" src="img/frunze.png"/>';
                        echo' <img class="art" src="img/frunze.png"/>';
                        echo' <img class="art" src="img/frunze.png"/>';
                        echo'</div>';
                        echo'<h1>';
                        echo "Medical";  
                        echo'</h1>';
                        echo'<h2> ';
                        echo $r1; 
                        echo'</h2>';
                        echo'<form method="get" action="albumView.php">';
                        echo'<input type="hidden" name="plantGroup" value='; echo "volvo"; echo'>';
                        echo'<input type="hidden" name="plantFamily" value='; echo "volvo"; echo'>';
                        echo'<input type="hidden" name="plantSpecies" value='; echo "volvo"; echo'>';
                        echo'<input type="submit" value=" ">';
                        echo'</form>';
                        echo'</div>';
                ?>


            
        </div>


        <div class="yours">Your albums</div>


        <br><br>
        <div class="suggested-albums1">
           
            <?php
                require 'db.php';
                require 'create_album.php';
                $sql = "SELECT * FROM albums where idUser=".$_SESSION['userId'];
                $result = $conn->query($sql);
                
                if ($result->num_rows > 0) {
                while($row = $result->fetch_row()){
                    $sql1 = "SELECT * FROM plants where idUser='$_SESSION[userId]'
                    and PlantGroup='$row[3]' and Family='$row[4]' and Species='$row[5]'";
                    $result1= $conn->query($sql1);
                    $r1 = $result1->num_rows;
                        echo '<div class="album-test">';
                        echo' <div class="picture">';
                        echo' <img class="art" src="img/frunze.png"/>';
                        echo' <img class="art" src="img/frunze.png"/>';
                        echo' <img class="art" src="img/frunze.png"/>';
                        echo' <img class="art" src="img/frunze.png"/>';
                        echo'</div>';
                        echo'<h1>';
                        echo $row[1];  
                        echo'</h1>';
                        echo'<h2> ';
                        echo $r1; 
                        echo'</h2>';
                        echo'<form method="get" action="albumView.php">';
                        echo'<input type="hidden" name="plantGroup" value='; echo $row[3]; echo'>';
                        echo'<input type="hidden" name="plantFamily" value='; echo $row[4]; echo'>';
                        echo'<input type="hidden" name="plantSpecies" value='; echo $row[5]; echo'>';
                        echo'<input type="submit" value=" ">';
                        echo'</form>';
                        echo'</div>';


                    }
                }
                ?>
        </div>

    
</body>


</html>