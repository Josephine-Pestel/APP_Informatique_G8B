<!DOCTYPE html>
<html>
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link type="text/css" rel="stylesheet" href=../View/CSS_files/P_Inscription.css?t=<? echo time(); ?>
</head>

<?php
session_start();
//appelle du model inscription
require('../Model/editerProfil_Utilisateur.php');

//$recupEmailBdd = recupEmail();

if($_POST['prenom']){
    updatePrenom($_SESSION['email']);
    $_SESSION['prenom']=$_POST['prenom'];
    header('Location:../View/HTML_Files/Utilisateur/MonCompteUtilisateur.php');
}
if($_POST['nom']){
    updateNom($_SESSION['email']);
    $_SESSION['nom']=$_POST['nom'];
    header('Location:../View/HTML_Files/Utilisateur/MonCompteUtilisateur.php');
}
/*else if($_POST['mdp']){
    updateMdp($_SESSION['email']);
    $_SESSION['mdp']=$_POST['mdp'];
    header('Location:../View/HTML_Files/Utilisateur/MonCompteUtilisateur.php');
}*/
if($_POST['email']){
    updateEmail($_SESSION['email']);
    $_SESSION['email']=$_POST['email'];
    header('Location:../View/HTML_Files/Utilisateur/MonCompteUtilisateur.php');
}
if($_POST['naissance']){
    if($_POST['naissance']> date("Y-m-d")){
        echo '<p class="ERREURS"> Vous avez entré une date dans le futur. Veuillez changer svp.</p>' ;
        header('Refresh:8; url=../View/HTML_Files/Utilisateur/EditerProfil_Utilisateur.php');
    }
    else{
        updateNaissance($_SESSION['email']);
        $_SESSION['naissance']=$_POST['naissance'];
        header('Location:../View/HTML_Files/Utilisateur/MonCompteUtilisateur.php');

    }

}
else{
    echo  '<p class="ERREURS"> Vous n\'avez rien rempli. Vous allez être redirigé sur le formulaire pour éditer votre profil.</p>' ;
    header('Refresh:8; url=../View/HTML_Files/Utilisateur/EditerProfil_Utilisateur.php');
}



