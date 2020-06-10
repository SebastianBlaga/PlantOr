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
    <div class="Popupbox">
    <a class="Xbutton" onClick="document.location.href='collection.php'">  <img src="Poze/x%20button.svg" alt="Poza"></a>
    <div class="AddPlant">Add Plant</div>
        
    <form action="add_plant.php" method="POST" enctype="multipart/form-data">
  <label for="TechnicalName" class="TechName">Techncal Name*</label><br>
  <input type="text" name="TN" id="fname" class="TechName1"><br><br>
  <label for="CommonName" class="TechName">Common Name*</label><br>
  <input type="text" id="fname" name="CN" class="TechName1"><br><br>

  <label for="PlantGroup" class="TechName">Plant Group*</label><br>
  <select class="TechName2" name="PG">
 <option value="flowering-plants">flowering-plants</option>
 <option value="conifers-cycads">conifers-cycads</option>
 <option value="liverworts-mosses">liverworts-mosses</option>
  <option value="ferns">ferns</option>
  </select>';

  <label for="Family" class="TechName" >Family*</label><br>
  <select class="TechName2" name="Family">
  <option value="equisetaceae">equisetaceae</option>
    <option value="ericaceae">ericaceae</option>
    <option value="asteraceae">asteraceae</option>
    <option value="rosaceae">rosaceae</option>
    <option value="proteaceae">proteaceae</option>
        </select>

  <label for="Species" class="TechName">Species*</label><br>
        <select class="TechName2" name="Species">
        <option value="banksia">banksia</option>
        <option value="salvia">salvia</option>
        <option value="equisetum">quisetum</option>
        <option value="pavonia">pavonia</option>
        <option value="erica">erica</option>
        </select><br>

<label for="Picture" class="TechName">Picture*</label><br>
<label for="Picture" class="TechName4">Choose file</label>
<input type="file" id="img" name="img" accept="image/*" class="TechName3">
<?php
                           if(isset($_GET['error'])){
                               if($_GET['error']=="emptyfields")
                               {
                                   echo '<span class="error" >*You missed some mandatory fields da!</span>';
                               }
                           }
?>
<div class="buttons2">
  <div class="Cancel1" onClick="document.location.href='collection.php'">Cancel</div> 
  <input type="submit" value="Add Plant" name="Submit1" class="Submit1"> 
</div>
</form> 
    </div>
    <body class="Background">
    <div class="Background1">
         <header>
            <div class="menu-header">
                <div class="menu">
                    <a href="logoutConfirm.php" onClick="document.location.href='logoutConfirm.php'">Log Out</a>
                    <a href="#about" onClick="document.location.href='about.php'">About</a>
                    <a href="#albums" onClick="document.location.href='album.php'">Albums</a>
                    <a class="active" href="#collection">Collection</a>
                    <a href="#statistics" onClick="document.location.href='statistics2.php'">Statistics</a>
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
        <div class=button1 href="#AddPlant">
        <div class=buttonText1>Add</div>
        </div>
        </a>
    </div>




    <div class=Tabel>
    <div class=J3>
<?php 
           if(!isset($_SESSION['userId'])){
            echo "<p>You need to log in first! (:</p> ";
            }
        else
            {
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
        
        

        echo' <img src="img/plants/'.$row[7].'" alt="Poza" class=p1>';
 
       
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
<div class=J4>
<?php 
           if(!isset($_SESSION['userId'])){
            echo "  ";
            }
        else
            {
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
        
  
        echo' <img src="img/plants/'.$row[7].'" alt="Poza" class=p1>';
         
  
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
</div>
</div>
    </div>      
    </div>
        </div>
        </div>
</body>
</html>