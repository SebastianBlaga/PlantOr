<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="Collection.css">
        <link rel="stylesheet" href="edit.css">
        <title>PlantOr</title>
    </head>
    <div class="Popupbox">
    <a class="Xbutton"  onClick="document.location.href='Collection.php'">  <img src="Poze/x%20button.svg" alt="Poza"></a>
    <div class="AddPlant">Edit Plant</div>
     <?php
     require 'db.php';
     $sql = "SELECT * FROM plants WHERE idPlant=".$_GET["Value"];
     $result = $conn->query($sql);
     $row = $result->fetch_row();
    echo '<form action="edit_plant.php" method="post">';
        echo '<label for="TechnicalName" class="TechName">Technical Name*</label><br>';
        echo '<input type="text" name="TN" id="fname" value="'.$row[1].'" class="TechName1"><br>';

        echo '<label for="CommonName" class="TechName">Common Name*</label><br>';
        echo '<input type="text" id="fname" name="CN" value="'.$row[2].'" class="TechName1"><br>';

        echo '<label for="PlantGroup" class="TechName">Plant Group*</label><br>';
        echo '<select class="TechName2" name="PG">';
        echo '<option value="flowering-plants">flowering-plants</option>';
        echo '<option value="conifers-cycads">conifers-cycads</option>';
        echo '<option value="liverworts-mosses">liverworts-mosses</option>';
        echo '<option value="ferns">ferns</option>';
        echo '<option value="'.$row[3].'" selected="selected">'.$row[3].'</option>';
        echo '</select>';

        echo '<label for="Family" class="TechName" >Family*</label><br>';
        echo '<select class="TechName2" name="Family">';
        echo '<option value="equisetaceae">equisetaceae</option>';
        echo '<option value="ericaceae">ericaceae</option>';
        echo '<option value="asteraceae">asteraceae</option>';
        echo ' <option value="rosaceae">rosaceae</option>';
        echo ' <option value="proteaceae">proteaceae</option>';
        echo '<option value="'.$row[4].'" selected="selected">'.$row[4].'</option>';
        echo '</select>';

        echo '<label for="Species" class="TechName">Species*</label><br>';
        echo '<select class="TechName2" name="Species">';
        echo '<option value="banksia">banksia</option>';
        echo '<option value="salvia">salvia</option>';
        echo ' <option value="equisetum">quisetum</option>';
        echo ' <option value="pavonia">pavonia</option>';
        echo ' <option value="erica">erica</option>';
        echo '<option value="'.$row[5].'" selected="selected">'.$row[5].'</option>';
        echo '</select><br>';

        echo '<label for="Picture" class="TechName">Picture*</label><br>';
                           if(isset($_GET['error'])){
                               if($_GET['error']=="emptyfields")
                               {
                                   echo '<span class="error" >*You missed some mandatory fields!</span>';
                               }
                           }
                           echo '<div class="form-buttons">';
                           echo '<button type="button" class="buton-form" id="buton-secundar-L"  >Remove image</button>';
                           echo '<button type="button" class="buton-form" id="buton-cancel" onClick="document.location.href=\'Collection.php\'">Cancel</button>';
                         echo '<button type="submit" class="buton-form" id="buton-login" value='.$_GET["Value"].' name="save-submit" >Save</button> ';
                        
                         echo '</div>';
                         echo '</form> ';
?>
    </div>
    <body class="Background">
    <div class="Background1">
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
        <div class=button1 href="#AddPlant">
        <div class=buttonText1>Add</div>
        </div>
        </a>
    </div>
    </div>
     </div>
    <div class=Tabel>
    <div class=J3>
    <div class=Item1>
        <div class=C1>
        <img src="Poze/img_mountains.jpg" alt="Poza" class=p1>
        </div>
        <div class=C>
        <div class=Tname>Technical name</div>
        <div class=Srn1>Some random name</div>
        <div class=Tname>Common name</div>
        <div class=Srn1>Some random name</div>
        <div class=Tname>Plant group</div>
        <div class=Srn1>The plant group</div>
        <div class=Tname>Family</div>
        <div class=Srn1>The plant family</div>
        <div class=Tname>Species</div>
        <div class=Srn1>The plant species</div>
        <div class=EditButton>
            <div class=EditTxt>Edit</div>
            </div>
        <div class=EditButton>
            <div class=EditTxt>Remove</div>
            </div>
        </div>    
    </div>
     <div class=Item1>
        <div class=C1>
        <img src="Poze/img_mountains.jpg" alt="Poza" class=p1>
        </div>
        <div class=C>
        <div class=Tname>Technical name</div>
        <div class=Srn1>Some random name</div>
        <div class=Tname>Common name</div>
        <div class=Srn1>Some random name</div>
        <div class=Tname>Plant group</div>
        <div class=Srn1>The plant group</div>
        <div class=Tname>Family</div>
        <div class=Srn1>The plant family</div>
        <div class=Tname>Species</div>
        <div class=Srn1>The plant species</div>
        <div class=EditButton>
            <div class=EditTxt>Edit</div>
            </div>
        <div class=EditButton>
            <div class=EditTxt>Remove</div>
            </div>
        </div>    
    </div>
    </div>
    <div class=J4>
    <div class=Item1>
    <img src="Poze/img_mountains.jpg" alt="Poza" class=p1>
        <div class=C>
        <div class=Tname>Technical name</div>
        <div class=Srn1>Some random name</div>
        <div class=Tname>Common name</div>
        <div class=Srn1>Some random name</div>
        <div class=Tname>Plant group</div>
        <div class=Srn1>The plant group</div>
        <div class=Tname>Family</div>
        <div class=Srn1>The plant family</div>
        <div class=Tname>Species</div>
        <div class=Srn1>The plant species</div>
        <div class=EditButton>
            <div class=EditTxt>Edit</div>
            </div>
        <div class=EditButton>
            <div class=EditTxt>Remove</div>
            </div>
        </div>    
    </div>
     <div class=Item1>
        <div class=C1>
        <img src="Poze/img_mountains.jpg" alt="Poza" class=p1>
        </div>
        <div class=C>
        <div class=Tname>Technical name</div>
        <div class=Srn1>Some random name</div>
        <div class=Tname>Common name</div>
        <div class=Srn1>Some random name</div>
        <div class=Tname>Plant group</div>
        <div class=Srn1>The plant group</div>
        <div class=Tname>Family</div>
        <div class=Srn1>The plant family</div>
        <div class=Tname>Species</div>
        <div class=Srn1>The plant species</div>
        <div class=EditButton>
            <div class=EditTxt>Edit</div>
            </div>
        <div class=EditButton>
            <div class=EditTxt>Remove</div>
            </div>
        </div>    
    </div>
    </div>       
    </div>
        </div>
        </div>
</body>
</html>