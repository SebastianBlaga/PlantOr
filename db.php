<?php

$servername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "plantordb";

$conn = mysqli_connect($servername,$dBUsername, $dBPassword, $dBName);

if(!$conn){
    die("Connection failed".mysql_connect_error());
}

