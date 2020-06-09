<?php
if(!isset($_SESSION))
{
session_start();
}
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
                    <a href="logoutConfirm.php">Log Out</a>
                    <a href="#about" onClick="document.location.href='about.php'">About</a>
                    <a class="active" href="#albums">Albums</a>
                    <a href="#collection">Collection</a>
                    <a href="#statistics">Statistics</a>
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
        <div class=button1 >
        <div class=buttonText1 onclick="document.location.href='CollectionPopup.php'" >Add</div>
        </div>
    </div>
    </div>
     </div>
    <div class=Tabel>
    <div class=J3>
<?php 
        $sql = "SELECT * FROM plants WHERE idUser=".$_SESSION['userId'];
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
        
        
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)) {
            echo "SQL statement failed!";
        } else {
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            if($row = mysqli_fetch_assoc($result))  {
                echo' <img src="img/plants/'.$row["imageName"].'" alt="Poza" class=p1>';
            }
        }
       
       echo' </div>';
       echo' <div class=C>';
       echo' <div class=Tname>Technical name</div>';
       echo' <div class=Srn1>';
           echo TN($row[7],$_SESSION['userId']);
           echo '</div>';
       echo' <div class=Tname>Common name</div>';
       echo' <div class=Srn1>';
           echo CN($row[7],$_SESSION['userId']);
           echo '</div>';
       echo' <div class=Tname>Plant group</div>';
       echo' <div class=Srn1>';
           echo PG($row[7],$_SESSION['userId']);
           echo '</div>';
       echo' <div class=Tname>Family</div>';
        echo'<div class=Srn1>';
           echo Family($row[7],$_SESSION['userId']);
           echo '</div>';
        echo'<div class=Tname>Species</div>';
       echo' <div class=Srn1>';
           echo Species($row[7],$_SESSION['userId']);
           echo '</div>';
           echo'<form action="editpopup.php" method=\"GET\">';
           echo'<button type=\"submit\" class=removeButton value='.$row[7].  ' name="Value"> Edit </button>';
           echo'</form>';
       echo'<form action="removePlantPopup.php" method=\"GET\">';
       echo'<button type=\"submit\" class=removeButton value='.$row[7].  ' name="Value"> Remove </button>';
       echo'</form>';
      echo'  </div>    ';
   echo' </div>';
            }
        $count=$count-1;
        }
        }
?>
    </div>
    <div class=J4>
<?php 
        $sql = "SELECT * FROM plants WHERE idUser=".$_SESSION['userId'];
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $count=$result->num_rows;
            if($count % 2==0)
            $count=$count+1;
        while($row = $result->fetch_row()){
            if($count % 2==0)
            {
            // output data of each row
       echo'    <div class=Item1>';
        echo'<div class=C1>';
        
        
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)) {
            echo "SQL statement failed!";
        } else {
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            if($row = mysqli_fetch_assoc($result))  {
                echo' <img src="img/plants/'.$row["imageName"].'" alt="Poza" class=p1>';
            }
        }
       echo' </div>';
       echo' <div class=C>';
       echo' <div class=Tname>Technical name</div>';
       echo' <div class=Srn1>';
           echo TN($row[7],$_SESSION['userId']);
           echo '</div>';
       echo' <div class=Tname>Common name</div>';
       echo' <div class=Srn1>';
           echo CN($row[7],$_SESSION['userId']);
           echo '</div>';
       echo' <div class=Tname>Plant group</div>';
       echo' <div class=Srn1>';
           echo PG($row[7],$_SESSION['userId']);
           echo '</div>';
       echo' <div class=Tname>Family</div>';
        echo'<div class=Srn1>';
           echo Family($row[7],$_SESSION['userId']);
           echo '</div>';
        echo'<div class=Tname>Species</div>';
       echo' <div class=Srn1>';
           echo Species($row[7],$_SESSION['userId']);
           echo '</div>';
           echo'<form action="editpopup.php" method=\"GET\">';
           echo'<button type=\"submit\" class=removeButton value='.$row[7].  ' name="Value"> Edit </button>';
           echo'</form>';
       echo'<form action="removePlantPopup.php" method=\"GET\">';
       echo'<button type=\"submit\" class=removeButton value='.$row[7].  ' name="Value"> Remove </button>';
       echo'</form>';
      echo'  </div>    ';
   echo' </div>';
            }
        $count=$count-1;
        }
        }
?>        
    </div>       
    </div>
</div>
</body>
</html>