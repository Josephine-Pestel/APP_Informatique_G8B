<?php
require('connexion_bdd.php');

function ajoutQuestionFAQ(){
    //connexion à la base de données

    $bdd=connexion_bdd();

    //Requete pour insérer les données dans la bdd
    $req = $bdd->prepare('INSERT INTO faq(question, reponse) VALUES(:Q, :R)');
    $req->execute(array(
        'Q' => $_POST['question'],
        'R' => $_POST['reponse']));
    //fermeture de la requête
    $req->closeCursor();
}

//Fonction pour voir si le mail existe déjà dans la bdd
function verifQuestion(){
    //connexion à la base de données
    $bdd=connexion_bdd();

    //on récupère dans la base de donnée tous les champ qui ont déjà ce mail
    $req = $bdd->query('SELECT question FROM faq');
    $donnees=$req->fetch();
    //fermeture de la requête
    $req->closeCursor();

    //on retourne la valeur de la requete pour pouvoir l'utiliser dans le controller
    return($donnees['question']);
}