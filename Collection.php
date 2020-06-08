<?php
session_start();
 require 'TN.php';
require 'db.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="Collection.css">
        <title>PlantOr</title>
    </head>
    <body class="Background">
         <header>
            <div class="menu-header">
                <div class="menu">
                    <a href="#statistics">Statistics</a>
                    <a href="#collection">Collection</a>
                    <a class="active" href="#albums">Albums</a>
                    <a href="#about">About</a>
                    <a href="#logout">Log Out</a>
                </div>
                <div class="Logo"> <img src='Poze/Logo%20white.svg'></div>
             </div>
        </header>
        <div class="Items">
    <div class=Bara2>
    <div class=Bara2Items>
    <div class=J1>
       <div class=PlantCol>Your Plant Collection</div>
       <div class=PlantColText>Here you can see the plants you added to your personal virtual herbarium. Use the Add Plant button to add a new plant to your collection.</div>
    </div>
    <div class=J2>
        <a href="#login">
        <div class=button1 href="#CollPopup">
        <div class=buttonText1>Add</div>
        </div>
        </a>
    </div>
    </div>
     </div>
    <div class=Tabel>
    <div class=J3>
<?php 
        $sql = "SELECT * FROM plants";
        $result = $conn->query($sql);
$count=1;
        if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()){
            if($count % 2==1)
            {
            // output data of each row
       echo'    <div class=Item1>';
        echo'<div class=C1>';
       echo' <img src="Poze/img_mountains.jpg" alt="Poza" class=p1>';
       echo' </div>';
       echo' <div class=C>';
       echo' <div class=Tname>Technical name</div>';
       echo' <div class=Srn1>';
           echo TN($count,1);
           echo '</div>';
       echo' <div class=Tname>Common name</div>';
       echo' <div class=Srn1>';
           echo CN($count,1);
           echo '</div>';
       echo' <div class=Tname>Plant group</div>';
       echo' <div class=Srn1>';
           echo PG($count,1);
           echo '</div>';
       echo' <div class=Tname>Family</div>';
        echo'<div class=Srn1>';
           echo Family($count,1);
           echo '</div>';
        echo'<div class=Tname>Species</div>';
       echo' <div class=Srn1>';
           echo Species($count,1);
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
    <div class=J4>
<?php 
        $sql = "SELECT * FROM plants";
        $result = $conn->query($sql);
$count=2;
        if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()){
            if($count % 2==0)
            {
            // output data of each row
       echo'    <div class=Item1>';
        echo'<div class=C1>';
       echo' <img src="Poze/img_mountains.jpg" alt="Poza" class=p1>';
       echo' </div>';
       echo' <div class=C>';
       echo' <div class=Tname>Technical name</div>';
       echo' <div class=Srn1>';
           echo TN($count,1);
           echo '</div>';
       echo' <div class=Tname>Common name</div>';
       echo' <div class=Srn1>';
           echo CN($count,1);
           echo '</div>';
       echo' <div class=Tname>Plant group</div>';
       echo' <div class=Srn1>';
           echo PG($count,1);
           echo '</div>';
       echo' <div class=Tname>Family</div>';
        echo'<div class=Srn1>';
           echo Family($count,1);
           echo '</div>';
        echo'<div class=Tname>Species</div>';
       echo' <div class=Srn1>';
           echo Species($count,1);
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
    </div>
        </div>
</body>
</html>