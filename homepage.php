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
            <a href="#about" onClick="document.location.href='about.php'">About</a>
            <a href="#login" id="login-item" onClick="document.location.href='login.page.php'">Log In</a>
            </div>
            </div>

            <!--<div class="mobile-nav">
            <a href="#home" class="active">PLANTOR</a>
            <div id="myLinks">
                <a href="#about">About</a>
                <a href="#login">Log In</a>
            </div>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
        </div>
            <script>
            function myFunction(){
                var x = document.getElementById("myLinks");
                if(x.style.display="block"){
                    x.style.display = "none";
                }else{
                    x.style.display = "block";
                }
                }
            }
        </script>-->

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
                        <button type="button" id="buton-secundar" onClick="document.location.href='about.php'" >Learn More</button>
                        <button type="button"id="buton-sign-up" onClick="document.location.href='signup.page.php'">Sign Up</button>
                    </div>
                </div>
                <div id="group-right" class="column">
                    <img id="ilustratie" src="images/flower illustration.svg">
                </div>  
        </div>
</body>
</html>