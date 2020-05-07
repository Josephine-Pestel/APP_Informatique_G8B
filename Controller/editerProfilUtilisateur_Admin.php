<!-- Appel Footer -->
<?php

require('../Model/editerProfilUtilisateur_Admin.php');


if($_POST['prenom']){
    updatePrenom_Admin($_POST['email_ancien']);
    header('Location:../View/HTML_Files/Administrateur/gererUtilisateur.php');
}
if($_POST['nom']){
    updateNom_Admin($_POST['email_ancien']);
    header('Location:../View/HTML_Files/Administrateur/gererUtilisateur.php');
}
/*else if($_POST['mdp']){
    updateMdp_Admin($_SESSION['email']);
    header('Location:../View/HTML_Files/Utilisateur/MonCompteUtilisateur.php');
}*/
if($_POST['email_nouveau']){
    updateEmail_Admin($_POST['email_ancien']);
    header('Location:../View/HTML_Files/Administrateur/gererUtilisateur.php');
}
if($_POST['naissance']){
    updateNaissance_Admin($_POST['email_ancien']);
    header('Location:../View/HTML_Files/Administrateur/gererUtilisateur.php');
}
else{
    echo "tu n'a rien rempli";
}

?>