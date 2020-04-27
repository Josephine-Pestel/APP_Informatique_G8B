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
<h1 class="titre_moncompte"> Rechercher un membre  </h1>
<?php
require('../../../Controller/rechercheUtilisateur.php');

?>

</body>

<!-- Appel Footer -->
<?php
require('../FOOTER.php');

?>

</html>
<?php
