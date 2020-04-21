<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- En-tête de la page -->
    <link type="text/css" rel="stylesheet" href="../CSS_files/MoncompteGestionnaire.css?t=<? echo time(); ?>" media="all">
    <!--<link rel="stylesheet" href="P_Accueil_Payen.css" />-->
    <meta charset="utf-8" />
    <title>WINK FOR INIFINITE MEASURES</title>
</head>



<body>

<?php
require('ENTETE_MENU.php');

?>


<h1 class="titre_moncompte"> MON COMPTE </h1>
<div class="fond"> </div>

<section class="deux_parties">

    <section class="partie_gauche">

        <section class="boutons">
                <button class="editermonprofil">Editer mon profil</button>

                <button class="editierunprofil"> Editer le profil d'un utilisateur</button>


            <a href="P_Gestionnaire.php">
                <button class="consulter"> Consulter l'historique des résultats des utilisateurs</button>
            </a>

            <a href="Gestionnaire_Ajout_Resultat.php">
               <button class="Ajouter"> Ajouter un résultat a un utilisateur</button>
            </a>


        </section>
        <img class="photo_profil" src="../../images/logowink.png" alt="photo de profil"/>
        <p class="description_utilisateur"> Voici ton profil</p>

    </section>



    <?php

    $bdd = new PDO( 'mysql:host=localhost;dbname=g8b;port=3308;charset=UTF8', 'root', '');
    $reponse = $bdd->query('SELECT * FROM `gestionnaire');

    ?>

    <section class="partie_droite">
        <section class="details1">
            <p class="nom"> josephine PESTEL</p>
            <p class="date_inscription"> Incris le ??? </p>
        </section>

        <div class="separation1"></div>

        <section class="details2">
            <p class="naissance"> 23 mars 1999</p>
            <p class="email_utilisateur"> E: nale.surname@gmail.com</p>
        </section>

        <div class="separation"></div>

    </section>
</section>



</body>

<footer>
    <?php include("FOOTER.php"); ?>
</footer>

</html>
