<?php
require 'create_album.php';
?>
<!DOCTYPE HTML>
<html lang="en">

<head>
    <title>Albums</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="Album.css" />
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

        <div class="description">
            <div class="title">Your plant albums</div>
            <div class="text">
                <p>
                    Here you can see the albums you created based on different criteria. You can also add
                    suggested albums for your or choose to create a new customized album.
                </p>
            </div>
            <div class="createButton">
                <button type="button" onClick="document.location.href='Create_album.php'"> Create Album</button>
            </div>
        </div>
        <div class="suggested">Suggested albums</div>


        <div class="my-albums">
            
                <div class="album-test" onClick="document.location.href='albumView.php'">
                    <div class="picture">
                        <img class="art" src="img/frunze.png"/>
                        <img class="art" src="img/frunze.png"/>
                        <img class="art" src="img/frunze.png"/>
                        <img class="art" src="img/frunze.png"/>
                    </div>
                    <h1>Medical plants</h1>
                    <h2>120 plants</h2>
                </div>
                <div class="album-test">
                    <div class="picture">
                        <img class="art" src="img/frunze.png"/>
                        <img class="art" src="img/frunze.png"/>
                        <img class="art" src="img/frunze.png"/>
                        <img class="art" src="img/frunze.png"/>
                    </div>
                    <h1>Suggested album 1</h1>
                    <h2>120 plants</h2>
                </div>
                <div class="album-test">
                 <div class="picture">
                    <img class="art" src="img/frunze.png"/>
                    <img class="art" src="img/frunze.png"/>
                    <img class="art" src="img/frunze.png"/>
                    <img class="art" src="img/frunze.png"/>
                 </div>
                    <h1>Suggested album 1</h1>
                    <h2>120 plants</h2>     
                </div>
            
        </div>


        <div class="yours">Your albums</div>

        <div class="suggested-albums1">
            <div class="album-list">
                <div class="album-test">
                    <div class="picture">
                        <img class="art" src="img/frunze.png"/>
                        <img class="art" src="img/frunze.png"/>
                        <img class="art" src="img/frunze.png"/>
                        <img class="art" src="img/frunze.png"/>
                    </div>
                    <h1>My album 1</h1>
                    <h2>120 plants</h2>
                </div>
                <div class="album-test">
                    <div class="picture">
                        <img class="art" src="img/frunze.png"/>
                        <img class="art" src="img/frunze.png"/>
                        <img class="art" src="img/frunze.png"/>
                        <img class="art" src="img/frunze.png"/>
                    </div>
                    <h1>My album 1</h1>
                    <h2>120 plants</h2>
                </div>
            </div>
        </div>
        <br><br>
        <div class="suggested-albums1">
            <div class="album-list">
                <div class="album-test">
                    <div class="picture">
                        <img class="art" src="img/frunze.png"/>
                        <img class="art" src="img/frunze.png"/>
                        <img class="art" src="img/frunze.png"/>
                        <img class="art" src="img/frunze.png"/>
                    </div>
                    <h1>My album 1</h1>
                    <h2>120 plants</h2>
                </div>
                <div class="album-test">
                    <div class="picture">
                        <img class="art" src="img/frunze.png"/>
                        <img class="art" src="img/frunze.png"/>
                        <img class="art" src="img/frunze.png"/>
                        <img class="art" src="img/frunze.png"/>
                    </div>
                    <h1>My album 1</h1>
                    <h2>120 plants</h2>
                </div>
                <div class="album-test">
                    <div class="picture">
                        <img class="art" src="img/frunze.png"/>
                        <img class="art" src="img/frunze.png"/>
                        <img class="art" src="img/frunze.png"/>
                        <img class="art" src="img/frunze.png"/>
                    </div>
                    <h1>My album 1</h1>
                    <h2>120 plants</h2>
                </div>
            </div>
        </div>

    
</body>

<div class="popupbox">
    <div class="create">Add album</div>
    <div class="Box">
    <form action="create_album.php" method="post">
        <p>Album name</p>
        <input type="text" name="albumname">
        <p>Select plant groups</p>
        <input type="text" name="email">
        <p>Select families</p>
        <input type="text" name="email">
        <p>Select species</p>
        <input type="text" name="email">
        <?php
            if(isset($_GET['error'])){
                if($_GET['error']=="invalidname")
                {
                    echo '<span class="error >Invalid album name!</span>';
                }
                else if ($_GET['error']=="emptyfields")
                {
                    echo '<span class="error >You need to complete all fields!</span>';
                }
            }
            ?>
        </div>
        <div class="popupbuttons">
            <button type="button" id="verde"> Cancel</button>
            <button type="button" name="createAlbum_submit" id="verde"> Create Album</button>
        </div>
     </form>
</div>
</html>