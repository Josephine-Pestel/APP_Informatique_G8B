<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- En-tête de la page -->
    <link type="text/css" rel="stylesheet" href="../../CSS_files/MonCompteAdmin.css?t=<? echo time(); ?>" media="all">
    <!--<link rel="stylesheet" href="P_Accueil_Payen.css" />-->
    <meta charset="utf-8" />
    <title>WINK FOR INIFINITE MEASURES</title>
</head>



<body>

<!-- Appel En-Tete et Menu par requete php avec require-->

<?php
session_start();
require('ENTETE_MENU_Admin.php');

?>

<!-- Milieu -->
<h1 class="titre_moncompte"> MON COMPTE </h1>
<div class="fond"> </div>
<img class="photo_profil" src="../../../images/iconAdmin.png" alt="photo de profil"/>
<section class="deux_parties">

    <section class="partie_gauche">

        <section class="boutons">
            <a href="../SansCompte/P_Connexion.php">
                <button class="ajoutGestionnaire">COMPTE UTILISATEUR</button>
            </a>
            <a href="gererUtilisateur.php">
                <button class="gererUtilisateur">GERER LES UTILISATEURS </button>
            </a>
        </section>
        <section class="boutons2">
            <a href="gererForum.php">
                <button class="gererForum"> GERER LE FORUM</button>
            </a>
            <a href="gererFAQ.php">
                <button class="gererFAQ"> GERER LA FAQ</button>
            </a>
        </section>

    </section>

    <section class="partie_droite">
        <section class="details1">
            <p class="nom"> <?php echo $_SESSION['nom'];?></p>
            <p> Compte administrateur </p>
        </section>


        <div class="separation1"></div>

        <section class="details2">

            <p class="email"> E-mail : <?php echo $_SESSION['email'];?></p>

        </section>

        <div class="separation1"></div>
    </section>

</section>



</body>

<!-- Appel Footer -->
<?php
require('FOOTER_Admin.php');

?>
</html>
<?php
