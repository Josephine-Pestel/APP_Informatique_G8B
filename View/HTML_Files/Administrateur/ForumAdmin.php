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

<div>
    <table class="tableau">
        <tr>
            <th><p class="num">Fil de discussion</p></th>
            <th><p class="theme">Thème</p></th>
            <th><p class="date">Date</p></th>
            <th><p class="lancement">Lancée par</p></th>
            <th><p class="dernier_message">Dernier message de </p></th>
        </tr>

        <?php
        require('../../../Controller/Forum.php');
        ?>



    </table>

</div>



<a href="ajouterDiscussion_Forum.php">
    <button class="button_back">Ajouter une discussion </button>
</a>

