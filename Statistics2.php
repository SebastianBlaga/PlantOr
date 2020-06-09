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
                    <a class="active" href="#statistics">Statistics</a>
                    <a href="#collection">Collection</a>
                    <a href="#albums">Albums</a>
                    <a href="#about">About</a>
                    <a href="#logout">Log Out</a>
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
        $sql = "select *, count(TechnicalName) from plants group by TechnicalName order by count(TechnicalName) desc limit 3";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        $count=$result->num_rows;
            $count=0;
        while($row = $result->fetch_row()){
            if($count<3)
            {
            // output data of each row
       echo'    <div class=Item1>';
        echo'<div class=C1>';
       echo' <img src="Poze/img_mountains.jpg" alt="Poza" class=p1>';
       echo' </div>';
       echo' <div class=C>';
       echo' <div class=Tname>Technical name</div>';
       echo' <div class=Srn1>';
           echo TN($row[7],1);
           echo '</div>';
       echo' <div class=Tname>Common name</div>';
       echo' <div class=Srn1>';
           echo CN($row[7],1);
           echo '</div>';
       echo' <div class=Tname>Plant group</div>';
       echo' <div class=Srn1>';
           echo PG($row[7],1);
           echo '</div>';
       echo' <div class=Tname>Family</div>';
        echo'<div class=Srn1>';
           echo Family($row[7],1);
           echo '</div>';
        echo'<div class=Tname>Species</div>';
       echo' <div class=Srn1>';
           echo Species($row[7],1);
           echo '</div>';
       echo' <div class=EditButton>';
       echo'     <div class=EditTxt>Edit</div>';
       echo'     </div>';
       echo' <div class=EditButton>';
       echo'     <div class=EditTxt>Remove</div>';
       echo'     </div>';
      echo'  </div>    ';
   echo' </div>';
            }
        $count=$count+1;
        }
        }
?>
</div>
        

        <div class="yours">Your Statistics</div>
        <div class="Statbox">
    <div class="NROPC">Nr. of plants collected :<?php echo NROPC(1); ?> </div>
    <div class="NROPC">Most popular plant group : <?php echo MPPG(1); ?></div>
    <div class="NROPC">Most popular Family : <?php echo MPF(1); ?></div>
    <div class="NROPC">Most popular Species :<?php echo MPF(1); ?> </div>
        </div>
 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Saab',    <?php echo PGC(1,'saab'); ?>],
          ['volvo',      <?php echo PGC(1,'volvo'); ?>],
          ['mercedes',  <?php echo PGC(1,'mercedes'); ?>]
        ]);
          
          var data2 = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Family1',     <?php echo FamilyC(1,'saab'); ?>],
          ['Family2',      <?php echo FamilyC(1,'volvo'); ?>],
          ['Family3',  <?php echo FamilyC(1,'mercedes'); ?>]
        ]);
          
          
          var data3 = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Species1',    <?php echo SpeciesC(1,'volvo'); ?>],
          ['Species2',      <?php echo SpeciesC(1,'saab'); ?>],
          ['Species3',  <?php echo SpeciesC(1,'mercedes'); ?>]
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
$sql="SELECT * FROM plants order by idPlant";    
$result=mysqli_query($conn,$sql)    
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