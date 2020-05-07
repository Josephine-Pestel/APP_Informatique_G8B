<!DOCTYPE html>
<html lang="fr">

<head>
    <link type="text/css" rel="stylesheet" href="../../CSS_files/EditerProfil_Utilisateur.css?t=<? echo time(); ?>" media="all">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>INIFINITE MEASURES - CONNEXION</title>
</head>

<body>

<!-- Appel En-Tete et Menu avec requete php -->

<?php
session_start();
include('ENTETE_MENU_Admin.php');

?>

<!-- Milieu -->

<h1 class="titre_connexion"> Editer son profil </h1>
<!-- Formulaire -->


<section class="bloc_infos">
    <form name="formulaire_inscription" action="../../../Controller/editerProfilUtilisateur_Admin.php" method="post">

        <p class="prenom"> Entrez le mail de l'utilisateur que vous souhaitez modifier :</p>
        <input class = "rectangle_prenom" type="text" name="email_ancien"/> <br/>
        </br>

        <p class="prenom"> Modifier son prénom :</p>
        <input class = "rectangle_prenom" type="text" name="prenom"/> <br/>
        </br>

        <p class="nom"> Modifier son nom :</p>
        <input class = "rectangle_nom" type="text" name="nom"/> <br/>
        </br>

        <p class="email"> Modifier son email :</p>
        <input class = "rectangle_email" type="text" name="email_nouveau"/> <br/>
        </br>

        <p class="naissance"> Modifier sa date de naissance :</p>
        <input type="date" name="naissance"></label>
        </br>

        <input class="envoyer" type ="submit" value="Enregistrer" onclick="checkForm();"/>
    </form>

</section>


</body>

<!-- Appel Footer -->
<?php
require('../FOOTER.php');

?>

</html>

