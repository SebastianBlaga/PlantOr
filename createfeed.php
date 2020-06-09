<?php 

function createFeed(){
    require 'db.php';   
            
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
    $file='C:\xampp\htdocs\PlantOr\feed.xml';
    unlink($file);
    $feed="<?xml version=\"1.0\" encoding = \"utf-8\"?>
    <rss version=\"2.0\">
    <channel>
    <title> Plants feed </title>
    <link> http://localhost/PlantOr/homepage.php </link>
    <description> PlantOr is a creative web application for a new generation of staging herberiums.
    Fun and educational, it allows you to create and customize your herbarium by organizing your plant into albums while learning botany. </description>
    <language>en-us </language>
    <item>
    <title> The most popular collected plants  </title>
    <link>http://localhost/PlantOr/homepage.php </link>
    <description> <![CDATA[ 
    ";
    $endfeed="]]> </description>
    </item>
    </channel>
    </rss>";
    $content='';

    $sql = "SELECT *, count(TechnicalName) FROM plants GROUP BY TechnicalName ORDER BY count(TechnicalName) desc limit 3";
    $results = $conn->query($sql);
    while($row = $results->fetch_row()){
        $content.="Technical Name :".$row[1]."<br>";
        $content.="Common Name :".$row[2]."<br>";
        $content.="Plant Group :".$row[3]."<br>";
        $content.="Family :".$row[4]."<br>";
        $content.="Species :".$row[5]."<br>";
        $content.="<br>";
        $content.="-----------------------------------------------------------------------------";
        $content.="<br>";
    }
    
    $end=$feed . $content . $endfeed;

    $ok=file_put_contents($file,$end);
    echo $ok;
    echo"<br>";
    return $ok;
}
createFeed();