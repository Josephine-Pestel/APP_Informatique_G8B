<!DOCTYPE html>
<html>
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link type="text/css" rel="stylesheet" href=../View/CSS_files/P_Connexion.css?t=<? echo time(); ?>
</head>

<?php
echo 'lol';

?>

<!--/////////////////////////// selectionne les données dans la bdd///////////////////////////////////////-->
<?php
require('../Model/connexion_bdd.php');


$reponse = $bdd->query('SELECT * FROM `tests` ORDER by date DESC');


?>

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
                    <th><p class="Date"><?php echo $donnees['date'] ?></p></th>
                    <th><p class="Score"><?php echo $donnees['score'] ?></p></th>
                </tr>

                <?php
            }
            $reponse->closeCursor();

        } else {

            $reponse_recherche = $bdd->prepare('SELECT * FROM tests WHERE idUtilisateur = :idUtilisateur');
            $reponse_recherche->execute(array(
                'idUtilisateur' => $_POST['recherche']
            ));

            while ($donnees = $reponse_recherche->fetch()) { ?>
                <tr>
                    <th><p class="utilisateur"><?php echo $donnees['email'] ?></p></th>
                    <th><p class="Type"><?php echo $donnees['type'] ?></p></th>
                    <th><p class="Date"><?php echo $donnees['date'] ?></p></th>
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