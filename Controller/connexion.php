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

$donneesDateInscription = getDonneesUtilisateur($_POST['email']);
$recupDateInscription = ($donneesDateInscription['date_inscription']);

$donneesId = getDonneesUtilisateur($_POST['email']);
$recupId = ($donneesId['idUtilisateur']);



//RECUPERATION DES DONNEES ADMINISTRATEUR
$donneesIdAdmin = getDonneesAdmin();
$recup_Id_admin = ($donneesIdAdmin['idAdministrateur']);

$donneesEmailAdmin = getDonneesAdmin();
$recup_email_admin = ($donneesEmailAdmin['email']);

$donneesMdpAdmin = getDonneesAdmin();
$recup_mdp_admin = ($donneesMdpAdmin['mdp']);

$donneesNomAdmin = getDonneesAdmin();
$recup_nom_admin = ($donneesNomAdmin['nom']);



//RECUPERATION DES DONNEES GESTIONNAIRE
$donneesIdGestionnaire = getDonneesGestionnaire();
$recup_Id_gestionnaire = ($donneesIdGestionnaire['id_Gestionnaire']);

$donneesEmailGestionnaire = getDonneesGestionnaire();
$recup_email_gestionnaire = ($donneesEmailGestionnaire['email']);

$donneesMdpGestionnaire = getDonneesGestionnaire();
$recup_mdp_gestionnaire = ($donneesMdpGestionnaire['mdp']);

$donneesNomGestionnaire = getDonneesGestionnaire();
$recup_nom_gestionnaire = ($donneesNomGestionnaire['nom']);

$donneesNum_TelGestionnaire = getDonneesGestionnaire();
$recup_NumTel_gestionnaire = ($donneesNum_TelGestionnaire['num_tel']);

$donneesDomaineGestionnaire = getDonneesGestionnaire();
$recup_domaine_gestionnaire = ($donneesDomaineGestionnaire['domaine']);


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
        $_SESSION['idAdministrateur'] = $recup_Id_admin;
        $_SESSION['email'] = $recup_email_admin;
        $_SESSION['nom'] = $recup_nom_admin;
        $_SESSION['mdp'] = $recup_mdp_admin;

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
        $_SESSION['id_Gestionnaire'] = $recup_Id_gestionnaire;
        $_SESSION['email'] = $recup_email_gestionnaire;
        $_SESSION['nom'] = $recup_nom_gestionnaire;
        $_SESSION['num_tel'] = $recup_NumTel_gestionnaire;
        $_SESSION['domaine'] = $recup_domaine_gestionnaire;
        $_SESSION['mdp'] = $recup_mdp_gestionnaire;

    }
    else{
        echo 'GESTIONNAIRE : Mauvais identifiant ou mot de passe. Vous allez être redirigé sur le formulaire de connexion';
        header('Refresh:8; url=../view/HTML_Files/P_Connexion.php');
    }
}



//sinon : CONNEXION UTILISATEUR
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
            $_SESSION['idUtilisateur'] = $recupId;
            $_SESSION['prenom'] = $recupPrenom;
            $_SESSION['nom'] = $recupNom;
            $_SESSION['email'] = $recupEmail;
            $_SESSION['date_inscription'] = $recupDateInscription;
            $_SESSION['mdp'] = $recupDateInscription;
            header('Location:../View/HTML_Files/MonCompteUtilisateur.php');
        }
        // sinon erreur
        else{
            echo '2. MEMBRE : Mauvais identifiant ou mot de passe. Vous allez être redirigé sur le formulaire de connexion';
            header('Refresh:8; url=../view/HTML_Files/P_Connexion.php');
        }
    }
}