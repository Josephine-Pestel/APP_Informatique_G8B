<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- En-tête de la page -->
    <link type="text/css" rel="stylesheet" href="../../CSS_files/AccueilUtilisateur.css?t=<? echo time(); ?>" media="all">
    <!--<link rel="stylesheet" href="P_Accueil_Payen.css" />-->
    <meta charset="utf-8" />
    <title>WINK FOR INIFINITE MEASURES</title>
</head>



<body>
<!-- Milieu -->
<!-- Bannière -->

<?php
session_start();
require('ENTETE_MENU_Utilisateur.php');

?>

<section>
    <p class="bonjour_utilisateur"> Bonjour <?php echo $_SESSION['prenom']. ' '. $_SESSION['nom']?> !</p>
    <div class="banniere_image">
        <div id="banniere_description">
            <p>TESTEZ VOS RÉFLEXES AVEC NOS DERNIERS TESTS PSYCHOTECHNIQUES</p>
        </div>
    </div>
</section>



</body>
<?php
require('FOOTER_Utilisateur.php');

?>

</html>