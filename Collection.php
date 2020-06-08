<?php
session_start();
 require 'TN.php';
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
    <div class=Item1>
        <div class=C1>
        <img src="Poze/img_mountains.jpg" alt="Poza" class=p1>
        </div>
        <div class=C>
        <div class=Tname>Technical name</div>
        <div class=Srn1><?php  TN(7,1);?></div>
        <div class=Tname>Common name</div>
        <div class=Srn1><?php  CN(7,1);?></div>
        <div class=Tname>Plant group</div>
        <div class=Srn1><?php  PG(7,1);?></div>
        <div class=Tname>Family</div>
        <div class=Srn1><?php  Family(7,1);?></div>
        <div class=Tname>Species</div>
        <div class=Srn1><?php  Species(7,1);?></div>
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
        <div class=Srn1><?php  TN(7,1);?></div>
        <div class=Tname>Common name</div>
        <div class=Srn1><?php  CN(7,1);?></div>
        <div class=Tname>Plant group</div>
        <div class=Srn1><?php  PG(7,1);?></div>
        <div class=Tname>Family</div>
        <div class=Srn1><?php  Family(7,1);?></div>
        <div class=Tname>Species</div>
        <div class=Srn1><?php  Species(7,1);?></div>
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
        <div class=Srn1><?php  TN(7,1);?></div>
        <div class=Tname>Common name</div>
        <div class=Srn1><?php  CN(7,1);?></div>
        <div class=Tname>Plant group</div>
        <div class=Srn1><?php  PG(7,1);?></div>
        <div class=Tname>Family</div>
        <div class=Srn1><?php  Family(7,1);?></div>
        <div class=Tname>Species</div>
        <div class=Srn1><?php  Species(7,1);?></div>
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
        <div class=Srn1><?php  TN(7,1);?></div>
        <div class=Tname>Common name</div>
        <div class=Srn1><?php  CN(7,1);?></div>
        <div class=Tname>Plant group</div>
        <div class=Srn1><?php  PG(7,1);?></div>
        <div class=Tname>Family</div>
        <div class=Srn1><?php  Family(7,1);?></div>
        <div class=Tname>Species</div>
        <div class=Srn1><?php  Species(7,1);?></div>
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
</body>
</html>