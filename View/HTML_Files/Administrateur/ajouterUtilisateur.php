<!DOCTYPE html>
<html lang="fr">

<head>
    <link type="text/css" rel="stylesheet" href="../../CSS_files/Gestionnaire_Ajout_Resultat.css?t=<? echo time(); ?>" media="all">
    <meta charset="utf-8" />
    <title>WINK FOR INIFINITE MEASURES</title>
</head>

<body>

<?php
require('ENTETE_MENU_Admin.php');

?>
<h1>Veuillez remplir le formulaire ci-dessous pour ajouter un utilisateur à la base de donnée </h1>

<section class="bloc_infos">
    <form name="formulaire_ajout" action="../../../Controller/ajoutUtilisateur_Admin.php" method="post">

        <p class="prenom"> Prénom de l'utilisateur* :</p>
        <input class = "rectangle_prenom" type="text" name="prenom"required/> <br/>
        </br>

        <p class="nom"> Nom de l'utilisateur* :</p>
        <input class = "rectangle_nom" type="text" name="nom" required/> <br/>
        </br>

        <p class="mdp"> Mot de passe de l'utilisateur* :</p>
        <input class = "rectangle_mdp" type="password" name="mdp" required/> <br/>
        </br>

        <p class="mdp2">Confirmation du mot de passe de l'utilisateur* :</p>
        <input class = "rectangle_mdp2" type="password" name="confirmation_mdp" required/> <br/>
        </br>

        <p class="email"> Adresse E-mail de l'utilisateur* :</p>
        <input class = "rectangle_email" type="text" name="email" required/> <br/>
        </br>

        <p class="date_naissance"> Date de naissance de l'utilisateur* :</p>
        <input type="date" name="naissance"required></label>
        </br>

        <input class="envoyer" type ="submit" value="Ajouter l'utilisateur" onclick="checkForm();"/>
    </form>

</section>




</body>
<?php
require('../FOOTER.php');

?>

</html>