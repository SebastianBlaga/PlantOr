<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style_home.css">
        <link rel="stylesheet" href="style_global.css">
        <title>PlantOr</title>
    </head>
    <body>
        <header>
            <div class="menu-header">
            <div class="menu-items">
            <div class="logo">
                <img id="white-logo" src="images/Logo white.png">
            </div>
            <a class="active" href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#login" id="login-item" onClick="document.location.href='login.page.php'">Log In</a>
            </div>
            </div>
        </header>
        <div class="main-bg">
        <div class="welcome-panel">
            <div id="group-left">
                <div class="img-container">
                <img id="color-logo" class="column" src="images/LOGO color.png">
                </div>
                <div class="text">
                <p>
                    Create your digital <span class="redtext">herbarium</span>.
                <p>
                    <p>
                        <span class="redtext">Customize</span> your plant collection.
                    </p>
                    <p>
                        Have your own personalized <span class="redtext">albums</span>.
                    </p>
                </div>
                    <div class="main-buttons">
                        <button type="button" id="buton-secundar" >Learn More</button>
                        <button type="button"id="buton-sign-up" onClick="document.location.href='signup.page.php'">Sign Up</button>
                    </div>
                </div>
                <div id="group-right" class="column">
                    <img id="ilustratie" src="images/flower illustration.svg">
                </div>  
        </div>
</body>
</html>