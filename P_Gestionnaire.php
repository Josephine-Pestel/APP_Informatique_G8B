<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- En-tête de la page -->
    <link type="text/css" rel="stylesheet" href="P_Gestionnaire.css?t=<? echo time(); ?>" media="all">
    <!--<link rel="stylesheet" href="P_Accueil_Payen.css" />-->
    <meta charset="utf-8" />
    <title>WINK FOR INIFINITE MEASURES</title>
</head>



<body>

<!-- Appel En-Tete et Menu -->

<?php
require('ENTETE_MENU.php');

?>

<!-- Milieu -->

    <h1 class="titre_gestionnaire"> Historique des tests effectués par les utilisateurs </h1>

    <section class="bloc_recherche">
        <div class="rectangle_recherche"> </div>
        <button class="recherche"> RECHERCHER </button>
    </section>

    <div class="fond"> </div>
    <table class="tableau_gestionnaire">
        <tr>
            <th> UTILISATEUR </th>
            <th> TEST </th>
            <th> DATE </th>
            <th> TEMPS </th>
            <th> NIVEAU </th>
        </tr>

        <tr>
            <td> josephine </td>
            <td> température </td>
            <td> ajd </td>
            <td> 1min% </td>
            <td> 4/10 </td>
        </tr>

        <tr>
            <td> yeleen </td>
            <td> température </td>
            <td> ajd </td>
            <td> 1min% </td>
            <td> 4/10 </td>
        </tr>

        <tr>
            <td> antoine </td>
            <td> température </td>
            <td> ajd </td>
            <td> 1min% </td>
            <td> 4/10 </td>
        </tr>

        <tr>
            <td> alexandre </td>
            <td> température </td>
            <td> ajd </td>
            <td> 1min% </td>
            <td> 4/10 </td>
        </tr>

        <tr>
            <td> linaelle </td>
            <td> température </td>
            <td> ajd </td>
            <td> 1min% </td>
            <td> 4/10 </td>
        </tr>

        <tr>
            <td> romé </td>
            <td> température </td>
            <td> ajd </td>
            <td> 1min% </td>
            <td> 4/10 </td>
        </tr>


    </table>

    <button class="bouton_retour"> RETOUR</button>

</body>

    <!-- Appel Footer -->
    <?php
    require('FOOTER.php');

    ?>

</html>