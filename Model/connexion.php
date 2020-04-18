<!DOCTYPE html>
<html>
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>


<?php
//appel du fichier pour la connexion à la base de données
require('../model/connexion_bdd.php');


////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//MEMBRE
//Fonction pour récupérer le mot de passe dans la bdd.utilisateur
function getDonneesUtilisateur($email_utilisateur){
    //connexion bdd
    $bdd=connexion_bdd();

    $req = $bdd->prepare('SELECT * FROM utilisateurs WHERE email = :email');
    $req->execute(array(
        'email' => $email_utilisateur));
    $donnees = $req->fetch();
    $req->closeCursor();
    return($donnees);
}

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//ADMINISTRATEUR
function getDonneesAdmin(){
    //connexion bdd
    $bdd=connexion_bdd();
    $req = $bdd->query('SELECT * FROM administrateur');
    $donnees = $req->fetch();
    $req->closeCursor();
    return($donnees);
}

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//GESTIONNAIRE

//Fonction pour récupérer le mail dans la bdd.gestionnaire
function getDonneesGestionnaire(){
    //connexion bdd
    $bdd=connexion_bdd();
    $req = $bdd->query('SELECT * FROM gestionnaire');
    $donnees = $req->fetch();
    $req->closeCursor();
    return($donnees);
}


