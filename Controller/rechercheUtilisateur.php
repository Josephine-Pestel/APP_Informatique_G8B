<!DOCTYPE html>
<html>
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link type="text/css" rel="stylesheet" href=../View/CSS_files/P_Connexion.css?t=<? echo time(); ?>
</head>


<?php

require('../../../Model/rechercheUtilisateur.php');

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


<!--/////////////////////////// selectionne les données dans la bdd///////////////////////////////////////-->


