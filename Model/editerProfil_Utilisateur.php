<!DOCTYPE html>
<html>
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>


<?php

//appel du fichier pour la connexion à la base de données
require('../Model/connexion_bdd.php');

/*
//recupération de l'email en bdd
function recupEmail(){
    //connexion bdd
    $bdd=connexion_bdd();

    $req = $bdd->prepare('SELECT email FROM utilisateur WHERE email = $_SESSION[\'email\']');
    $donnees = $req->fetch();
    $req->closeCursor();

    return($donnees['email']);


}*/

//Mise à jour du prenom
function updatePrenom($_emailVar){
    //connexion à la base de données
    $bdd=connexion_bdd();

    //Requete pour mettre à jour des informations présente dans la bdd
    $req = $bdd->prepare('UPDATE utilisateurs SET prenom = :prenom WHERE email = :email ');
    $req->execute(array(
        'prenom' => $_POST['prenom'],
        'email' => $_emailVar));
    //fermeture de la requête
    $req->closeCursor();

}

//Mise à jour du nom
function updateNom($_emailVar){
    //connexion à la base de données
    $bdd=connexion_bdd();

    //Requete pour mettre à jour des informations présente dans la bdd
    $req = $bdd->prepare('UPDATE utilisateurs SET nom = :nom WHERE email = :email ');
    $req->execute(array(
        'nom' => $_POST['nom'],
        'email' => $_emailVar));
    //fermeture de la requête
    $req->closeCursor();
}

//Mise à jour du mdp
function updateMdp($_emailVar){
    //connexion à la base de données
    $bdd=connexion_bdd();

    //Requete pour mettre à jour des informations présente dans la bdd
    $req = $bdd->prepare('UPDATE utilisateurs SET mdp = :mdp WHERE email = :email ');
    $req->execute(array(
        'mdp' => $_POST['mdp'],
        'email' => $_emailVar));
    //fermeture de la requête
    $req->closeCursor();
}

//Mise à jour de l'email
function updateEmail($_emailVar){
    //connexion à la base de données
    $bdd=connexion_bdd();

    //Requete pour mettre à jour des informations présente dans la bdd
    $req = $bdd->prepare('UPDATE utilisateurs SET email = :nvEmail WHERE email = :email ');
    $req->execute(array(
        'nvEmail' => $_POST['email'],
        'email' => $_emailVar));
    //fermeture de la requête
    $req->closeCursor();
}

//Mise à jour date de naissance
function updateNaissance($_emailVar){
    //connexion à la base de données
    $bdd=connexion_bdd();

    //Requete pour mettre à jour des informations présente dans la bdd
    $req = $bdd->prepare('UPDATE utilisateurs SET date_naissance = :naissance WHERE email = :email ');
    $req->execute(array(
        'naissance' => $_POST['naissance'],
        'email' => $_emailVar));
    //fermeture de la requête
    $req->closeCursor();
}