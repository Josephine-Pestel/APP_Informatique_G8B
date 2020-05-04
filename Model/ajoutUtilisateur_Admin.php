<?php

function ajoututilisateurBDD(){
    //connexion à la base de données
    require('connexion_bdd.php');
    $bdd=connexion_bdd();

    //Requete pour insérer les données dans la bdd
    $req = $bdd->prepare('INSERT INTO utilisateurs(prenom, nom, mdp, email, date_inscription, date_naissance) VALUES(:prenom, :nom, :mdp, :email, CURDATE(), :naissance)');
    $req->execute(array(
        'prenom' => $_POST['prenom'],
        'nom' => $_POST['nom'],
        'mdp' => $_POST['mdp'],
        'email' => $_POST['email'],
        'naissance'=>$_POST['naissance']));
    //fermeture de la requête
    $req->closeCursor();
}