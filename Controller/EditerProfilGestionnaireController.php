<?php
session_start();
//appelle du model editer profil BDD
require('../Model/EditerProfilGestionnaireBdd.php');

if($_POST['nom']){
    updateNom($_SESSION['email']);
    $_SESSION['nom']=$_POST['nom'];
    header('Location:../view/HTML_Files/Gestionnaire/MonCompteGestionnaire.php');
}
if($_POST['email']){
    updateEmail($_SESSION['email']);
    $_SESSION['email']=$_POST['email'];
    header('Location:../view/HTML_Files/Gestionnaire/MonCompteGestionnaire.php');
}

if($_POST['NumeroTel']){
    updateTel($_SESSION['email']);
    $_SESSION['num_tel']=$_POST['NumeroTel'];
    header('Location:../view/HTML_Files/Gestionnaire/MonCompteGestionnaire.php');
}
if($_POST['Domaine']){
    updateDomaine($_SESSION['email']);
    $_SESSION['domaine']=$_POST['Domaine'];
    header('Location:../view/HTML_Files/Gestionnaire/MonCompteGestionnaire.php');
}
if($_POST['MotdePasse']){
    updateMdp($_SESSION['email']);
    header('Location:../view/HTML_Files/Gestionnaire/MonCompteGestionnaire.php');
}
else{
    echo "tu n'a rien rempli";
}