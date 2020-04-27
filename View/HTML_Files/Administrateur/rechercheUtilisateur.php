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

<div class="barre_recherche">
    <form action="" method="POST">
        <input class="barreDeRecherche" type="search" name="recherche" placeholder="Rechercher un utilisateur">
        <input class="bouton_recherche" type="submit" />

    </form>
</div>

<div class="tableau">
    <table class="tableau_gestionnaire">
        <tr>
            <th><p class="utilisateur">Nom de l'utilisateur</p></th>
            <th><p class="Type">Type de test</p></th>
            <th><p class="Date">Date</p></th>
            <th><p class="Score">score</p></th>

        </tr>
        <?php
        require('../../../Controller\rechercheUtilisateur.php');

        ?>
    </table>

</div>

<a href="MonCompteGestionnaire.php">
    <button class="bouton_retour">RETOUR </button>
</a>




</body>

<!-- Appel Footer -->
<?php
require('../FOOTER.php');

?>

</html>
<?php
