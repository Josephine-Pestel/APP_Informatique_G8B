<!DOCTYPE html>
<html lang="fr">

<head>
    <link type="text/css" rel="stylesheet" href="../../CSS_files/P_Gestionnaire.css?t=<? echo time(); ?>" media="all">
    <meta charset="utf-8" />
    <title>WINK FOR INIFINITE MEASURES</title>
</head>



<body>

<?php
require('ENTETE_MENU_Gestionnaire.php');

?>

<!--/////////////////////////// selectionne les données dans la bdd///////////////////////////////////////-->
<?php

$bdd = new PDO( 'mysql:host=localhost;dbname=g8b;port=3308;charset=UTF8', 'root', '');
$reponse = $bdd->query('SELECT `idTest`, `type`, `score`, DATE_FORMAT(`date`, "%d/%m/%Y"), `email` FROM `tests` ORDER by date DESC');




?>

<!--/////////////////////////////// boutons de redirection//////////////////////////////////////////////////////////////-->
<a href="Gestionnaire_Ajout_Resultat.php"><button class="boutonAjout">Ajouter un autre résultat</button> </a>





<!--/////////////////////////////////creation du tableau ////////////////////////////////////////////////////////-->

<h1 class="titre_gestionnaire"> Historique des tests effectués par les utilisateurs </h1>

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
        if (!isset($_POST['recherche'])) {


            while ($donnees = $reponse->fetch()) { ?>
                <tr>
                    <th><p class="utilisateur"><?php echo $donnees['email'] ?></p></th>
                    <th><p class="Type"><?php echo $donnees['type'] ?></p></th>
                    <th><p class="Date"><?php echo $donnees['DATE_FORMAT(`date`, "%d/%m/%Y")'] ?></p></th>
                    <th><p class="Score"><?php echo $donnees['score'] ?></p></th>
                </tr>

                <?php
            }
            $reponse->closeCursor();

        } else {

            $reponse_recherche = $bdd->prepare('SELECT `idTest`, `type`, `score`, DATE_FORMAT(`date`, "%d/%m/%Y"), `email` FROM `tests` WHERE email = :email');
            $reponse_recherche->execute(array(
                'email' => $_POST['recherche']
            ));

            while ($donnees = $reponse_recherche->fetch()) { ?>
                <tr>
                    <th><p class="utilisateur"><?php echo $donnees['email'] ?></p></th>
                    <th><p class="Type"><?php echo $donnees['type'] ?></p></th>
                    <th><p class="Date"><?php echo $donnees['DATE_FORMAT(`date`, "%d/%m/%Y")'] ?></p></th>
                    <th><p class="Score"><?php echo $donnees['score'] ?></p></th>
                </tr>

                <?php
            }
            $reponse_recherche->closeCursor();
        }

        ?>
    </table>

</div>

<a href="MonCompteGestionnaire.php">
    <button class="bouton_retour">RETOUR </button>
</a>







</body>

<?php
require('FOOTER_Gestionnaire.php');

?>

</html>