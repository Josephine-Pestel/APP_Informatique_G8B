<!DOCTYPE html>
<html lang="fr">

<head>
    <link type="text/css" rel="stylesheet" href="../../CSS_files/ajoutUtilisateur_Admin.css?t=<? echo time(); ?>" media="all">
    <meta charset="utf-8" />
    <title>WINK FOR INIFINITE MEASURES</title>
    <script src="../../Javascript_Files/ajoutUtilisateur_Admin.js"></script>
</head>

<body>

<?php
require('ENTETE_MENU_Admin.php');

?>
<h1> Suppresion des utilisateurs</h1>

<section class="bloc_infos">
    <form name="formulaire_suppression" action="../../../Controller/supprimerUtilisateur_Admin.php" method="post">
        <p class="email"> Adresse e-mail de l'utilisateur à supprimer :</p>
        <input class = "rectangle_email" type="text" name="email" required/> <br/>
        </br>

        <input class="envoyer" type ="submit" value="Supprimer l'utilisateur" onclick="checkForm_Admin();"/>
    </form>

</section>

<a href="gererUtilisateur.php">
    <button class="button_back">RETOUR </button>
</a>




</body>
<?php
require('FOOTER_Admin.php');

?>

</html>