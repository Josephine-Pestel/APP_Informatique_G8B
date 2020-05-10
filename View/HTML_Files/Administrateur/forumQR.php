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
<?php
session_start();
require('ENTETE_MENU_Admin.php'); ?>

<!-- Récupération de la discussion -->
<?php
//Récupération de la discussion
require('../../../Controller/forumQR.php');
?>

<p>--------------------------------------------------------------------------------------------------------------------</p>
<!-- Formulaire pour mettre question/réponse -->
<p>Exprime-toi !</p>
<!-- PARTIE 1 : Formulaire pour écrire un commentaire -->
<form action="../../../Controller/ajoutForumQR.php" method="post">

    <input type="hidden" name="auteur" value = "<?php echo $_SESSION['email']?>" />


    <textarea name="post" rows="5" cols="45">Rentres ton commentaire dans cette case !</textarea>

    <input type="hidden" name="numDiscussion" value = "<?php echo $_GET['num_de_la_discussion']?>" />

    <input type ="submit" name="envoyer" </input>
</form>

<!-- PARTIE 3 : -->
<!-- Affichage de toutes les questions/réponse de la discussion : celles rentrées par l'utilisateur et celles déjà présentes -->
<p>--------------------------------------------------------------------------------------------------------------------</p>

<p>Voici les échanges des internautes sur cette discussion :</p>

<?php recup(); ?>

</body>

<!-- Appel Footer -->
<?php
require('FOOTER_Admin.php');
?>

</html>

