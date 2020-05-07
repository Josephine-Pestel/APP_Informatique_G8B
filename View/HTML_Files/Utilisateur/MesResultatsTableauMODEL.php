<?php

try {
    $bdd = new PDO('mysql:host=localhost;dbname=g8b;port=3308;charset=UTF8', 'root', '');
} catch (Exception $e) {
    die('Erreur:' . $e->getMessage());
}
/////////////////// On sélectionne les resultats d'un utilisateur////////////////////////////////////////////

function selectionne($email){
    $bdd= new PDO( 'mysql:host=localhost;dbname=g8b;port=3308;charset=UTF8', 'root', '');
    $req = $bdd->prepare('SELECT `type`, `score`, `date` FROM `tests` WHERE email=:email');
    $req->execute(array(
        'email' => $email));
    $req->closeCursor();
}
