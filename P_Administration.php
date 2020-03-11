<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- En-tête de la page -->
    <link type="text/css" rel="stylesheet" href="P_Administrateur.css?t=<? echo time(); ?>" media="all">
    <!--<link rel="stylesheet" href="P_Accueil_Payen.css" />-->
    <meta charset="utf-8" />
    <title>WINK FOR INIFINITE MEASURES</title>
</head>



<body>

<!-- Appel En-Tete et Menu -->

<?php
require('ENTETE_MENU.php');

?>

<h1 class="titre_admin"> PORTAIL DE L'ADMINISTRATEUR</h1>

<button class="connexion"> CONNEXION</button>

<!-- Milieu -->

<section class="possibilites">
    <button class="forum"> GERER LE FORUM</button>
    <button class="FAQ"> GERER LA FAQ</button>
    <button class="utilisateur"> GERER LES UTILISATEURS</button>
</section>

</body>

<!-- Appel Footer -->
<?php
require('FOOTER.php');

?>

</html>

