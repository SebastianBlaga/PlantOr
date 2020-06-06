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
        <link rel="stylesheet" href="logoutpopup.css">
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
            <a href="#login" id="login-item" onClick="document.location.href='login.page.php'">Log Out</a>
            </div>
            </div>
        </header>
        <div class="main-bg">
        <!-- Log in pop up form section-->
        <div class="bg-form"  >
            <div class="form" id="log-in-form" >
                <h1>LOG OUT</h1>
                    <p>Are you sure you want to log out?</p>
                    <div class="form-buttons">
                        <button type="button" class="buton-form" id="buton-cancel" onClick="document.location.href='album.php'">Cancel</button>
                        <button type="button" class="buton-form" id="buton-logout" onClick= "document.location.href='logout.php'">Log out</button>
                    </div>
                </form>
            </div>
        </div>
</div>
</body>
</html>