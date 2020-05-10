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

//Récupération du contenu du billet grâce à une requête en fonction de paramètres
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

<?php
//préparation de la requete : récupérer seulement les commentaires qui sont liés au billet


$bdd=connexion_bdd();

$req = $bdd->prepare('
        SELECT *
        FROM forum_qr
        INNER JOIN forum 
        ON forum_qr.idDiscussion = forum.idDiscussion
        WHERE forum_qr.idDiscussion = :num');
$req->execute(array(
    'num' => $_GET['num_de_la_discussion']));
//Préparation à l'affichage du billet grâce à la fonction fetch()

//On fait une boucle pour tout afficher
while($donnees = $req->fetch()){
?>

<p>
    <p class="titre_question"> &#11166; de <em> <?php echo $donnees['auteur'] ?></em> le
    <?php echo htmlspecialchars($donnees['date_post']); ?></p>
    <?php echo htmlspecialchars($donnees['post']); ?>
</p>

<?php
    }
//On arrête la requête
$req->closeCursor();


?>
</body>

<!-- Appel Footer -->
<?php
require('FOOTER_Admin.php');

?>

</html>
<?php
