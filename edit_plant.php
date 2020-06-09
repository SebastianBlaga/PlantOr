<?php
if(isset($_POST['save-submit'])){

    require 'db.php';
    $idpl=$_POST["save-submit"];
    echo $idpl;
    echo 'test';
}