<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- En-tête de la page -->
    <link type="text/css" rel="stylesheet" href="../../CSS_files/rechercheUtilisateur.css?t=<? echo time(); ?>" media="all">
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

<h1 class="titre_page"> Recherche des membres "<?php echo $_POST['recherche']?>" : </h1>

<div>
    <table class="tableau">
        <tr>
            <th><p class="utilisateur">Email</p></th>
            <th><p class="Type">Nom</p></th>
            <th><p class="Date">Prenom</p></th>
            <th><p class="Score">Date de naissance</p></th>
            <th><p class="Score">Date d'inscription</p></th>

        </tr>

        <?php
        require('../../../Controller/barreRecherche_Admin.php');
        ?>
    </table>

</div>

<a href="rechercheUtilisateur.php">
    <button class="bouton_retour">RETOUR </button>
</a>




</body>

<!-- Appel Footer -->
<?php
require('../FOOTER.php');

?>

</html>
<?php
