<?php
require('Gestionnaire_editer_profil_utilisateurs_MODEL.php');

// on verifie si l'utilisateur est present dans la bdd
$bdd= new PDO( 'mysql:host=localhost;dbname=g8b;port=3308;charset=UTF8', 'root', '');
$req = $bdd->prepare('SELECT  * FROM `utilisateurs` WHERE email = :email ');
$req->execute(array(
    'email'=>$_POST['email'],
));

$donnees = $req -> fetch();

if ($donnees['email'] == $_POST['email']) {

    if($_POST['nom']){
        updateNom($_POST['email']);
        header('Location:MonCompteGestionnaire.php');
    }
    if($_POST['prenom']){
        updatePrenom($_POST['email']);
        header('Location:MonCompteGestionnaire.php');
    }
    if($_POST['mdp']){
        updateMdp($_POST['email']);
        header('Location:MonCompteGestionnaire.php');
    }
    if($_POST['date_inscription']){
        updateDateInscrip($_POST['email']);
        header('Location:MonCompteGestionnaire.php');
    }
    if($_POST['date_naissance']){
        updateDateNaiss($_POST['email']);
        header('Location:MonCompteGestionnaire.php');
    }
    else{
        header('location:.php');
    }
}



