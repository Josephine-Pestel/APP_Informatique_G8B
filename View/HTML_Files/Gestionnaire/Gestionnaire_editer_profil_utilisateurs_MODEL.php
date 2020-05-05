<?php

try {
    $bdd= new PDO( 'mysql:host=localhost;dbname=g8b;port=3308;charset=UTF8', 'root', '');
} catch (Exception $e){
    die('Erreur:'.$e->getMessage());
}



// Requête pour modifier le nom
    function updateNom()
    {
        $bdd= new PDO( 'mysql:host=localhost;dbname=g8b;port=3308;charset=UTF8', 'root', '');
        $req = $bdd->prepare('UPDATE utilisateurs SET nom = :nom WHERE email = :email ');
        $req->execute(array(
            'nom' => $_POST['nom'],
            'email' =>$_POST['email'],
        ));
        $req->closeCursor();
    }
    // Requête pour modifier le prénom
    function updatePrenom()
    {
        $bdd= new PDO( 'mysql:host=localhost;dbname=g8b;port=3308;charset=UTF8', 'root', '');
        $req = $bdd->prepare('UPDATE utilisateurs SET prenom = :prenom WHERE email = :email ');
        $req->execute(array(
            'prenom' => $_POST['prenom'],
            'email' =>$_POST['email'],
        ));
        $req->closeCursor();
    }

    // Requête pour modifier le mot de passe
    function updateMdp()
    {
        $bdd= new PDO( 'mysql:host=localhost;dbname=g8b;port=3308;charset=UTF8', 'root', '');
        $req = $bdd->prepare('UPDATE utilisateurs SET mdp = :mdp WHERE email = :email ');
        $req->execute(array(
            'mdp' => $_POST['mdp'],
            'email' =>$_POST['email'],
        ));
        $req->closeCursor();
    }
    // Requête pour modifier la date d'inscription
    function updateDateInscrip()
    {
        $bdd= new PDO( 'mysql:host=localhost;dbname=g8b;port=3308;charset=UTF8', 'root', '');
        $req = $bdd->prepare('UPDATE utilisateurs SET date_inscription = :date_inscription WHERE email = :email ');
        $req->execute(array(
            'date_inscription' => $_POST['date_inscription'],
            'email' =>$_POST['email'],
        ));
        $req->closeCursor();
    }

    // Requête pour modifier la date de naissance
    function updateDateNaiss()
    {
        $bdd= new PDO( 'mysql:host=localhost;dbname=g8b;port=3308;charset=UTF8', 'root', '');
        $req = $bdd->prepare('UPDATE utilisateurs SET date_naissance = :date_naissance WHERE email = :email ');
        $req->execute(array(
            'date_naissance' => $_POST['date_naissance'],
            'email' =>$_POST['email'],
        ));
        $req->closeCursor();
    }


?>
