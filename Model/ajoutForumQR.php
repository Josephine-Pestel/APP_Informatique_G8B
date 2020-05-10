<?php

require('connexion_bdd.php');

function ajoutCommentaireBDD()
{
    $bdd = connexion_bdd();

    $req = $bdd->prepare('INSERT INTO forum_qr(idDiscussion, auteur, post, date_post) 
VALUES(:numDiscussion, :auteur, :post, CURDATE())');
    $req->execute(array(
        'numDiscussion' => $_POST['numDiscussion'],
        'auteur' => $_POST['auteur'],
        'post' => $_POST['post']));
    $req->closeCursor();
}