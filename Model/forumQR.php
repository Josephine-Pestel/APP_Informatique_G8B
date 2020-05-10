<?php
require('connexion_bdd.php');


function recupFAQ_discussion(){
    $bdd=connexion_bdd();
    $req = $bdd->prepare('SELECT idDiscussion, theme, date_discussion, originaire 
                                    FROM forum
                                    WHERE idDiscussion =:num');
//On execute la requete faite sur le billet. On exécute le fait de récupérer le billet
    $req->execute(array(
        'num' => $_GET['num_de_la_discussion']));
//Préparation à l'affichage du billet grâce à la fonction fetch()

    return($req);
}

function ajoutForumQR()
{
    //connexion à la base de données

    $bdd=connexion_bdd();

    //Requete pour insérer les données dans la bdd
    $req = $bdd->prepare('INSERT INTO forum_qr(auteur, post, date_discussion) VALUES(:email_auteur, :post, CURDATE())');
    $req->execute(array(
        'email_auteur' => $_POST['auteur'],
        'post' => $_POST['post']));
    //fermeture de la requête
    $req->closeCursor();
}


