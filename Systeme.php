<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="Systeme.css" />
    <title>WINK</title>
    <link rel="shortcut icon" href="favicon.ico" />
</head>

<body>
<?php include("ENTETE_MENU.php"); ?>

<section>
    
<h1>Les Tests :</h1>


<div id="conteneur">
    <div class="element 1">


    <p>Stimulus Sonore<br /></p>
       <img src="images/ear2.jpg" id="ear"  />
       <p>Mesure le temps de réaction à <br />
        un son inattendu</p><br />

       <p> <a class=BoutTry href="page.html">Consulter mes résultats</a></p>

    </div>

    <div class="element 2">
    <p>Stimulus Visuel<br /></p>
       <img src="images/eye2.png" id="eye"  />
      <p> Mesure le temps de réaction à <br />
        une lumière inattendu</p><br />

       <p> <a class=BoutTry href="page.html">Consulter mes résultats</a></p>

    </div>

    <div class="element 3">
    <p>Reconnaissance de tonalité<br /></p>
<img src="images/sound2.jpg" id="sound"  />
      <p> Mesure la capacité de l'utilisateur<br />
   à reproduire un son</p><br />

       <p> <a class=BoutTry href="page.html">Consulter mes résultats</a></p>

</div>
</div><br />


<img src="images/arrow.png" id="arrow"  />

<div id="conteneur">
    <div class="element 1">


        <p>Mesure de la fréquence cardique<br /></p>
        <img src="images/heart2.png" id="ear"  />
        <p>En positionant votre doigt nous mesurons votre  <br />
            frequence cardique à l'aide d'un capteur</p><br />

        <p> <a class=BoutTry href="page.html">Consulter mes résultats</a></p>

    </div>

    <div class="element 2">
        <p>Mesure de la temperature corporelle<br /></p>
        <img src="images/thermo2.jpg" id="eye"  />
        <p> Nous mesurons à l'aide d'un capteur adéquat, <br />
            votre température corporelle</p><br />

        <p> <a class=BoutTry href="page.html">Consulter mes résultats</a></p>

    </div>

</div><br />



</section>



</body>
<?php
require('FOOTER.php');

?>
</html>