<?php
session_start();
 require 'TN.php';
require 'db.php';
require 'Charts.php';
?>
<!DOCTYPE HTML>
<html lang="en">

<head>
    <title>Statistics</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="Album2.css" />
    <link rel="stylesheet" href="Collection.css">
</head>

<body>
    
        <header>
            <div class="menu-header">
                <div class="menu">
                    <a class="active" href="#statistics" onClick="document.location.href='statistics2.php'">Statistics</a>
                    <a href="#collection" onClick="document.location.href='collection.php'">Collection</a>
                    <a href="#albums" onClick="document.location.href='album.php'">Albums</a>
                    <a href="#about" onClick="document.location.href='about2.php'">About</a>
                    <a href="#logout" onClick="document.location.href='logoutConfirm.php'">Log Out</a>
                </div>
                <div class="Logo"> <img src='Poze/Logo%20white.svg'></div>
            </div>
        </header>

        <div class="description">
            <div class="title">Statistics</div>
            <div class="text">
                <p>
                    Keep on track with your most common types of plants of your collection.
                    Have an eye on the preferences of other users.
                </p>
            </div>

        </div>
        <div class="suggested"> Most popular collected plants</div>
<div class="AfisarePlante">
<?php 
           if(!isset($_SESSION['userId'])){
            echo "<p>You need to log in first! (:</p> ";
            }
        else
            {
        $sql = "select * from plants group by TechnicalName order by count(TechnicalName) desc limit 4";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        $count=$result->num_rows;
        if($count % 2==0)
            $count=$count+1;
    
        while($row = $result->fetch_row()){
            if($count % 2==1)
            {
            // output data of each row
       echo'    <div class=Item1>';
        echo'<div class=C1>';
        
        

        echo' <img src="img/plants/'; echo $row[7]; echo'" alt="Poza" class=p1>';
 
       
       echo' </div>';
       echo' <div class=C>';
       echo' <div class=Tname>Technical name</div>';
       echo' <div class=Srn1>';
           echo TN($row[6],$_SESSION['userId']);
           echo '</div>';
       echo' <div class=Tname>Common name</div>';
       echo' <div class=Srn1>';
           echo CN($row[6],$_SESSION['userId']);
           echo '</div>';
       echo' <div class=Tname>Plant group</div>';
       echo' <div class=Srn1>';
           echo PG($row[6],$_SESSION['userId']);
           echo '</div>';
       echo' <div class=Tname>Family</div>';
        echo'<div class=Srn1>';
           echo Family($row[6],$_SESSION['userId']);
           echo '</div>';
        echo'<div class=Tname>Species</div>';
       echo' <div class=Srn1>';
           echo Species($row[6],$_SESSION['userId']);
           echo '</div>';
           echo'<form action="editpopup.php" method=\"GET\">';
           echo'<button type=\"submit\" class=removeButton value='.$row[6].  ' name="Value"> Edit </button>';
           echo'</form>';
       echo'<form action="removePlantPopup.php" method=\"GET\">';
       echo'<button type=\"submit\" class=removeButton value='.$row[6].  ' name="Value"> Remove </button>';
       echo'</form>';
      echo'  </div>    ';
   echo' </div>';
            }
        $count=$count-1;
        }
        }}
?>
</div>
        

        <div class="yours">Your Statistics</div>
        <div class="Statbox">
    <div class="NROPC">Nr. of plants collected :<?php           
        if(!isset($_SESSION['userId'])){
                echo " ";
                }
            else
                { echo NROPC($_SESSION['userId']);} ?> </div>
    <div class="NROPC">Most popular plant group : <?php            
    if(!isset($_SESSION['userId'])){
                echo " ";
                }
            else
                { echo MPPG($_SESSION['userId']);} ?></div>
    <div class="NROPC">Most popular Family : <?php
               if(!isset($_SESSION['userId'])){
                echo " ";
                }
            else
                { echo MPF($_SESSION['userId']); }?></div>
    <div class="NROPC">Most popular Species :<?php 
               if(!isset($_SESSION['userId'])){
                echo " ";
                }
            else
                {echo MPF($_SESSION['userId']);} ?> </div>
        </div>
 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['flowering-plants', <?php echo PGC($_SESSION['userId'],'flowering-plants'); ?>],
          ['conifers-cycads', <?php echo PGC($_SESSION['userId'],'conifers-cycads'); ?>],
          ['ferns',  <?php echo PGC($_SESSION['userId'],'ferns'); ?>],
          ['equisetum',  <?php echo PGC($_SESSION['userId'],'liverworts-mosses'); ?>]
        ]);
          
          var data2 = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['equisetaceae',     <?php echo FamilyC($_SESSION['userId'],'equisetaceae'); ?>],
          ['ericaceae',      <?php echo FamilyC($_SESSION['userId'],'ericaceae'); ?>],
          ['asteraceae',  <?php echo FamilyC($_SESSION['userId'],'asteraceae'); ?>],
          ['rosaceae',      <?php echo FamilyC($_SESSION['userId'],'rosaceae'); ?>],
          ['proteaceae',  <?php echo FamilyC($_SESSION['userId'],'proteaceae'); ?>]
        ]);
          
          
          var data3 = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['banksia',    <?php echo SpeciesC($_SESSION['userId'],'banksia'); ?>],
          ['salvia',      <?php echo SpeciesC($_SESSION['userId'],'salvia'); ?>],
          ['equisetum',  <?php echo SpeciesC($_SESSION['userId'],'equisetum'); ?>],
          ['pavonia',      <?php echo SpeciesC($_SESSION['userId'],'pavonia'); ?>],
          ['erica',  <?php echo SpeciesC($_SESSION['userId'],'erica'); ?>]
        ]);

        var options = {
          title: 'PlantGroup'
        };
          
          var options2 = {
          title: 'Family'
        };
          
          var options3 = {
          title: 'Species'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
           chart.draw(data, options);
          var chart2 = new google.visualization.PieChart(document.getElementById('piechart2'));
          
          chart2.draw(data2, options2);
          var chart3 = new google.visualization.PieChart(document.getElementById('piechart3'));

    
        chart3.draw(data3, options3);
      }
    </script>
<div class="yours2">Your Charts</div>
<div class="Charts">
    <div id="piechart" class="PGChart"></div>
    <div id="piechart2" class="PGChart"></div>
    <div id="piechart3" class="PGChart"></div>
    </div>
<div class="Exports">
<?php   
           if(!isset($_SESSION['userId'])){
            echo "<p>You need to log in first! (:</p> ";
            }
        else
            {
$sql="SELECT * FROM plants order by idPlant";    
$result=mysqli_query($conn,$sql);  }  
?> 
<div>
<form method="post" action="export.php" align="center">  
                     <input type="submit" name="export" value="CSV Export Tabel Plante" class="Export1" />  
</form> 
<form method="post" action="export2.php" align="center">  
                     <input type="submit" name="export" value="CSV Export Tabel Users" class="Export1" />  
</form>
<form method="post" action="export3.php" align="center">  
                     <input type="submit" name="export" value="CSV Export Tabel Albums" class="Export1" />  
</form>
</div>  
</div>

</body>

</html>