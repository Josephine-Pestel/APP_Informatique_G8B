<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- En-tête de la page -->
    <link type="text/css" rel="stylesheet" href="../../CSS_files/P_MonCompte.css?t=<? echo time(); ?>" media="all">
    <!--<link rel="stylesheet" href="P_Accueil_Payen.css" />-->
    <meta charset="utf-8" />
    <title>WINK FOR INIFINITE MEASURES</title>
</head>



<body>

<!-- Appel En-Tete et Menu par requete php avec require-->

<?php
//on démarre la session de l'utilisateur
session_start();
require('ENTETE_MENU_Utilisateur.php');

?>

<!-- Milieu -->
<h1 class="titre_moncompte"> MON COMPTE </h1>
<div class="fond"> </div>

<img class="photo_profil" src="../../../images/iconProfilUser.png" alt="photo de profil"/>
<section class="deux_parties">

    <section class="partie_gauche">

        <section class="boutons">
            <a href="EditerProfil_Utilisateur.php">
                <button class="editer">EDITER SON PROFIL</button>
            </a>
            <a href="MesResultatsTableau.php">
                <button class="consulter_tableau"> CONSULTER MES RESULTATS (TABLEAU)</button>
            </a>
            <a href="MesResultatsGraphique.php">
                <button class="consulter_graphique"> CONSULTER MES RESULTATS (GRAPHIQUE)</button>
            </a>
        </section>

    </section>

    <section class="partie_droite">
        <section class="details1">
            <p class="nom"> <?php echo $_SESSION['prenom'].' '.$_SESSION['nom'];?></p>
            <p class="date_inscription"> Incris le <?php echo $_SESSION['date_inscription'];?></p>
        </section>

        <div class="separation1"></div>

        <section class="details2">
            <p class="naissance"> Né le <?php echo $_SESSION['naissance'];?></p>
            <p class="email_utilisateur"> EMAIL : <?php echo $_SESSION['email'];?></p>

        </section>

        <div class="separation1"></div>
    </section>

</section>



</body>

<!-- Appel Footer -->
<?php
require('../FOOTER.php');

?>

</html>
