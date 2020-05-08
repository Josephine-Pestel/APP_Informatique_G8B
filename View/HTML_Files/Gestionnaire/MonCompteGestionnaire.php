<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- En-tête de la page -->
    <link type="text/css" rel="stylesheet" href="../../CSS_files/MoncompteGestionnaire.css?t=<? echo time(); ?>" media="all">
    <!--<link rel="stylesheet" href="P_Accueil_Payen.css" />-->
    <meta charset="utf-8" />
    <title>WINK FOR INIFINITE MEASURES</title>
</head>



<body>

<?php
require('ENTETE_MENU_Gestionnaire.php');
session_start();
?>


<h1 class="titre_moncompte"> MON COMPTE </h1>
<div class="fond"> </div>

<section class="deux_parties">

    <img class="photo_profil" src="../../../images/iconGestionnaire.png" alt="photo de profil"/>

    <section class="partie_gauche">
        <section class="boutons1">
            <a href="EditerProfilGestionnaire.php">
                <button class="editermonprofil"> Editer mon profil</button>
            </a>

        </section>

        </br></br></br></br></br>

        <section class="boutons2">
            <a href="P_Gestionnaire.php">
                <button class="consulter"> Consulter l'historique des résultats des utilisateurs</button>
            </a>

            <a href="Gestionnaire_Ajout_Resultat.php">
               <button class="Ajouter"> Ajouter un résultat a un utilisateur</button>
            </a>
        </section>


    </section>



    <?php

    $bdd = new PDO( 'mysql:host=localhost;dbname=g8b;port=3308;charset=UTF8', 'root', '');
    $reponse = $bdd->query('SELECT * FROM gestionnaire');

    ?>
    <section class="partie_droite">
        <section class="details1">
            <p class="nom"><?php echo $_SESSION['nom']?> </p>
            <p class="email"> Email:<?php echo $_SESSION['email']?> </p>
        </section>

        <section class="details2">
            <p class="num_tel"> numero de Tel : <?php echo $_SESSION['num_tel']?></p>
            <p class="domaine"> Domaine : <?php echo $_SESSION['domaine']?></p>

        </section>

    </section>

</section>



</body>

<footer>
    <?php
    require('FOOTER_Gestionnaire.php');

    ?>
</footer>

</html>
