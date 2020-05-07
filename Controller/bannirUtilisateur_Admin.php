<link type="text/css" rel="stylesheet" href=../View/CSS_files/ajoutUtilisateur_Admin.css?t=<? echo time(); ?>

<?php
require('../Model/bannirUtilisateur_Admin.php');

$email_rentre_formulaire=verifEmail_tableUtilisateurs($_POST['email']);
$email_rentre_formulaire2 = verifEmail_tableUtilisateursBanis($_POST['email']);

if (!$email_rentre_formulaire){
    echo '<p class="ERREUR_donnees_absente">Impossible ce mail n\'existe pas dans la base de donnée. Vous allez être redirigé dans quelques secondes sur la page précédente. </p>';
    header('Refresh:8; url=../View/HTML_Files/Administrateur/bannirUtilisateur.php');
}

else if ($email_rentre_formulaire2){
    echo '<p class="ERREUR_donnees_absente"> Impossible ce mail existe déjà dans les utilisateur banis. Vous allez être redirigé dans quelques secondes sur la page précédente.</p>';
    header('Refresh:8; url=../View/HTML_Files/Administrateur/bannirUtilisateur.php');
}
else{
    ajoutUtilisateurBanni($_POST['email']);
    echo '<p class="ERREUR_donnees_absente"> L\'utilisateur possédant l\'email ' . $_POST['email'] . ' ajouté à la table des utilisateur banni. Il ne pourra plus jamais se connecter. </p>' ?>

    <a href="../View/HTML_Files/Administrateur/gererUtilisateur.php">
        <button class="button_back_suppr">RETOUR </button>
    </a>

    <?php
}
?>

