<?php  

require 'db.php';
 if(isset($_POST["export"]))  
 {   
      header('Content-Type: text/csv; charset=utf-8');  
      header('Content-Disposition: attachment; filename=data.csv');  
      $output = fopen("php://output", "w");  
      fputcsv($output, array('idUser',	'nume', 'id','plantGroup','plantFamily','plantSpecies'));  
      $query = "SELECT * from albums ORDER BY idUser DESC";  
      $result = mysqli_query($conn, $query);  
      while($row = mysqli_fetch_assoc($result))  
      {  
           fputcsv($output, $row);  
      }  
      fclose($output);  
 }  
 ?>  