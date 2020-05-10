<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- En-tête de la page -->
    <link type="text/css" rel="stylesheet" href="../../CSS_files/ajoutDiscussion_Forum.css?t=<? echo time(); ?>" media="all">
    <!--<link rel="stylesheet" href="P_Accueil_Payen.css" />-->
    <meta charset="utf-8" />
    <title>WINK FOR INIFINITE MEASURES</title>
</head>



<body>
<!-- Milieu -->
<!-- Bannière -->

<?php
session_start();
require('ENTETE_MENU_Admin.php'); ?>

<a href="forumDiscussion.php">
    <button class="button_back">Retour </button>
</a>
<h1 class="titre_page"> Ajouter une discusssion au forum </h1>

<section class="bloc_infos">
    <form name="formulaire_ajout" action="../../../Controller/ajoutDiscussion_Forum.php" method="post">

        <p class="theme"> Thème* :</p>
        <input class = "rectangle_theme" type="text" name="theme" required/> <br/>
        </br>

        <p class="originaire"> Lancée par (entrez votre email)* :</p>
        <input class = "rectangle_auteur" type="text" name="originaire" required/> <br/>
        </br>

        <input class="ajouter" type ="submit" value="Ajouter la discussion" onclick="checkForm_Admin();"/>
    </form>

</section>
</body>

<!-- Appel Footer -->
<?php
require('FOOTER_Admin.php');

?>

</html>
<?php
