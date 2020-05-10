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


function recupComDiscussion(){
    //préparation de la requete : récupérer seulement les commentaires qui sont liés au billet
    $bdd=connexion_bdd();

    $req = $bdd->prepare('
        SELECT *
        FROM forum_qr
        INNER JOIN forum 
        ON forum_qr.idDiscussion = forum.idDiscussion
        WHERE forum_qr.idDiscussion = :num');
    $req->execute(array(
        'num' => $_GET['num_de_la_discussion']));

    return($req);
//Préparation à l'affichage du billet grâce à la fonction fetch()

}




