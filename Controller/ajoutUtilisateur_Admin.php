<link type="text/css" rel="stylesheet" href=../View/CSS_files/ajoutUtilisateur_Admin.css?t=<? echo time(); ?>

<?php
require('../Model/ajoutUtilisateur_Admin.php');

$email_rentre=verificationEmail($_POST['email']);

if ($email_rentre){
    echo '<p class="ERREUR_donnees_absente">Impossible ce mail existe déjà dans les utilisateur. Vous allez être redirigé dans quelques secondes sur le formulaire d\'inscription</p>';
    header('Refresh:8; url=../View/HTML_Files/Administrateur/ajouterUtilisateur.php');
}
else{
    ajoututilisateurBDD();
    echo 'L\'utilisateur a été ajouté à la base de donnée. Il possède désormais un compte';?>
    <a href="../View/HTML_Files/Administrateur/gererUtilisateur.php">
    <button class="retour">RETOUR </button>
</a>

<?php
}

//HACHAGE DU MOT DE PASSE
function passwordHash_admin($input_password){
    $pass_hash = password_hash($input_password,  PASSWORD_DEFAULT);
    return($pass_hash);
}
?>


