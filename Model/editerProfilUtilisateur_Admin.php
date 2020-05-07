<?php
require('connexion_bdd.php');

function recupdonneutilisateur($var_email){
    //connexion à la base de données
    $bdd=connexion_bdd();

    //Requete pour selectionner les données de l'utilisateurs
    $req = $bdd->prepare('SELECT * FROM utilisateurs WHERE email = :email_utilisateur');
    $req->execute(array('email' => $var_email));
    //fermeture de la requête
    return($req);
}


//Mise à jour du prenom
function updatePrenom_Admin($_emailVar){
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
function updateNom_Admin($_emailVar){
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
function updateMdp_Admin($_emailVar){
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
function updateEmail_Admin($_emailVar){
    //connexion à la base de données
    $bdd=connexion_bdd();

    //Requete pour mettre à jour des informations présente dans la bdd
    $req = $bdd->prepare('UPDATE utilisateurs SET email = :nvEmail WHERE email = :email ');
    $req->execute(array(
        'nvEmail' => $_POST['email_nouveau'],
        'email' => $_emailVar));
    //fermeture de la requête
    $req->closeCursor();
}


//Mise à jour date de naissance
function updateNaissance_Admin($_emailVar){
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