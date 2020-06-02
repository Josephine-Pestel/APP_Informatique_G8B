<?php
require('connexion_bdd.php');
function ajoututilisateurBDD(){
    //connexion à la base de données

    $bdd=connexion_bdd();

    //Requete pour insérer les données dans la bdd
    $req = $bdd->prepare('INSERT INTO utilisateurs(prenom, nom, mdp, email, date_inscription, date_naissance) VALUES(:prenom, :nom, :mdp, :email, CURDATE(), :naissance)');
    $req->execute(array(
        'prenom' => $_POST['prenom'],
        'nom' => $_POST['nom'],
        'mdp' => passwordHash_admin($_POST['mdp']),
        'email' => $_POST['email'],
        'naissance'=>$_POST['naissance']));
    //fermeture de la requête
    $req->closeCursor();
}

//Fonction pour voir si le mail existe déjà dans la bdd
function verificationEmail($email_var){
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