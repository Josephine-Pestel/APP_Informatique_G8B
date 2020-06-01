<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- En-tête de la page -->
    <link type="text/css" rel="stylesheet" href="../../CSS_files/forumQR.css?t=<? echo time(); ?>" media="all">
    <!--<link rel="stylesheet" href="P_Accueil_Payen.css" />-->
    <meta charset="utf-8" />
    <title>WINK FOR INIFINITE MEASURES</title>
</head>

<body>
<?php
session_start();
require('ENTETE_MENU_Gestionnaire.php'); ?>

<a href="forumDiscussion.php">
    <button class="button_back">Retour </button>
</a>

<!-- Récupération de la discussion -->
<div class="en_tete">
    <?php require('../../../Controller/forumQR.php'); ?>
</div>
</br>
<!-- Formulaire pour mettre question/réponse -->
<p>Exprime-toi !</p>
<!-- PARTIE 1 : Formulaire pour écrire un commentaire -->
<form action="../../../Controller/ajoutForumQR_Gestionnaire.php" method="post">

    <input type="hidden" name="auteur" value = "<?php echo $_SESSION['email']?>" />


    <textarea name="post" rows="5" cols="45">Rentres ton commentaire dans cette case !</textarea>

    <input type="hidden" name="numDiscussion" value = "<?php echo $_GET['num_de_la_discussion']?>" /></br>

    <input class="ajouter" type ="submit" value="Ajouter le commentaire" </input>
</form>

<!-- PARTIE 3 : -->
<!-- Affichage de toutes les questions/réponse de la discussion : celles rentrées par l'utilisateur et celles déjà présentes -->
</br>
<p>--------------------------------------------------------------------------------------------------------------------
-------------------------------------------------</p>

<section class="donnes_page">
    <h2 class="sous_titre">Voici les échanges des internautes sur cette discussion :</h2>
    <?php recup(); ?>

</section>
</body>

<!-- Appel Footer -->
<?php
require('FOOTER_Gestionnaire.php');
?>

</html>

