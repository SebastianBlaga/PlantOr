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
            <a href="#login" id="login-item" >Log In</a>
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
                        <button type="button"id="buton-sign-up">Sign Up</button>
                    </div>
                </div>
                <div id="group-right" class="column">
                    <img id="ilustratie" src="images/flower illustration.svg">
                </div>  
        </div>
        </div>
                <!-- Sign up pop up form section-->
                <div class="signup-form">
                    <div class="form" id="s-form">
                        <h1>SIGN UP</h1>
                        <form action="signup.php" method="post">
                            <div class="form-content">
                            <label for="email">Email*</label>
                            <input type="text" name="email">
                            <label for="pwd">Password*</label>
                            <input type="password" name="pwd">
                            <label for="pwd">Confirm password*</label>
                            <input type="password" name="pwd-repeat">
                           </div>
                           <?php
                           if(isset($_GET['error'])){
                               if($_GET['error']=="emptyfields")
                               {
                                   echo '<span class="error" >*You missed some mandatory fields!</span>';
                               }
                               else
                               if($_GET['error']=="invalidmail")
                               {
                                echo '<span class="error" >*Invalid e-mail format!</span>';
                               }
                               else
                               if($_GET['error']=="passwordcheck")
                               {
                                echo '<span class="error" >*Your passwords do not match!</span>';
                               }
                               else
                               if($_GET['error']=="emailAlreadyUsed")
                               {
                                echo '<span class="error" >*The email address is already used!</span>';
                               }
                           }
                           ?>
                            <div class="form-buttons">
                                <button type="button" class="buton-form" id="buton-cancel-2" onClick="document.location.href='homepage.php'">Cancel</button>
                                <button type="submit" class="buton-form" id="buton-signup" name="signup-submit" >Sign up</button>
                                <button type="button" class="buton-form" id="buton-secundar-L2"  onClick="document.location.href='login.page.php'">Log in</button>
                            </div>
                        </form>
                    </div>
                </div>
</body>
</html>