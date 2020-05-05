<!DOCTYPE html>
<html lang="fr">
<head>
    <link type="text/css" rel="stylesheet" href="../../CSS_files/Gestionnaire_editer_resulats_utilisateurs.css?t=<? echo time(); ?>" media="all">
    <meta charset="utf-8" />
    <title>WINK FOR INIFINITE MEASURES</title>
</head>



<body>
<?php
require('ENTETE_MENU_Gestionnaire.php');

?>

<div class="all">

    <div class="FormulaireEditer">
        <h1>Veuillez indiquer l'adresse mail de l'utilisateur que vous souhaitez modifier :  </h1>
        <form action="Gestionnaire_editer_profil_utilisateurs_CONTROLLER.php" method="POST">
            <p><label>Identifiant de l'utilisateur : <input type ="text" name="email"/></label></p>
            <h1> Remplissez les données que vous souhaitez modifier sur cette utilisateur : </h1>
            <p><label> Nom : <input  type="text" name="nom"></label></p>
            <p><label> Prénom : <input type="text" name="prenom"></label></p>
            <p><label> Mot de passe : <input type="text" name="mdp"></label></p>
            <p><label> Date de naissance : <input type="date" name="date_naissance"></label></p>
            <p><label> Date d'inscription : <input type="date" name="date_inscription"></label></p>
            <p><input type="submit" value="Valider les modifications"/></p>
    </div>

    <div class="FormulaireSupprimer">
        <h1 class="titre_suppression"> Si vous voulez supprimer un utilisateur rentrez son identifiant :</h1>
        <form action="Gestionnaire_editer_profil_utilisateurs_CONTROLLER.php" method="POST">
            <p><label>Identifiant de l'utilisateur : <input type ="text" name="email"/></label></p>
            <p><input type="submit" value="Supprimer cette utilisateur"/></p>
    </div>
</div>


<a href="MonCompteGestionnaire.php">
    <button class="bouton_retour">RETOUR </button>
</a>


</body>
<?php
require('../FOOTER.php');

?>

</html>
