<!DOCTYPE html>
<html>
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link type="text/css" rel="stylesheet" href=../View/CSS_files/P_Connexion.css?t=<? echo time(); ?>
</head>

<!--/////////////////////////// selectionne les données dans la bdd///////////////////////////////////////-->
<?php
require('connexion_bdd.php');
$bdd=connexion_bdd();
$reponse = $bdd->query('SELECT email, nom, prenom, date_inscription, date_naissance 
                                    FROM utilisateurs 
                                    ORDER by date_inscription DESC');



function barreRecherche(){
    $bdd=connexion_bdd();
    $reponse_recherche = $bdd->prepare('SELECT email, nom, prenom, date_inscription, date_naissance
                                                    FROM utilisateurs WHERE nom = :nom');
    $reponse_recherche->execute(array('nom' => $_POST['recherche']));
    return($reponse_recherche);
}

?>

