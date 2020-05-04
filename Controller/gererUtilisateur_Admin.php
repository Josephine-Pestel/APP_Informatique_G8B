<?php

if($_POST['choix'] == 'rechercher'){
    header("Location: ../View/HTML_Files/Administrateur/rechercheUtilisateur.php");
    exit();
}
else if ($_POST['choix'] == 'ajouter'){
    header("Location: ../View/HTML_Files/Administrateur/ajouterUtilisateur.php");
    exit();
}
else if($_POST['choix'] == 'supprimer'){
    header("Location: ../View/HTML_Files/Administrateur/supprimerUtilisateur.php");
    exit();
}
else if($_POST['choix'] == 'bannir'){
    header("Location: ../View/HTML_Files/Administrateur/bannirUtilisateur.php");
    exit();
}
else{
    header("Location: ../View/HTML_Files/Administrateur/historiqueUtilisateur.php");
    exit();
}