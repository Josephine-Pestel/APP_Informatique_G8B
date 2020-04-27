<?php
session_start();
//appelle du model editer profil BDD
require('EditerProfilGestionnaireBdd.php');

if($_POST['nom']){
    updateNom($_SESSION['email']);
    $_SESSION['nom']=$_POST['nom'];
    header('Location:MonCompteGestionnaire.php');
}
if($_POST['email']){
    updateEmail($_SESSION['email']);
    $_SESSION['email']=$_POST['nvEmail'];
    header('Location:MonCompteGestionnaire.php');
}

if($_POST['NumeroTel']){
    updateTel($_SESSION['email']);
    $_SESSION['NumeroTel']=$_POST['NumeroTel'];
    header('Location:MonCompteGestionnaire.php');
}
if($_POST['Domaine']){
    updateDomaine($_SESSION['email']);
    $_SESSION['Domaine']=$_POST['Domaine'];
    header('Location:MonCompteGestionnaire.php');
}
else{
    echo "tu n'a rien rempli";
}