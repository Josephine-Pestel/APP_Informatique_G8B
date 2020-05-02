<!DOCTYPE html>
<html>
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link type="text/css" rel="stylesheet" href=../View/CSS_files/P_Connexion.css?t=<? echo time(); ?>
</head>


<?php



if (!isset($_POST['recherche'])) {
    require('../../../Model/rechercheUtilisateur.php');
    while ($donnees = $reponse->fetch()) { ?>
        <tr>
            <th><p class="utilisateur"><?php echo $donnees['email'] ?></p></th>

            <th><p class="Date"><?php echo $donnees['nom'] ?></p></th>
            <th><p class="Score"><?php echo $donnees['prenom'] ?></p></th>
            <th><p class="Score"><?php echo $donnees['date_naissance'] ?></p></th>
            <th><p class="Score"><?php echo $donnees['date_inscription'] ?></p></th>
        </tr>
        <?php
    }

    $reponse->closeCursor();
} else {
    require('../Model/rechercheUtilisateur.php');
    echo '<META HTTP-EQUIV="Refresh" Content="0; URL=../View/HTML_Files/Administrateur/rechercheUtilisateur.php?">';

    $var = barreRecherche();
    while ($donnees = $var->fetch()) { ?>
        <tr>
            <th><p class="Date"><?php echo $donnees['nom'] ?></p></th>
            <th><p class="Score"><?php echo $donnees['prenom'] ?></p></th>
            <th><p class="Score"><?php echo $donnees['date_naissance'] ?></p></th>
            <th><p class="Score"><?php echo $donnees['date_inscription'] ?></p></th>
        </tr>
        <?php



    }
    $var->closeCursor();
}
?>

