<!DOCTYPE html>
<html>
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link type="text/css" rel="stylesheet" href=../View/CSS_files/rechercheUtilisateur.css?t=<? echo time(); ?>
</head>

<!--/////////////////////////// selectionne les données dans la bdd///////////////////////////////////////-->
<?php
require('connexion_bdd.php');



//fonction utilisé dans Controller/rechercheUtilisateur.php
function recupUtilisateurs(){
    $bdd=connexion_bdd();
    $reponse = $bdd->query('SELECT email, nom, prenom, date_inscription, date_naissance 
                                    FROM utilisateurs 
                                    ORDER by date_inscription DESC');
    return($reponse);
}

//fonction utilisé dans Controller/barreRecherche_Admin.php
function barreRechercheEmail(){
    $bdd=connexion_bdd();
    $reponse_recherche = $bdd->prepare('SELECT email, nom, prenom, date_naissance, date_inscription
                                                    FROM utilisateurs WHERE email = :email');
    $reponse_recherche->execute(array('email' => $_POST['recherche']));
    return($reponse_recherche);
}


function barreRechercheNom(){
    $bdd=connexion_bdd();
    $reponse_recherche = $bdd->prepare('SELECT email, nom, prenom, date_naissance, date_inscription
                                                    FROM utilisateurs WHERE nom = :nom');
    $reponse_recherche->execute(array('nom' => $_POST['recherche']));
    return($reponse_recherche);
}

function barreRecherchePrenom(){
    $bdd=connexion_bdd();
    $reponse_recherche = $bdd->prepare('SELECT email, nom, prenom, date_naissance, date_inscription
                                                    FROM utilisateurs WHERE prenom = :prenom');
    $reponse_recherche->execute(array('prenom' => $_POST['recherche']));
    return($reponse_recherche);
}


function barreRechercheNaissance(){
    $bdd=connexion_bdd();
    $reponse_recherche = $bdd->prepare('SELECT email, nom, prenom, date_naissance, date_inscription
                                                    FROM utilisateurs WHERE date_naissance = :naissance');
    $reponse_recherche->execute(array('naissance' => $_POST['recherche']));
    return($reponse_recherche);
}


function barreRechercheInscription(){
    $bdd=connexion_bdd();
    $reponse_recherche = $bdd->prepare('SELECT email, nom, prenom, date_naissance, date_inscription
                                                    FROM utilisateurs WHERE date_inscription = :inscription');
    $reponse_recherche->execute(array('inscription' => $_POST['recherche']));
    return($reponse_recherche);
}



?>



