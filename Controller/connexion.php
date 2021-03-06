<!DOCTYPE html>
<html>
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link type="text/css" rel="stylesheet" href=../View/CSS_files/P_Connexion.css?t=<? echo time(); ?>
</head>

<?php
require('../Model/connexion.php');

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

$donneesNaissance = getDonneesUtilisateur($_POST['email']);
$recupNaissance = ($donneesNaissance['date_naissance']);



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

//appel du model ppur vérifier si l'utilisateur est banni ou non

$Verif_email_banis = verifEmail_tableUtilisateursBanis_connexion($_POST['email']);

////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//Fonction "password_verify" permet de hasher le mot de passe qui vient d'être rentré dans le formulaire de connexion
//Elle permet aussi la comparaison du mdp envoyé via le formulaire avec le mdp hashé de la bdd


$isPasswordCorrect_admin = password_verify($_POST['mdp'], $recup_mdp_admin);
$isPasswordCorrect_gestionnaire = password_verify($_POST['mdp'], $recup_mdp_gestionnaire);
$isPasswordCorrect_membre = password_verify($_POST['mdp'], $recupMdp);

////////////////////////////////////////////////////////////////////////////////////////////////////////////////


//BOUCLE : Connexion en tant qu'administrateur ou gestionnaire ou utilisateur ?
//si les champs sont vides
if (empty($_POST['email']) || empty($_POST['mdp']))
{
    echo '<p class="ERREURS"> Une donnée n\'a pas été rentrée. Vous allez être redirigé sur le formulaire de connexion.</p>';
    header('Refresh:8; url=../View/HTML_Files/SansCompte/P_Connexion.php');
}

else if ($Verif_email_banis){
    echo '<p class="ERREURS"> Impossible de vous connecter, vous avez été banni de ce site internet.</p>';
    header('Refresh:8; url=../View/HTML_Files/SansCompte/P_Connexion.php');
}

//sinon : CONNEXION ADMINISTRATEUR
else if($_POST['email'] == $recup_email_admin){
    if($isPasswordCorrect_admin){
        session_start();
        header('Location:../View/HTML_Files/Administrateur/MonCompteAdmin.php');
        $_SESSION['idAdministrateur'] = $recup_Id_admin;
        $_SESSION['email'] = $recup_email_admin;
        $_SESSION['nom'] = $recup_nom_admin;
        $_SESSION['mdp'] = $recup_mdp_admin;

    }
    else{
        echo '<p class="ERREURS"> Administrateur : Mauvais identifiant ou mot de passe. Vous allez être redirigé sur le formulaire de connexion.</p>';
        //header('Refresh:8; url=../View/HTML_Files/SansCompte/P_Connexion.php');
    }
}




//sinon : CONNEXION GESTIONNAIRE
else if($_POST['email'] == $recup_email_gestionnaire){
    if($isPasswordCorrect_gestionnaire){
        session_start();
        header('Location:../View/HTML_Files/Gestionnaire/MonCompteGestionnaire.php');
        $_SESSION['id_Gestionnaire'] = $recup_Id_gestionnaire;
        $_SESSION['email'] = $recup_email_gestionnaire;
        $_SESSION['nom'] = $recup_nom_gestionnaire;
        $_SESSION['num_tel'] = $recup_NumTel_gestionnaire;
        $_SESSION['domaine'] = $recup_domaine_gestionnaire;
        $_SESSION['mdp'] = $recup_mdp_gestionnaire;

    }
    else{
        echo '<p class="ERREURS"> Gestionnaire : Mauvais identifiant ou mot de passe. Vous allez être redirigé sur le formulaire de connexion.</p>';
        header('Refresh:8; url=../View/HTML_Files/SansCompte/P_Connexion.php');
    }
}



//sinon : CONNEXION UTILISATEUR
else{
    //Boucle pour vérifier les données rentrées dans le formulaire
    //si les données n'existent pas alors erreur
    if (!$recupMdp OR !$recupId){
        echo '<p class="ERREURS"> Vous n\'avez pas de compte. Vous allez être redirigé sur le formulaire de connexion.</p>';

        header('Refresh:8; url=../View/HTML_Files/SansCompte/P_Connexion.php');
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
            $_SESSION['naissance'] = $recupNaissance;
            header('Location:../View/HTML_Files/Utilisateur/MonCompteUtilisateur.php');
        }
        // sinon erreur
        else{
            echo '<p class="ERREURS"> Mauvais identifiant ou mot de passe. Vous allez être redirigé sur le formulaire de connexion.</p>';
            header('Refresh:8; url=../View/HTML_Files/SansCompte/P_Connexion.php');
        }
    }
}
?>
</html>