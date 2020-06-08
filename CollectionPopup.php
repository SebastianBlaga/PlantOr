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
    <a class="Xbutton" href="Da">  <img src="Poze/x%20button.svg" alt="Poza"></a>
    <div class="AddPlant">Add Plant</div>
        
    <form action="add_plant.php" method="post">
  <label for="TechnicalName" class="TechName">Techncal Name*</label><br>
  <input type="text" name="TN" id="fname" class="TechName1"><br><br>
  <label for="CommonName" class="TechName">Common Name*</label><br>
  <input type="text" id="fname" name="CN" class="TechName1"><br><br>
  <label for="PlantGroup" class="TechName">Plant Group*</label><br>
  <select class="TechName2" name="PG">
  <option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="mercedes">Mercedes</option>
  <option value="audi">Audi</option>
        </select>
  <label for="Family" class="TechName" >Family*</label><br>
  <select class="TechName2" name="Family">
             <option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="mercedes">Mercedes</option>
  <option value="audi">Audi</option>
        </select>
  <label for="Species" class="TechName">Species*</label><br>
        <select class="TechName2" name="Species">
             <option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="mercedes">Mercedes</option>
  <option value="audi">Audi</option>
        </select><br>
<label for="Picture" class="TechName">Picture*</label><br>
<label for="Picture" class="TechName4">Choose file</label>
<input type="file" id="img" name="img" accept="image/*" class="TechName3">
<?php
                           if(isset($_GET['error'])){
                               if($_GET['error']=="emptyfields")
                               {
                                   echo '<span class="error" >*You missed some mandatory fields!</span>';
                               }
                           }
?>
<div class="buttons2">
  <div class="Cancel1" href="Da">Cancel</div> 
  <input type="submit" value="Add Plant" name="Submit1" class="Submit1"> 
</div>
</form> 
    </div>
    <body class="Background">
    <div class="Background1">
         <header>
            <div class="menu-header">
                <div class="menu">
                    <a href="#statistics">Statistics</a>
                    <a href="#collection">Collection</a>
                    <a class="active" href="#albums">Albums</a>
                    <a href="#about" onClick="document.location.href='about.php'">About</a>
                    <a href="logoutConfirm.php">Log Out</a>
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
    </div>
     </div>
    <div class=Tabel>
    <div class=J3>
<?php 
        $sql = "SELECT * FROM plants";
        $result = $conn->query($sql);
$count=0;
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
$count=1;
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
        </div>
</body>
</html>