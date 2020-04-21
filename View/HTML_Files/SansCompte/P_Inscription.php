<!DOCTYPE html>
<html lang="fr">

<head>
    <link type="text/css" rel="stylesheet" href="../../CSS_files/P_Inscription.css?t=<? echo time(); ?>" media="all">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>INIFINITE MEASURES - INSCRIPTION</title>
    <script src="../../Javascript_Files/Inscription.js"></script>

</head>

<body>

<!-- Appel En-Tete et Menu avec requete php -->
<?php
require('ENTETE_MENU_SansCompte.php');
?>

<!-- Milieu -->
<h1 class="titre_inscription"> Inscris-toi !</h1>
<!-- Formulaire d'inscriptions-->
<section class="bloc_infos">
    <form name="formulaire_inscription" action="../../../Controller/inscription.php" method="post">

        <p class="prenom"> Prénom* :</p>
            <input class = "rectangle_prenom" type="text" name="prenom"required/> <br/>
        </br>

        <p class="nom"> Nom* :</p>
            <input class = "rectangle_nom" type="text" name="nom" required/> <br/>
        </br>

        <p class="mdp"> Mot de passe* :</p>
            <input class = "rectangle_mdp" type="password" name="mdp" required/> <br/>
        </br>

        <p class="mdp2">Confirmation du mot de passe* :</p>
            <input class = "rectangle_mdp2" type="password" name="confirmation_mdp" required/> <br/>
        </br>

        <p class="email"> Adresse E-mail* :</p>
            <input class = "rectangle_email" type="text" name="email" required/> <br/>
        </br>

        <p class="date_naissance"> Date de naissance* :</p>
            <input type="date" name="naissance"required></label>
        </br>

        <input class="envoyer" type ="submit" value="S'inscrire" onclick="checkForm();"/>
    </form>

</section>




</body>

<!-- Appel Footer -->
<?php
require('../FOOTER.php');

?>

</html>