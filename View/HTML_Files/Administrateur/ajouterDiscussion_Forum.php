<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- En-tête de la page -->
    <link type="text/css" rel="stylesheet" href="../../CSS_files/Forum.css?t=<? echo time(); ?>" media="all">
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



<section class="bloc_infos">
    <form name="formulaire_ajout" action="../../../Controller/ajoutDiscussion_Forum.php" method="post">

        <p class="theme"> Thème* :</p>
        <input class = "rectangle_nom" type="text" name="theme" required/> <br/>
        </br>

        <p class="originaire"> Lancée par (entrez votre email)* :</p>
        <input class = "rectangle_mdp" type="text" name="originaire" required/> <br/>
        </br>

        <input class="envoyer" type ="submit" value="Ajouter la discussion" onclick="checkForm_Admin();"/>
    </form>

</section>

<a href="gererUtilisateur.php">
    <button class="button_back">RETOUR </button>
</a>