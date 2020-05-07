<?php
require('connexion_bdd.php');


//Fonction pour supprimer l'utilisateur qui a l'adresse email rentrée dans le formulaire
function suppressionUtilisateur($email_var)
{
    //connexion à la base de données
    $bdd = connexion_bdd();
    //Requete pour supprimer les données dans la bdd
    $req = $bdd->prepare('DELETE FROM utilisateurs WHERE email = :email_utilisateur');
    $req->execute(array('email_utilisateur' => $email_var));
    //fermeture de la requête
    $req->closeCursor();
}

//Fonction pour voir si le mail existe déjà dans la bdd
function verifEmail($email_var)
{
    //connexion à la base de données
    $bdd = connexion_bdd();

    //on récupère dans la base de donnée tous les champ qui ont déjà ce mail
    $req = $bdd->prepare('SELECT email FROM utilisateurs WHERE email = :email_utilisateur');
    $req->execute(array('email_utilisateur' => $email_var));
    $donnees = $req->fetch();
    //fermeture de la requête
    $req->closeCursor();

    //on retourne la valeur de la requete pour pouvoir l'utiliser dans le controller
    return ($donnees['email']);
}
