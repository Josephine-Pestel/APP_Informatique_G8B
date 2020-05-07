<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

</head>

<?php
require('../../../Model/rechercheUtilisateur.php');


function executionRequete($fonctionRecherche){

    while ($donnees = $fonctionRecherche->fetch()) { ?>
        <tr>
            <th><p class="Date"><?php echo $donnees['email'] ?></p></th>
            <th><p class="Score"><?php echo $donnees['nom'] ?></p></th>
            <th><p class="Score"><?php echo $donnees['prenom'] ?></p></th>
            <th><p class="Date"><?php echo $donnees['date_naissance'] ?></p></th>
            <th><p class="Date"><?php echo $donnees['date_inscription'] ?></p></th>
        </tr>
        <?php

    }
    $fonctionRecherche->closeCursor();
}


$barreRecherche_Prenom = barreRecherchePrenom();
executionRequete($barreRecherche_Prenom);

$barreRecherche_Nom = barreRechercheNom();
executionRequete($barreRecherche_Nom);

$barreRecherche_Email = barreRechercheEmail();
executionRequete($barreRecherche_Email);

$barreRecherche_Inscription = barreRechercheInscription();
executionRequete($barreRecherche_Inscription);

$barreRecherche_Naissance = barreRechercheNaissance();
executionRequete($barreRecherche_Naissance);

?>