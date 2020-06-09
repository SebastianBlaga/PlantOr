<?php  

require 'db.php';
 if(isset($_POST["export"]))  
 {   
      header('Content-Type: text/csv; charset=utf-8');  
      header('Content-Disposition: attachment; filename=data.csv');  
      $output = fopen("php://output", "w");  
      fputcsv($output, array('idUsers',	'idAlbum',	'NumeAlbum',	'idp1',	'idp2',	'idp3',	'idp4',	'idp5',	'idp6',	'idp7	','idp8',	'idp9',	'idp10'));  
      $query = "SELECT * from albums ORDER BY idUsers DESC";  
      $result = mysqli_query($conn, $query);  
      while($row = mysqli_fetch_assoc($result))  
      {  
           fputcsv($output, $row);  
      }  
      fclose($output);  
 }  
 ?>  