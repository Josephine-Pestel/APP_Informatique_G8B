<?php

try {
    $bdd= new PDO( 'mysql:host=localhost;dbname=g8b;port=3308;charset=UTF8', 'root', '');
} catch (Exception $e){
    die('Erreur:'.$e->getMessage());
}
/////////////////// On modifie les données rentrées dans le formulaire dans la bdd////////////////////////////////////////////


    //Requete pour modifier le nom
    $req = $bdd->prepare('UPDATE gestionnaire SET nom = :nom WHERE email = :email ');
    $req->execute(array(
        'nom' => $_POST['nom'],
        'email' => $_emailVar));
    $req->closeCursor();


    //Requete pour modifier l'email
    $req = $bdd->prepare('UPDATE gestionnaire SET email = :nvEmail WHERE email = :email ');
    $req->execute(array(
        'nvEmail' => $_POST['email'],
        'email' => $_emailVar));
    $req->closeCursor();



    //Requete pour modifier le mdp
    $req = $bdd->prepare('UPDATE utilisateurs SET mdp = :mdp WHERE email = :email ');
    $req->execute(array(
        'mdp' => $_POST['MotdePasse'],
        'email' => $_emailVar));
    $req->closeCursor();

    //Requete pour modifier le numero de tel
    $req = $bdd->prepare('UPDATE utilisateurs SET num_tel = :num_tel WHERE email = :email ');
    $req->execute(array(
        'num_tel' => $_POST['NumeroTel'],
        'email' => $_emailVar));
    $req->closeCursor();

//Requete pour modifier le domaine
    $req = $bdd->prepare('UPDATE utilisateurs SET num_tel = :num_tel WHERE email = :email ');
    $req->execute(array(
        'domaine' => $_POST['Domaine'],
        'email' => $_emailVar));
$req->closeCursor();

