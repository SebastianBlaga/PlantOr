<?php
session_start();
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
                    <a href="#statistics">Statistics</a>
                    <a href="#collection">Collection</a>
                    <a class="active" href="#albums">Albums</a>
                    <a href="#about" onClick="document.location.href='about.php'">About</a>
                    <a href="logoutConfirm.php">Log Out</a>
                </div>
                <div class="Logo"> <img src='img/Logo white.png'></div>
        </header>

        <div class="content">
        <?php  

        include_once 'db.php';
        $sql = "SELECT * FROM plants;";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)) {
            echo "SQL statement failed!";
        } else {
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            while ($row = mysqli_fetch_assoc($result))  {
                echo 
                    '<section>
                    <div class="testingimage" style="background-image: url(/PlantOr/img/plants/'.$row["imageName"].');"></div>
                    <h1>'.$row["PlantGroup"].'</h1>
                    <h2>'.$row["Family"].'</h2>
                </section>' ;
            }
        }
        ?>
        </div>
</body>
</html> 