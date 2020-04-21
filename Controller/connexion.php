<?php
require('../model/connexion.php');

//RECUPERATION DES DONNEES MEMBRE
$donneesPrenom = getDonneesUtilisateur($_POST['email']);
$recupPrenom = ($donneesPrenom['prenom']);

$donneesNom = getDonneesUtilisateur($_POST['email']);
$recupNom = ($donneesNom['nom']);

$donneesMdp = getDonneesUtilisateur($_POST['email']);
$recupMdp = ($donneesMdp['mdp']);

$donneesEmail = getDonneesUtilisateur($_POST['email']);
$recupEmail = ($donneesEmail['email']);

$donneesId = getDonneesUtilisateur($_POST['email']);
$recupDateInscription = ($donneesId['idUtilisateur']);

$donneesDateCompte = getDonneesUtilisateur($_POST['email']);
$recupId = ($donneesDateCompte['date_inscription']);



//RECUPERATION DES DONNEES ADMINISTRATEUR
$donneesEmailAdmin = getDonneesAdmin();
$recup_email_admin = ($donneesEmailAdmin['email']);

$donneesMdpAdmin = getDonneesAdmin();
$recup_mdp_admin = ($donneesMdpAdmin['mdp']);

$donneesNomAdmin = getDonneesAdmin();
$recup_nom_admin = ($donneesNomAdmin['nom']);



//RECUPERATION DES DONNEES GESTIONNAIRE
$donneesEmailGestionnaire = getDonneesGestionnaire();
$recup_email_gestionnaire = ($donneesEmailGestionnaire['email']);

$donneesMdpGestionnaire = getDonneesGestionnaire();
$recup_mdp_gestionnaire = ($donneesMdpGestionnaire['mdp']);

$donneesNomGestionnaire = getDonneesGestionnaire();
$recup_nom_gestionnaire = ($donneesNomGestionnaire['nom']);


////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//HASHAGE DES MOTS DE PASSE
//HACHAGE DU MOT DE PASSE

$mdp_hash_admin = passwordHashAdminGest($recup_mdp_admin);
$mdp_hash_gest = passwordHashAdminGest($recup_mdp_gestionnaire);

function passwordHashAdminGest($input_password){
    $pass_hash = password_hash($input_password,  PASSWORD_DEFAULT);
    return($pass_hash);
}

//Fonction "password_verify" permet de hasher le mot de passe qui vient d'être rentré dans le formulaire de connexion
//Elle permet aussi la comparaison du mdp envoyé via le formulaire avec le mdp hashé de la bdd

$isPasswordCorrect_admin = password_verify($_POST['mdp'], $mdp_hash_admin);
$isPasswordCorrect_gestionnaire = password_verify($_POST['mdp'], $mdp_hash_gest);
$isPasswordCorrect_membre = password_verify($_POST['mdp'], $recupMdp);

////////////////////////////////////////////////////////////////////////////////////////////////////////////////


//BOUCLE : Connexion en tant qu'administrateur ou gestionnaire ou utilisateur ?
//si les champs sont vides
if (empty($_POST['email']) || empty($_POST['mdp']))
{
    echo 'Une donnée n\'a pas été rentrée. Vous allez être redirigé sur le formulaire de connexion.';
    header('Refresh:8; url=../view/HTML_Files/P_Connexion.php');
}



//sinon : CONNEXION ADMINISTRATEUR
else if($_POST['email'] == $recup_email_admin){
    if($isPasswordCorrect_admin){
        session_start();
        header('Location:../View/HTML_Files/MonCompteAdmin.php');
        $_SESSION['nomAdmin'] = $recup_nom_admin;
        //echo 'Bonjour ' . $_SESSION['nomAdmin'];
    }
    else{
        echo 'ADMIN : Mauvais identifiant ou mot de passe. Vous allez être redirigé sur le formulaire de connexion';
        header('Refresh:8; url=../view/HTML_Files/P_Connexion.php');
    }
}




//sinon : CONNEXION GESTIONNAIRE
else if($_POST['email'] == $recup_email_gestionnaire){
    if($isPasswordCorrect_gestionnaire){
        session_start();
        header('Location:../View/HTML_Files/MonCompteGestionnaire.php');
        $_SESSION['nomGestionnaire'] = $recup_nom_gestionnaire;
        //echo 'Bonjour ' . $_SESSION['nomGestionnaire'];

    }
    else{
        echo 'GESTIONNAIRE : Mauvais identifiant ou mot de passe. Vous allez être redirigé sur le formulaire de connexion';
        header('Refresh:8; url=../view/HTML_Files/P_Connexion.php');
    }
}



//sinon : CONNEXION MEMBRE
else{
    //Boucle pour vérifier les données rentrées dans le formulaire
    //si les données n'existent pas alors erreur
    if (!$recupMdp OR !$recupId){
        echo 'Vous n\'avez pas de compte. Vous allez être redirigé sur le formulaire de connexion';
        header('Refresh:8; url=../view/HTML_Files/P_Connexion.php');
    }
    // sinon si elles existent
    else{
        //si la verif du mot de passe est true, alors on démarre une session
        if ($isPasswordCorrect_membre){
            session_start();
            //$_SESSION['idUtilisateur'] = $recupId;
            $_SESSION['prenom_utilisateur'] = $recupPrenom;
            header('Location:../View/HTML_Files/MonCompteAdmin.php');
            //echo 'Vous êtes connecté en tant qu\'utilisateur !';
            //echo 'Bonjour ' . $_SESSION['prenom_utilisateur'];
        }
        // sinon erreur
        else{
            echo '2. MEMBRE : Mauvais identifiant ou mot de passe. Vous allez être redirigé sur le formulaire de connexion';
            header('Refresh:8; url=../view/HTML_Files/P_Connexion.php');
        }
    }
}