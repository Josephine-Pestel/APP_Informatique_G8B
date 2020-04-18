<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- En-tête de la page -->
    <link type="text/css" rel="stylesheet" href="View/P_MonCompte.css?t=<? echo time(); ?>" media="all">
    <!--<link rel="stylesheet" href="P_Accueil_Payen.css" />-->
    <meta charset="utf-8" />
    <title>WINK FOR INIFINITE MEASURES</title>
</head>



<body>

<!-- Appel En-Tete et Menu par requete php avec require-->

<?php
require('ENTETE_MENU.php');

?>

<!-- Milieu -->
<h1 class="titre_moncompte"> MON COMPTE </h1>
<div class="fond"> </div>

<section class="deux_parties">

    <section class="partie_gauche">

        <section class="boutons">
            <button class="edtier"> EDITER SON PROFIL</button>
            <button class="consulter"> CONSULTER MES RESULTATS</button>
        </section>
        <img class="photo_profil" src="../images/logowink.png" alt="photo de profil"/>
        <p class="description_utilisateur"> Voici ton profil</p>

    </section>


    <section class="partie_droite">
        <section class="details1">
            <p class="nom"> JOSEPHINE PESTEL</p>
            <p class="date_inscription"> Incris le ??? </p>
        </section>

        <div class="separation1"></div>

        <section class="details2">
            <p class="naissance"> 23 mars 1999</p>
            <p class="email_utilisateur"> E: nale.surname@gmail.com</p>
        </section>

        <div class="separation1"></div>

    </section>
</section>



</body>

<!-- Appel Footer -->
<?php
require('FOOTER.php');

?>

</html>
<?php
