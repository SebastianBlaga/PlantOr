<?php  

require 'db.php';
 if(isset($_POST["export"]))  
 {   
      header('Content-Type: text/csv; charset=utf-8');  
      header('Content-Disposition: attachment; filename=data.csv');  
      $output = fopen("php://output", "w");  
      fputcsv($output, array('idUser', 'TechnicalName', 'CommonName', 'PlantGroup', 'Family', 'Species' ,'idPlant'));  
      $query = "SELECT * from plants ORDER BY idPlant DESC";  
      $result = mysqli_query($conn, $query);  
      while($row = mysqli_fetch_assoc($result))  
      {  
           fputcsv($output, $row);  
      }  
      fclose($output);  
 }  
 ?>  