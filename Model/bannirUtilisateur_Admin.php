<?php
require('connexion_bdd.php');


function ajoutUtilisateurBanni($email_var){
    //connexion à la base de données

    $bdd=connexion_bdd();

    //Requete pour insérer les données de la table utilisateur dans la table utilisateurs_banis
    $req = $bdd->prepare('INSERT INTO utilisateurs_banis(prenom_banis, nom_banis, mdp_banis, email_banis, date_inscription_banis, date_naissance_banis) 
                                        SELECT prenom, nom, mdp, email, date_inscription, date_naissance 
                                        FROM utilisateurs
                                        WHERE email = :email_utilisateur');
    $req->execute(array('email_utilisateur'=>$email_var));
    //fermeture de la requête
    $req->closeCursor();

}

//Fonction pour voir si le mail existe déjà dans la bdd
function verifEmail_tableUtilisateurs($email_var){
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

function verifEmail_tableUtilisateursBanis($email_var){
    //connexion à la base de données
    $bdd=connexion_bdd();

    //on récupère dans la base de donnée tous les champ qui ont déjà ce mail
    $req = $bdd->prepare('SELECT email_banis FROM utilisateurs_banis WHERE email_banis = :email_utilisateur');
    $req->execute(array('email_utilisateur'=>$email_var));
    $donnees=$req->fetch();
    //fermeture de la requête
    $req->closeCursor();

    //on retourne la valeur de la requete pour pouvoir l'utiliser dans le controller
    return($donnees['email_banis']);
}