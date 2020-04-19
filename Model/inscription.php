<!DOCTYPE html>
<html>
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>


<?php
//appel du fichier pour la connexion à la base de données
//require('../model/connexion_bdd.php');

//Fonction pour insérer les données d'un nouvel utilisateur (mot de passe crypté)
function getDonneesUtilisateurs(){
    //connexion à la base de données
    $bdd=connexion_bdd();

    //Requete pour insérer les données dans la bdd
    $req = $bdd->prepare('INSERT INTO utilisateurs(prenom, nom, mdp, email, date_inscription) VALUES(:prenom, :nom, :pass_hash, :email, CURDATE())');
    $req->execute(array(
        'prenom' => $_POST['prenom'],
        'nom' => $_POST['nom'],
        'pass_hash' => passwordHash($_POST['mdp']),
        'email' => $_POST['email']));
    //fermeture de la requête
    $req->closeCursor();
}

//Fonction pour voir si le mail existe déjà dans la bdd
function verif_email($email_var){
    //connexion à la base de données
    $bdd=connexion_bdd();

    //on récupère dans la base de donnée tous les champ qui ont déjà ce mail
    $req = $bdd->prepare('SELECT email FROM utilisateurs WHERE email = :email_utilisateur');
    $req->execute(array('email_utilisateur'=>$email_var));
    $donnees=$req->fetch();
    //fermeture de la requête
    $req->closeCursor();

    //on retourne la valeur de la requete pour pouvoir l'utiliser dans le controller
    return($donnees['email']);
}


//Fonction pour récupérer le mail dans la bdd.admin
function recup_email_admin_inscription(){
    //connexion bdd
    $bdd=connexion_bdd();

    $req = $bdd->query('SELECT email FROM administrateur');
    $donnees = $req->fetch();
    $req->closeCursor();

    return($donnees['email']);
}

//Fonction pour récupérer le mail dans la bdd.gestionnaire
function recup_email_gestionnaire_inscription(){
    //connexion bdd
    $bdd=connexion_bdd();

    $req = $bdd->query('SELECT email FROM gestionnaire');
    $donnees = $req->fetch();
    $req->closeCursor();

    return($donnees['email']);
}


