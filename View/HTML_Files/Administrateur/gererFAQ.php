<!DOCTYPE html>
<html lang="fr">

<head>
    <link type="text/css" rel="stylesheet" href="../../CSS_files/gererFAQ.css?t=<? echo time(); ?>" media="all">
    <meta charset="utf-8" />
    <title>WINK FOR INIFINITE MEASURES</title>
    <script src="../../Javascript_Files/ajoutUtilisateur_Admin.js"></script>
</head>

<body>

<?php
require('ENTETE_MENU_Admin.php');

?>

<a href="gererUtilisateur.php">
    <button class="button_back">Retour </button>
</a>

<h1 class="titre_remplisser">Remplissez pour ajouter du contenu à la FAQ </h1>

<section class="bloc_infos">
    <form name="formulaire_ajout_faq" action="../../../Controller/ajoutFAQ_Admin.php" method="post">

        <p class="question"> Entrez votre question :</p>
        <textarea class = "rectangle_prenom" type="text" name="question" required ></textarea>
        </br></br>
        <p class="reponse"> Entrez la réponse correspondante:</p>
        <textarea class = "rectangle_nom" type="text" name="reponse" required ></textarea>


        <input class="envoyer" type ="submit" value="Ajouter dans la FAQ" onclick="checkForm_Admin();"/>
    </form>

</section>





</body>
<?php
require('FOOTER_Admin.php');

?>

</html>