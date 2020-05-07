<link type="text/css" rel="stylesheet" href=../View/CSS_files/ajoutUtilisateur_Admin.css?t=<? echo time(); ?>

<?php
require('../Model/supprimerUtilisateur_Admin.php');

$email_rentre_form=verifEmail($_POST['email']);

if (!$email_rentre_form){
    echo '<p class="ERREUR_donnees_absente">Impossible ce mail n\'existe pas dans la base de donnée. Vous allez être redirigé dans quelques secondes sur la page précédente. </p>';
    header('Refresh:8; url=../View/HTML_Files/Administrateur/supprimerUtilisateur.php');
}
else{
    suppressionUtilisateur($_POST['email']);
    echo '<p class="ERREUR_donnees_absente"> L\'utilisateur possédant l\'email ' . $_POST['email'] . ' a été supprimé de la base de donnée </p>' ?>
    <a href="../View/HTML_Files/Administrateur/gererUtilisateur.php">
        <button class="button_back_suppr"> Revenir sur la page d'accueil </button>
    </a>
    <?php
}
?>