<?php
require('connexion_bdd.php');


function ajoutdiscussionBDD()
{
    //connexion à la base de données

    $bdd=connexion_bdd();

    //Requete pour insérer les données dans la bdd
    $req = $bdd->prepare('INSERT INTO forum(theme, date_discussion, originaire) VALUES(:theme, CURDATE(), :originaire)');
    $req->execute(array(
        'theme' => $_POST['theme'],
        'originaire' => $_POST['originaire']));
    //fermeture de la requête
    $req->closeCursor();
}



