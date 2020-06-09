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
        
    <form action="edit_plant.php" method="post">
        <label for="TechnicalName" class="TechName">Technical Name*</label><br>
        <input type="text" name="TN" id="fname" value="ghghg" class="TechName1"><br>

        <label for="CommonName" class="TechName">Common Name*</label><br>
        <input type="text" id="fname" name="CN" class="TechName1"><br>

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
            <?php
                           if(isset($_GET['error'])){
                               if($_GET['error']=="emptyfields")
                               {
                                   echo '<span class="error" >*You missed some mandatory fields!</span>';
                               }
                           }
?>
 <div class="form-buttons">
 <button type="button" class="buton-form" id="buton-secundar-L"  >Remove image</button>
                        <button type="button" class="buton-form" id="buton-cancel" onClick="document.location.href='Collection.php'">Cancel</button>
                        <?php echo '<button type="submit" class="buton-form" id="buton-login" value='.$_GET["Value"].' name="save-submit" >Save</button> '?>
                        
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