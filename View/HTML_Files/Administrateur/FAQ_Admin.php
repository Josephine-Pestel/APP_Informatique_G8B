<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- En-tête de la page -->
    <link type="text/css" rel="stylesheet" href="../../CSS_files/FAQ.css?t=<? echo time(); ?>" media="all">
    <!--<link rel="stylesheet" href="P_Accueil_Payen.css" />-->
    <meta charset="utf-8" />
    <title>WINK FOR INIFINITE MEASURES</title>
    <script src="../../Javascript_Files/FAQ.js"></script>

</head>



<body>
<!-- Milieu -->
<!-- Bannière -->

<?php
session_start();
require('ENTETE_MENU_Admin.php');

?>

<div id="menu">

    <!-- MENU 1-->
    <div class="menu" id="menu1" onclick="afficheMenu(this)">
        <a href="#" class="fleche"> &#11166; Combien de temps dure un test ?</a>
    </div>

    <div id="sousmenu1" style="display:none">
        <div class="sousmenu">
            <a href="#">Le temps de passage de chaque test dépend du tests que vous souhaitez passez.
                Mais le temps de chacun de nos tests varie entre 5 et 10 min maximum.</a>
        </div>

    </div>

    <!-- MENU 2-->
    <div class="menu" id="menu2" onclick="afficheMenu(this)">
        <a href="#"> &#11166; Est-ce que l’on connaît nos résultats tout de suite ?</a>
    </div>

    <div id="sousmenu2" style="display:none">
        <div class="sousmenu">
            <a href="#">Vos résultats seront consultables directement sur le site environ 2 à 3 jours après le passage de celui-ci.</a>
        </div>

    </div>

    <!-- MENU 3-->
    <div class="menu" id="menu3" onclick="afficheMenu(this)">
        <a href="#"> &#11166; Peut-on s’inscrire à plusieurs tests dans la même journée ?</a>
    </div>

    <div id="sousmenu3" style="display:none">
        <div class="sousmenu">
            <a href="#">Cela dépendra de l’auto-école dans laquelle vous passerez vos tests et de ses disponibilités en terme
                de créneaux de passage des tests. Mais normalement oui ! N’hésitez pas à contacter votre auto-école directement :)</a>
        </div>

    </div>

    <!-- MENU 4-->
    <div class="menu" id="menu4" onclick="afficheMenu(this)">
        <a href="#"> &#11166; Que faire si je n’arrive pas à me connecter ou que j’ai oublié mon identifiant et/ou mdp ?</a>
    </div>

    <div id="sousmenu4" style="display:none">
        <div class="sousmenu">
            <a href="#">Si vous avez le moindre problème concernant la connexion à notre site internet et que vous n’arrivez pas à y accéder.
                Contactez l’administrateur par mail : infinitemeasures@gmail.com. Il vous répondra dans les 48h.</a>
        </div>

    </div>

    <!-- MENU 5-->
    <div class="menu" id="menu5" onclick="afficheMenu(this)">
        <a href="#"> &#11166; Mes résultats ne s’affiche pas correctement sur mon compte ?</a>
    </div>

    <div id="sousmenu5" style="display:none">
        <div class="sousmenu">
            <a href="#">Au moindre problème avec le site internet, veuillez contacter l’administrateur par mail.
                Pour cela, cliquez sur l’enveloppe qui se trouve dans l’en-tête.</a>
        </div>

    </div>



</div>

</body>

<!-- Appel Footer -->
<?php
require('FOOTER_Admin.php');

?>

</html>
