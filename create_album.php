<?php

if(isset($_POST['createAlbum_submit'])) {

    require 'db.php';
    $newAlbumName = $_POST['albumname'];

    header("Location:album.php?error=noerror");
    exit();



}