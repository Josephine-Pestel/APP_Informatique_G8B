<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

</head>

<?php
require('../../../Model/rechercheUtilisateur.php');
$barreRecherche = barreRecherche();

while ($donnees = $barreRecherche->fetch())
{
    ?>
    <tr>
        <th><p class="utilisateur"><?php echo $donnees['email'] ?></p></th>
        <th><p class="Date"><?php echo $donnees['nom'] ?></p></th>
        <th><p class="Score"><?php echo $donnees['prenom'] ?></p></th>
        <th><p class="Score"><?php echo $donnees['date_naissance'] ?></p></th>
        <th><p class="Score"><?php echo $donnees['date_inscription'] ?></p></th>
    </tr>
    <?php

}
$barreRecherche->closeCursor();

?>
