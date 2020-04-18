<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- En-tête de la page -->
    <link type="text/css" rel="stylesheet" href="View/P_Gestionnaire.css?t=<? echo time(); ?>" media="all">
    <!--<link rel="stylesheet" href="P_Accueil_Payen.css" />-->
    <meta charset="utf-8" />
    <title>WINK FOR INIFINITE MEASURES</title>
</head>



<body>

<?php
require('ENTETE_MENU.php');

?>
<?php

$pdo = new PDO( 'mysql:host=localhost;dbname=g8b;port=3308;charset=UTF8', 'root', '');
$sql = 'SELECT * FROM tests';
$req = $pdo->query($sql);

?>


<!--creation du tableau-->

    <h1 class="titre_gestionnaire"> Historique des tests effectués par les utilisateurs </h1>

    <section class="bloc_recherche">
        <div class="rectangle_recherche"> </div>
        <button class="recherche"> RECHERCHER </button>
    </section>

    <div class="fond"> </div>
    <table class="tableau_gestionnaire">
        <tr>
            <th><p class="utilisateur">Nom de l'utilisateur</p></th>
            <th><p class="Type">Type de test</p></th>
            <th><p class="Date">Date</p></th>
            <th><p class="Score">score</p></th>

        </tr>
        <tr>
            <? while($row = $req->fetch()) { ?>
            <td><? echo $row['idUtilisateur']; ?></td>
            <td><? echo $row['type']; ?></td>

            <td><? echo $row['date']; ?></td>
            <td><? echo $row['score']; ?></td>
        </tr>
        <? }
        $req->closeCursor();
        ?>
    </table>



</body>

    <!-- Appel Footer -->
    <?php
    require('FOOTER.php');

    ?>

</html>