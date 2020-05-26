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
        <link rel="stylesheet" href="about.css">
        
        <title>PlantOr</title>
    </head>
    <body>
        <header>
            <div class="menu-header">
            <div class="menu-items">
            <div class="logo">
                <img id="white-logo" src="images/Logo white.png">
            </div>
            <a  href="#home" onClick="document.location.href='homepage.php'">Home</a>
            <a class="active" href="#about">About</a>
            <a href="#login" id="login-item" onClick="document.location.href='login.page.php'">Log In</a>
            </div>
            </div>
        </header>
        <div class="main-bg">
        <div class="welcome-panel">
            <div id="group-left">
                <h1>ABOUT PLANTOR</h1>
                <div class="text">
                <p>
                    <span class="prtext"> PlantOr </span>is a creative web application for a new generation of staging herberiums. <br>
                    Fun and educational, it allows you to create and customize your herbarium by organizing your plant into albums while learning botany.<br>
                    <br>The principle is simple: <br><br>
                    1. Create a <span class="prtext">free acount.</span><br>
                    2. Just <span class="prtext">snap a picture</span> of a plant or plant cutting, crop it and customize it using different tools.<br><br>
                    Happy herborazation!
    
                <p>
                </div>
                </div>
                <div id="group-right" class="column">
                    <img id="ilustratie" src="images/abimg.svg">
                </div>  
        </div>
</body>
</html>