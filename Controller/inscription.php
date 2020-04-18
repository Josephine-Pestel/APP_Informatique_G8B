<!DOCTYPE html>
<html>
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link type="text/css" rel="stylesheet" href=../view/css/P_Inscription.css?t=<? echo time(); ?>
</head>

<?php

//appelle du model inscription
require('../model/inscription.php');
//appel du model connexion pour pouvoir utiliser les fonctions de récupération d'email de l'admin et du gestionnaire
require('../model/connexion.php');


//VERIFICATION ENTREE DE L'UTILISATEUR
$pseudo_rentre=verif_email($_POST['email']);
$mailAdmin=recup_email_admin_inscription();
$mailGestionnaire=recup_email_gestionnaire_inscription();


if ($pseudo_rentre)
{
    echo '<p class="ERREUR_donnees_absente">Impossible ce mail existe déjà dans les utilisateur</p>';
}
else if($_POST['email']==$mailAdmin){
    echo '<p class="ERREUR_mail_existe"> Impossible ce mail est celui de l\'administrateur </p>';
}
else if($_POST['email']==$mailGestionnaire){
    echo '<p class="ERREUR_mail_existe"> Impossible ce mail est celui du gestionnaire </p>';
}
//si si les variables existent
else{
    //S'il y a plusieurs erreurs, alors message d'erreur
    if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) OR $_POST['mdp'] != $_POST['confirmation_mdp'] ){
        echo '<p class="ERREURS"> Change les erreurs qui te sont apparus en pop-up !
                                  Tu vas être redirigé dans quelques secondes sur le formulaire d\'inscription</p>' ;
        header('Refresh:8; url=../view/html/P_Inscription.php');
    }
    //sinon, s'il n'y a pas d'erreur, c'est bon on passe à la connexion !
    else{
        getDonneesUtilisateurs();
        header('Location:../view/html/P_Connexion.php');
    }
}

//HACHAGE DU MOT DE PASSE
function passwordHash($input_password){
    $pass_hash = password_hash($input_password,  PASSWORD_DEFAULT);
    return($pass_hash);
}



